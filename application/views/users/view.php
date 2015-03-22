<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
		<h1><?php echo $user_record['name'] ?></h1>
        <p><?php echo $user_record['email'] ?></p>
		<p><a class="btn btn-primary btn-lg" href="/index.php" role="button">Back to Campusbox</a></p>
	</div>
</div>

<div class="container">

	<!-- Items -->
	<div class="row text-center">

        <?php foreach ($user_items as $item): ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="caption">
			                    <h2><?php echo $item['title'] ?></h2>
                                <p><?php echo $item['description'] ?></p>
			                    <p><a class="btn btn-default" href="/index.php/items/view/<?php echo $item['id'] ?>" role="button">Details</a> <a class="btn btn-default" href="/index.php/users/view/<?php echo $item['userid'] ?>" role="button">Seller</a></p>
                            </div>
			            </div>
		            </div>

        <?php endforeach; ?>

	</div>

</div>