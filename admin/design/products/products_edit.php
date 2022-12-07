
<?php
$id = $_GET['id'];

require_once 'functions/connect.php';

$selectProduct = "SELECT * FROM products WHERE id = $id ";
$query = $conn -> query($selectProduct);
$product = $query -> fetch_assoc();
// print_r ($product);
// die();
?>


<form method="post" action="functions/update_products.php" enctype= "multipart/form-data">
  <div class="form-group">
  <input type="hidden" name = "id" value="<?= $product['id']?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="<?= $product['price'] ?>"  class="form-control" id="exampleInputEmail1" placeholder=" price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">image </label>
    <input type="file" name="image" value="<?= $product['image'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">categories</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
      <?php
      //require_once'functions/connect.php';
      $catID="SELECT * FROM categories";
      $catID=$conn->query($catID);
      foreach($catID as $cat){
      ?>
      <option value="<?=$cat['id'];?>" ><?=$cat['name'];?></option>
    <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


