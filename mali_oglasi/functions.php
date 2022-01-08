<?php
require 'config.php';
session_start();
function db()
{
    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Error');
    return $con;
}

function dd($val)
{
    echo "<pre>";
    die(var_dump($val));
    echo "</pre>";
}

function logUser($user)
{
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('Location: oglasi.php');
    die;
}

function getAll()
{
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.id";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $result;
    //za prikaz svih oglasa dodatih u bazu
}

function get_all_user_ads($id)
{
    $sql = "SELECT *, users.name FROM oglasi INNER JOIN users ON oglasi.user_id = users.id WHERE oglasi.user_id = '$id'";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $result;
}

function getOne($id)
{
    $sql = "SELECT *, users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id WHERE oglas.id = '$id'";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_assoc($query);

    return $result;
}

function getCategory($cat)
{
    $sql = "SELECT *, users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id WHERE oglas.category = '$cat'";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $result;
}

function getAllFromUser($name)
{
    $sql = "SELECT *, users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id WHERE users.name = '$name'";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $result;
}

function updateOglas($id, $title, $text, $price, $category)
{
    $sql = "UPDATE oglasi SET title='$title', text='$text', price='$price', category='$category' WHERE id='$id'";
    $query = mysqli_query(db(), $sql);
    return $query;
}

function deleteOglas($id)
{
    $sql = "DELETE FROM oglasi WHERE id='$id'";
    $query = mysqli_query(db(), $sql);
    return $query;
}
