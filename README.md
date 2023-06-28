
<h2>Name:IRASUBIZA Vainqueur Ernest</h2>
<h2>Reg No:19RP07957</h2>
<h3> Min Project Based On Crud For Product</h3>
===============================================

# vainqueurPro Application

This is a simple CRUD (Create, Read, Update, Delete) application built with Laravel. It allows you to manage products by performing basic operations such as creating, reading, updating, and deleting product records befor every things you have to register as creation of account and you login.
for authorirized user Only allow to do what app desgned for

## Features

- View a list of all products
- Create a new product with name, price, quantity, and description
- Update the information of a product
- Delete a product from the system

## Prerequisites

Before running this application, make sure you have the following prerequisites installed:

- PHP (>= 8.1)
- Composer
- Laravel Framework (>= 8.x)
- MySQL (or any other preferred database)

## Installation

1. Clone the repository to your local machine:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd laravel-crud-product
   ```

3. Install the project dependencies using Composer:
   ```
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`:
   ```
   cp .env.example .env
   ```

5. Generate the application key:
   ```
   php artisan key:generate
   ```

6. Update the `.env` file with your database credentials.

7. Run the database migrations to create the required tables:
   ```
   php artisan migrate
   ```

8. Start the Laravel development server:
   ```
   php artisan serve
   ```

9. Access the application by visiting `http://localhost:8000` in your web browser.

## Usage

- **Viewing Products**: After accessing the application, you will be redirected to the product listing page. Here, you can see a paginated list of all the products available in the system.

- **Creating a Product**: To create a new product, click on the "Create Product" button on the product listing page. Fill in the required details (name, price, quantity, and description) in the provided form and submit it. The new product will be saved in the database, and you will be redirected to the product listing page.

- **Viewing Product Details**: Clicking on a product's name or the "View" button on the product listing page will take you to the product details page. Here, you can see all the information about the selected product.

- **Updating a Product**: On the product details page, click on the "Edit" button to edit the product details. Make the necessary changes in the form and submit it. The product details will be updated in the database, and you will be redirected to the product listing page.

- **Deleting a Product**: On the product listing page, click on the "Delete" button next to a product to delete it from the system. A confirmation prompt will appear, and upon confirmation, the product will be permanently deleted from the database.

## Customization

- You can customize the application's views by modifying the blade templates located in the `resources/views/product` directory.

- Additional customization can be done by modifying the routes, controllers, and models as per your specific requirements.

## License

This Laravel CRUD Product Application is open-source software licensed under the https://github.com/1234567aaae/LaravelAssignment-Min-Project.git

Feel free to modify and enhance the application as needed.

## Contributing

Contributions are welcome! If you find any issues or want to add new features, please submit an issue or a pull request.

## Credits

This application was developed by IRASUBIZA Vainqueur Ernest.