<?php require_once 'partials/head.php'; ?>
<?php
if (isset($_SESSION['id'])) {
    $oglasi = get_all_user_ads($_SESSION['id']);
    header('Location: oglasi.php');
    die;
} else {
    header('Location: login.php');
    die;
}

?>
<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'partials/footer.php'; ?>    
