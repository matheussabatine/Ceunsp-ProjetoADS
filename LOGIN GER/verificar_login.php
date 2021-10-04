<?php
if(!$_SESSION['email']){
    header('Location: ../LOGIN GER/index.php');
    exit();
}