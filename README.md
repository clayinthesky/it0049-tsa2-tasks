# IT0049 TSA2 - Tasks for Today Management System

CodeIgniter 4 Tasks for Today system with public read-only pages and authenticated task management.

## Features

- Public Welcome, Task List, Profile, and About pages
- Login and logout with hashed passwords
- New task form with required title and task date
- Edit/update task workflow
- Soft delete through `is_archived`
- Archived tasks hidden from public task lists

## Setup

```bash
composer install
cp env .env
php spark key:generate
php spark migrate
php spark db:seed DemoUserSeeder
php spark serve
```

Demo login:

- Username: `demo`
- Password: `Demo123!`
