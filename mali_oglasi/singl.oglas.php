<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'functions.php'; ?>
<?php $oglas = getOne($_GET['id']); ?>


<?php
 if (isset($_POST["submit"]) && $_POST["submit"]) {
    $jel_updateovan = updateOglas($_GET["id"], $_POST["title"], $_POST["text"], $_POST["price"], $_POST["category"]);
    if ($jel_updateovan) {
        header("Location: singl.oglas.php?id=".$_GET["id"]);
        die;
    }
 }

?>


    <div class="container">
        <div class="row ">
            <div class="col-10 offset-1">
                <h3 class="display-4 text-center"><?php echo $oglas['title'] ?></h3>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="card mb-2 mt-2">
                            <div class="card-header">
                            <a href="" class="btn btn-secondary btn-sn float-left"><?php echo $oglas['category'] ?></a>
                            </div>
                            <div class="card-body text-center">
                                
                                    
                                <form action="" class="form" method="POST">
                                    <input class="form-control" name="title" type="text" placeholder="Naslov" value="<?php echo $oglas['title']; ?>">
                                    <input class="form-control" name="text" type="text" placeholder="Text" value="<?php echo $oglas['text']; ?>">
                                    <input class="form-control" name="price" type="number" placeholder="Cena" value="<?php echo $oglas['price']; ?>">
                                    <input class="form-control" name="category" type="text" placeholder="Kategorija" value="<?php echo $oglas['category']; ?>">
                                    <input type="hidden" name="submit" value="1"><br>
                                    <button class="btn btn-info" type="submit">Izmena</button>
                                </form>
                            </div>
                                        <div class="card-footer">
                                            <a href="" class="btn btn-warning float-left"><?php echo $oglas['name'] ?></a>
                                            <a href="" class="btn btn-danger float-right"><?php echo $oglas['price'] ?></a>
                                        </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'partials/footer.php'; ?>    
