<?php require_once 'partials/head.php'; ?>
<?php 
    if(!isset($_SESSION['id'])){
        header('Location: index.php');
        die;
    }
?>

<?php require_once 'partials/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h4 class="text-center m-3">Novi oglas</h4>
            <form action="new.add.php" method="post">
                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <input type="text" name="text" placeholder="text" class="form-control"><br>
                <input type="number" name="price" placeholder="price" class="form-control"><br>
                <select name="category" class="form-control"><br>
                    <option value="racunari" class="form-control">Racunari</option>
                    <option value="bela tehnika" class="form-control">Bela tehinka</option>
                    <option value="ribolov" class="form-control">Ribolov</option>
                    <option value="sport" class="form-control">Sport</option>
                    <option value="kuhinja" class="form-control">Kuhinja</option>
                    <option value="kupatilo" class="form-control">Kupatilo</option>
                </select><br><br>
                <button type="submit" class="btn btn-primary form-control">Add new</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>    
