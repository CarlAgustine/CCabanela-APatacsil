# Student & Section Management System

## Description / Overview
This project is a simple Laravel-based CRUD application designed to manage **students** and their corresponding **sections**. It provides essential functionality for creating, editing, and organizing academic records efficiently using a clean MVC structure.

## Objectives
- To practice Laravel MVC architecture and Blade templating.
- To implement CRUD operations for Students and Sections.
- To create a functional midterm project demonstrating backend–frontend integration.
- To familiarize with routing, migrations, and controllers in Laravel.

## Features / Functionality
- Create, view, update, and delete **sections**.
- Add students under specific sections.
- Validate input data using Laravel validation.
- Automatic cascading delete: removing a section deletes its students.
- Clean and structured Blade views for better UI organization.

## Installation Instructions
1. Clone the project:
    ```
    git clone <repository-url>
    ```
2. Install dependencies:
    ```
    composer install
    npm install
    npm run dev
    ```
3. Configure the `.env` file and set your database credentials.
4. Run migrations:
    ```
    php artisan migrate
    ```
5. Start the local development server:
    ```
    php artisan serve
    ```

## Usage
1. Open the app in your browser:
    ```
    http://127.0.0.1:8000
    ```
2. Navigate to **Sections** to manage class sections.
3. Navigate to **Students** to add or modify student records.
4. When creating a student, select an existing section from the dropdown.

## Screenshots or Code Snippets

### 📌 Directory Structure (Views)
```
views/
 ├── layouts/
 │    └── app.blade.php
 ├── sections/
 │    ├── create.blade.php
 │    ├── edit.blade.php
 │    └── index.blade.php
 └── students/
      ├── create.blade.php
      ├── edit.blade.php
      └── index.blade.php
```

### 📌 Migration Code (Students Table)
```php
Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->foreignId('section_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});
```

## Contributors
- Carl (Student, Developer)

## License
This project is for academic purposes and does not require a formal license.
 