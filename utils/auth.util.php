<?php
declare(strict_types=1);

include_once UTILS_PATH . '/envSetter.util.php';

class Auth
{
    /**
     * Initialize session if not started.
     */
    public static function init(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Perform login: checks credentials and sets session.
     *
     * @param PDO    $pdo
     * @param string $username
     * @param string $password
     * @return void
     * @throws Exception if login fails
     */
    public static function login(PDO $pdo, string $username, string $password): bool
    {
        self::init();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;
        }

        return false;
    }

    /**
     * Return the currently logged-in user, or null.
     *
     * @return array|null
     */
    public static function user(): ?array
    {
        self::init();
        return $_SESSION['user'] ?? null;
    }

    /**
     * Return true if user is logged in.
     *
     * @return bool
     */
    public static function check(): bool
    {
        self::init();
        return isset($_SESSION['user']);
    }

    /**
     * Logs the user out and clears session.
     *
     * @return void
     */
    public static function logout(): void
    {
        self::init();
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
    }
}