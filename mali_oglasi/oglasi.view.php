<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php $oglasi = getAll(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h1 class="display-4 text-center">Svi Oglasi</h1>
            <div class="row justify-content-center">
                <?php foreach ($oglasi as $oglas) : ?>
                    <div class="col-6">
                        <div class="card mb-2 mt-2">
                            <div class="card-header">
                                <a href="show.category.php?cat=<?php echo $oglas['category']; ?>" class="btn btn-secondary btn-sn">
                                    <?php echo $oglas['category']; ?>
                                </a>

                            </div>
                            <div class="card-body text-center">
                                <h6><?php echo $oglas['title']; ?></h6>

                            </div>
                            <div class="card-footer">
                                <a href="oglasi_from_user.php?name=<?php echo $oglas['name']; ?>" class="btn btn-warning btn-sn float-left">
                                    <?php echo $oglas['name']; ?>
                                </a>
                                <a href="" class="btn btn-danger btn-sn float-right">
                                    <?php echo $oglas['price']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>