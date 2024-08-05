# Library Inventory API

## Overview

This is a simple API for managing a library inventory system. It allows users to manage books, authors, and borrowing records. The application uses Laravel 11 and MySQL for backend and database management.

## Requirements

- PHP 8.1+
- Composer
- Node.js and npm
- MySQL 5.7+

## Installation

### 1. Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/aleksandarsapic587/library-inventory.git
cd library-inventory
```

## Installation

### 2. Install Dependencies

To set up the project, you need to install both PHP and JavaScript dependencies. Follow these steps:

1. **Install PHP Dependencies**

   The project uses Composer for managing PHP packages. Run the following command to install the required PHP dependencies:

   ```bash
   composer install
   npm install && npm run dev
   ```

2. **.env Config**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=your_password
```
3. **Run Migrations**
```bash
php artisan migrate
```

4. **Start the Server**
```bash
php artisan serve
```

## API Endpoints
```bash
GET /api/authors                    //List all authors
POST /api/authors                   //Create a new author
GET /api/authors/{id}               //Get an author by ID
PUT /api/authors/{id}               //Update an author
DELETE /api/authors/{id}            //Delete an author


GET /api/books                      //List all books
POST /api/books                     //Create a new books
GET /api/books/{id}                 //Get a book by ID
PUT /api/books/{id}                 //Update a book
DELETE /api/books/{id}              //Delete a book


GET /api/borrow-records            //List all borrow records
POST /api/borrow-records           //Create a new borrow record
GET /api/borrow-records/{id}       //Get a borrow record by ID
PUT /api/borrow-records/{id}       //Update a borrow record
DELETE /api/borrow-records/{id}    //Delete a borrow records




```