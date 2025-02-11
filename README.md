# Task Manager App

A task manager application designed to help individuals and teams organize their tasks efficiently. Built with Laravel, Blade templates, MySQL, and Bootstrap.

## Features
- Create, update, and delete tasks.
- Set due dates and priorities for tasks.
- User authentication (sign up, log in).
- Responsive and intuitive UI powered by Bootstrap.

## Tech Stack
- **Backend**: Laravel (PHP)
- **Frontend**: Blade templates
- **Database**: MySQL
- **Styling**: Bootstrap

## Getting Started

### Prerequisites
- PHP (v8.0 or higher)
- Composer (PHP dependency manager)
- MySQL (local or cloud-based)
- Node.js (for frontend dependencies, optional for Bootstrap)

### Installation
1. Clone the repository:
   git clone https://github.com/your-username/task-manager-app.git
   cd task-manager-app

2. Install PHP dependencies using Composer:
   composer install

3. Install frontend dependencies (if using Bootstrap or other npm packages):
   npm install

4. Set up environment variables:
   Copy the .env.example file to .env:
   cp .env.example .env
   
   Update the .env file with your database credentials:
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_database_username
      DB_PASSWORD=your_database_password

6. Generate an application key
   php artisan key:generate
   
8. Run database migrations:
   php artisan migrate

9. Seed the database (optional, for dummy data):
    php artisan db:seed

10. Start the development server:
   php artisan serve

11. Compile frontend assets:
     npm run dev
