<?php
session_start();
$results = session_destroy();
if($results){
    header('location:login.php');
}