

<form method="post" action="functions/add_products.php">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder=" price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">image </label>
    <input type="file" name="image" value="" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">categories</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
      <?php
      include'functions/connect.php';
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


