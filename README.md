# Book Management Application

- The Book Management Application facilitates book cataloging with features for adding, editing, and deleting entries. Users can upload book cover images alongside details such as title and author. The app uses Laravel for backend functionality and provides customizable file storage for managing uploaded images.

## Setup for project

- Clone the repository from GitHub: git clone <repository_url>
- Navigate into the project directory: cd <project_directory>

- Install dependencies using Composer: composer install

- Copy the .env.example file to .env: cp .env.example .env

- Configure the database settings in the .env file.

- Run database migrations: php artisan migrate



### API Endpoints
- GET /books: Retrieve a list of all books with image.

- POST /books/create: create a book with image upload.

- PUT /books/{book_id}/edit: Update details of a particular book upload.

- DELETE /books/{book_id}/destroy: Delete a particular book.

## Features

Book Rendering: Render Books on the frontend using base64 encoding.
CRUD Operations: Perform CRUD operations on book.
User Authentication: Ensure only authenticated users can perform image operations.
 ### Technologies Used
 - Laravel
- MySQL
- HTML/CSS

- Books Rendering
![Screenshot (634)](https://github.com/manoj7654/andreal_assignment/assets/107467981/9bbf33ca-817a-446a-bd23-06f2e1db5e6d)

- Book editing
![Screenshot (635)](https://github.com/manoj7654/andreal_assignment/assets/107467981/597c0113-99f0-4479-a099-6a607ac5462f)

