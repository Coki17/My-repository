<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php $oglasi = getAllFromUSer($_GET['name']); 

?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 offset-1">
                <h3 class="display-4 text-center"><?php echo $_GET['name'] ?></h3>
                <div class="row">
                <?php foreach($oglasi as $oglas): ?>
                <div class="col-4">
                    <div class="card mb-2 mt-2">
                        <div class="card-header">
                            <a href="show.category.php?cat=<?php echo $oglas['category']; ?>" class="btn btn-secondary btn-sn">
                                <?php echo $oglas['category']; ?>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h5><?php echo $oglas['title']; ?></h5>
                            <a href="singl.oglas.php?id=<?php echo $oglas['id'] ?>" class="btn btn-light btn-sn">
                                Vidi oglas
                            </a>
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
               <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'partials/footer.php'; ?>    
