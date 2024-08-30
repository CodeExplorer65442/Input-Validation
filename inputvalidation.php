<?php
$name = $_GET['name'];
if (!empty($name)) {
    echo "Welcome, $name!";
} else {
    echo "Please enter your name.";
}
?>
