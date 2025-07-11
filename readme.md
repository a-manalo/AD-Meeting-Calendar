<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/a-manalo/">
  </a>
  <h3 align="center">Meeting Calendar</h3>
</div>
<div align="center">
  Activity 3 in Application Development.
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=a-manalo/AD-Meeting-Calendar)

---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

This project is a meeting calendar, built using the languages, PHP, HTML, and CSS. It is the 3rd activity for the course, CCS0043: Application Development. The purpose of this project is for managing meetings.

### Key Components

- Home Page:
  - Welcome Message
  - Database Connection Status
- Login Page:
  - Login Form
- Database Setup and Implementation
- Authorization Features

### Technology

#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)

#### Databases
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Meeting-Calendar
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ head.component.php
|      └─ nav.component.php
|      └─ foot.component.php
└─ database
|   └─ users.model.sql
|   └─ meetings.model.sql
|   └─ meeting_users.model.sql
|   └─ tasks.model.sql
└─ handlers
|   └─ auth.handler.php
|   └─ mongodbChecker.handler.php
|   └─ postgreChecker.handler.php
└─ layouts
|   └─ main.layout.php
└─ pages
|  └─ login
|     └─ assets
|     |  └─ css
|     |  |  └─ login.css
|     └─ index.php
|  └─ logout
|     └─ index.php
└─ staticDatas
|  └─ users.staticData.php
|  └─ meetings.staticData.php
|  └─ meeting_users.staticData.php
|  └─ tasks.staticData.php
└─ utils
|   └─ auth.util.php
|   └─ dbResetPostgresql.util.php
|   └─ dbSeederPostgresql.util.php
|   └─ dbMigratePostgresql.util.php
|   └─ envSetter.util.php
|   └─ htmlEscape.util.php
└─ vendor
└─ .dockerignore
└─ .gitignore
└─ bootstrap.php
└─ composer.yaml
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

| Title | Purpose | Link |
| ------ | ----------------------------------------------------------------------------- | ------------- |
| ChatGPT | Assisted with creating dummy data, code structure, and debugging. | https://chatgpt.com/ |