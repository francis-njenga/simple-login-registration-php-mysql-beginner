# Simple PHP Login and Registration Form

This project features a straightforward login and registration form built with PHP and a MySQL database. It includes basic form validation and displays error messages for sign-in and sign-up processes, making it a great learning resource for beginners.

## My YouTube Coding Channel
You can learn how to implement this project by visiting my YouTube channel.
 [youtube.com/@francis_tech](https://youtube.com/@francis_tech)

## Project Overview

The application serves all pages through a single entry point, `index.php`, which dynamically displays content based on user requests. 

### File Structure

- **frontend/**: Place your page files in the `pages` subfolder for better organization.
- **assets/**: Store your CSS and JavaScript files in the `assets` folder. Basic styles and scripts have already been included.

### File Handling

- The form submission is processed by `backend.php`.
- The database connection is managed within `connect.php`.
- For this project, a MySQL database named `auth` is used. You can find the `auth.sql` file in the root directory, which you can import to set up the database.

### URL Structure

You can link to pages without the `.php` extension. For example, to link to an "about" page, simply use:

```html
<a href="about">About</a>
```


### Server Configuration
If you encounter issues with the server not responding, ensure that .htaccess is enabled in your XAMPP setup. Follow these steps:

1. Open your XAMPP installation directory.
2. Navigate to apache/conf.
3. Open the httpd.conf file with a text editor.
4. Find the line #LoadModule rewrite_module modules/mod_rewrite.so.
5. Uncomment this line by removing the # at the beginning.
6. Save the file and close the editor.
7. Restart the Apache server.

## Ensure that the .htaccess file is located in the root directory of your website for proper functionality with Apache.
