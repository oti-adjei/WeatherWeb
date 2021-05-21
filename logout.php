<?php 

session_start();
session_destroy();
//End the session 

header("Location: index.php");
//After ending the session redirect the user to the main page that is the index page

?>