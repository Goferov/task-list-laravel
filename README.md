# Notes App

Notes App is a simple web application built with Laravel, using Tailwind CSS for styling and Alpine.js for handling dynamic UI elements. Users can add, edit, delete, and toggle their notes.

## Technologies
- **Laravel**: Backend framework and logic for managing notes.
- **Tailwind CSS**: Used for styling the application.
- **Alpine.js**: Provides simple dynamic interactions on the frontend.

## Features
- **Add Notes**: Users can create new notes.
- **Edit Notes**: Ability to modify existing notes.
- **Toggle Notes**: Mark notes as important or completed.
- **Delete Notes**: Users can remove notes they no longer need.

## Requirements
- PHP 8.x
- Composer
- Node.js & npm/yarn
- MySQL (or any other supported database)

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-repo/notes-app.git
    cd notes-app
    ```

2. Install PHP and JavaScript dependencies:
    ```bash
    composer install
    npm install
    ```

3. Set up the environment file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure the database details in the `.env` file.

5. Run database migrations:
    ```bash
    php artisan migrate
    ```

6. Build frontend assets:
    ```bash
    npm run dev
    ```

7. Start the development server:
    ```bash
    php artisan serve
    ```

8. Visit [http://localhost:8000](http://localhost:8000) in your browser to view the application.

## Usage

- **Add a Note**: Enter the note content in the input field and click the "Add" button.
- **Edit a Note**: Click the edit icon next to the note, make your changes, and save.
- **Toggle a Note**: Click the checkbox to mark a note as important or completed.
- **Delete a Note**: Click the trash icon next to the note to remove it.
