<?php 
//open session start. it will be sent temporary database in your computer
session_start();

//unset all temporary database
session_unset();

//close the session
session_destroy();

//go to index.php
header("Location: ../Login-WEB/index.php");
?>