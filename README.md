# Laravel Task Management Project

## Project Overview
This is a Laravel-based task management application that allows users to create, view, and manage tasks. The application is built using Laravel's core features and follows MVC architecture.

## Project Structure

```
project-01/
├── app/                 # Application core code
├── database/           # Database migrations and seeders
├── resources/         # Views and frontend assets
│   └── views/        # Blade template files
├── routes/           # Application routes
│   └── web.php      # Web routes definition
├── public/          # Publicly accessible files
└── storage/         # Application storage
```

## Features Implemented

### 1. Task Management
- Task listing page (`/tasks`)
- Individual task view (`/tasks/{id}`)
- Task model with the following properties:
  - ID
  - Title
  - Description
  - Long Description (optional)
  - Completion Status
  - Created At
  - Updated At

### 2. Views
- `index.blade.php`: Displays the list of all tasks
- `show.blade.php`: Shows detailed view of a single task
- Layout template using `layouts/app.blade.php`

### 3. Routing
The application includes the following routes:
- `/` - Redirects to tasks index
- `/tasks` - Shows all tasks
- `/tasks/{id}` - Shows individual task details

## Database Structure

The Task model includes the following fields:
- `id` (integer): Primary key
- `title` (string): Task title
- `description` (string): Brief task description
- `long_description` (string, nullable): Detailed task description
- `completed` (boolean): Task completion status
- `created_at` (timestamp): Creation timestamp
- `updated_at` (timestamp): Last update timestamp

## Frontend Features
- Clean and organized task listing
- Task completion status indication
- Clickable task titles linking to detailed views
- Responsive layout

## Development Environment
- Laravel Framework
- PHP
- Blade Template Engine
- MySQL Database

## Next Steps
Potential features to implement:
1. Task creation form
2. Task editing functionality
3. Task deletion
4. User authentication
5. Task categories or tags
6. Task priority levels
7. Due dates for tasks
8. Search and filter functionality

## Getting Started

1. Clone the repository
2. Copy `.env.example` to `.env` and configure your database
3. Run `composer install`
4. Run database migrations
5. Start the development server with `php artisan serve`

## Contributing
Feel free to contribute to this project by creating pull requests or reporting issues.
