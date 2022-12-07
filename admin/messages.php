<?php 

	$current = 'users';
	session_start();
	require_once 'includes/sidebar.php';						
	require_once 'includes/navbar.php';
	require_once 'functions/helper.php';


    ?>

	<div class="col-lg-12">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>phone</th>
							<th>email</th>
							<th>address</th>
							<th>city</th>
							<th>view</th>
							<th>controlls</th>
						</tr>
					</thead>
					<tbody>
		<?php 

        require_once "functions/connect.php";
		$selectMess = "SELECT * FROM messages ORDER BY view ASC";
		$query = $conn -> query($selectMess);
		foreach($query as $message) {

		?>
						<tr>
							<td><?= $message['id'] ?></td>
							<td><?= $message['name'] ?></td>
							<td><?= $message['phone'] ?></td>
							<td><?= $message['address'] ?></td>
							<td><?= $message['email'] ?></td>
							<td><?= $message['city'] ?></td>
							<td class="view"><?= $message['view'] == 0 ? 'unread' : 'read' ?></td>
							<td>
								<!-- Button trigger modal -->
<button type="button" class="btn btn-primary showMessBtn " data-toggle="modal" data-target="#id<?= $message['id']  ?>" data-id = "<?=$message['id']?>">
    view message
</button>

<!-- Modal -->
<div class="modal fade" id="id<?= $message['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <?= $message['massage'] ?>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		
			<button type="submit" class="btn btn-primary ">Save changes</button>
        </div>
    </div>
</div>
</div>
							</td>
						</tr>
		<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>	<!--/.main-->
<?php 

    require_once "includes/Footer.php";

    ?>

    <!-- <script src="js/Ajax.js"></script> -->