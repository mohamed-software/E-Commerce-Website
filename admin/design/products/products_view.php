<a class="btn btn-primary " href= "?action=add">Add</a>
                        <br>
                        <br>
                    <table class="table table-hover table- bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>price </th>
                                <th>image</th>
                                <th>categories</th>
                                <th>controls</th>
                                
                            </tr>
                        </thead>

                        <tbody>
            <?php
            require_once 'functions/connect.php';
            $select_products = "SELECT * FROM products";
            $query = $conn -> query($select_products);
            $id = 0 ;
            foreach($query as $products){


            ?>
            
                            <tr>
                                <td><?= $products['id'] ?></td>
                                <td><?= $products['name'] ?></td>
                                <td><?= $products['price'] ?></td>
                                <td><img style="width:50px;" src="images/<?=$products['image'];?>"></td>
                               
                                <td><?php
                                $id=$products['cat_id'];
                                $selectCat="SELECT name FROM categories WHERE id=$id";
                                $selectCat=$conn->query($selectCat);
                                $selectCat=$selectCat->fetch_assoc();
                                echo $selectCat['name'];
                                ?></td>
                                <td>
                                <a class = "btn btn-primary" href= "?action=edit&id=<?=$products['id']?>">Edit</a>
                                <!-- <a class = "btn btn-danger" href= "">Delete</a> -->
                                  <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#id<?php echo $products['id']?>">
Delete
</button>

<!-- Modal -->
<div class="modal fade" id="id<?php echo $products['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        ary you sure to delete product   :  <?= $products['name']?> 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href = "functions/delete__products.php?id=<?= $products['id']?>">confirm </a>
    </div>
    </div>
</div>
</div>
                                </td> 
                            </tr>
    <?php  }  ?>
    
                        </tbody>
                    </table>