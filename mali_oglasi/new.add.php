<?php
require_once 'functions.php';
if (isset($_SESSION['id'])) { //da li je korisnik ulogovan
    $id = $_SESSION['id'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $sql = "INSERT INTO oglasi VALUES(NULL, '$title', '$text', '$category', '$price', '$id')";
    $query = mysqli_query(db(), $sql); //sql upit za unosenje podataka u bazu i u app

    if ($query) {
        header('Location: user.view.php');
        die;
    } else {
        header('Location: index.php');
        die;
        //ako je korisnik uspesno napravio novi oglas ide na user view ako nije dodao dobro oglas ide na index php
    }
} else {
    header('Location: index.php');
    die;
}
