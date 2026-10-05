Butcher Shop
============

An early full stack project (2022): an online shop for a butcher in plain PHP and MySQL, with a cart, checkout and an admin panel. Kept here to show where I started; my current work is in the newer repositories on my profile.

What it does
------------

**For customers**

* Browse products by category and brand, and search
* Register, log in and keep a cart
* Check out through PayPal (sandbox) and see past orders

**For the admin** (`admin/`)

* Add, edit and remove products, categories and brands
* See customers and their orders, with a small dashboard

Built with
----------

PHP, MySQL, JavaScript, jQuery and Bootstrap.

Run it
------

1. Create a MySQL database called `ecommerce` and import `ecommerce.sql`.
2. Set the database details in `db.php` and `admin/classes/Database.php`.
3. Serve the folder with PHP, for example `php -S localhost:8000`.

The demo admin login is in `config/01 LOGIN DETAILS & PROJECT INFO.txt`. Use it only on your own computer.

What I would do differently today
---------------------------------

This was written before I used frameworks and tests. Today I would store passwords with a modern hash (not MD5), use prepared statements for every query, confirm payments with PayPal's server instead of trusting the return page, and add automated tests. My recent projects do all of these.
