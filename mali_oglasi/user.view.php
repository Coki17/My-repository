<?php require_once 'partials/head.php'; ?>
<?php
if (isset($_SESSION['id'])) {
    $oglasi = get_all_user_ads($_SESSION['id']);
} else {
    header('Location: index.php');
    die;
}

if (isset($_GET['id'])) {
    $jel_obrisan = deleteOglas($_GET['id']);
    if ($jel_obrisan) {
        header('Location: user.view.php');
        die;
    } else {
        echo "<h3>Doslo je do greske!</h3>";
    }
}
?>
<?php require_once 'partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="col-6 offset-3 mt-3 mb-5">
                    <a href="new.add.view.php" class="btn btn-info form-control">Novi oglas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($oglasi as $oglas) : ?>
            <div class="col-4">
                <div class="card mb-2 mt-2">
                    <div class="card-header">
                        <a href="" class="btn btn-secondary btn-sn">
                            <?php echo $oglas['category']; ?>
                        </a>

                        <?php if (isset($_SESSION['loggedUser']) && $oglas['id_oglasa']) : ?>
                        <?php endif; ?>


                    </div>
                    <div class="card-body text-center">
                        <h5><?php echo $oglas['title']; ?></h5>

                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-warning btn-sn float-left">
                            <?php echo $oglas['name']; ?>
                        </a>
                        <a href="" class="btn btn-danger btn-sn float-right">
                            <?php echo $oglas['price']; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;  ?>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>