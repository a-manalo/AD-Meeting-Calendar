<?php
// Set up requirements
declare(strict_types=1);

require 'vendor/autoload.php';
require 'bootstrap.php';
require_once UTILS_PATH . '/envSetter.util.php';

// Adding the database host and connecting
$host     = $pgConfig['host'];
$port     = $pgConfig['port'];
$username = $pgConfig['user'];
$password = $pgConfig['pass'];
$dbname   = $pgConfig['db'];

// Connect to PostgreSQL
$dsn = "pgsql:host={$pgConfig['host']};port={$pgConfig['port']};dbname={$pgConfig['db']}";
$pdo = new PDO($dsn, $pgConfig['user'], $pgConfig['pass'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// Dropping tables
echo "Dropping old tables…\n";
foreach ([
    'users',
    'meetings',
    'meeting_users',
    'tasks',
] as $table) {
    // Use IF EXISTS so it won’t error if the table is already gone
    $pdo->exec("DROP TABLE IF EXISTS {$table} CASCADE;");
    echo "Dropped {$table}\n";
}

// Migrating new tables
$dbFiles = [
    'users.model.sql',
    'meetings.model.sql',
    'meeting_users.model.sql',
    'tasks.model.sql'
];

foreach ($dbFiles as $dbFile) {
    // Indicator if it was working
    echo "Applying schema from database/{$dbFile}…\n";
    $sql = file_get_contents("database/{$dbFile}");

    // Another indicator but for failed creation
    if ($sql === false) {
        throw new RuntimeException("Could not read database/{$dbFile}");
    }

    // If your model.sql contains a working command it will be executed
    $pdo->exec($sql);
    echo "Creation success from the {$dbFile}\n";
}

echo "PostgreSQL migration success.\n";

?>