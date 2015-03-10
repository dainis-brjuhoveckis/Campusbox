<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
		<h1>Welcome to Campusbox!</h1>
		<p>Start using Campusbox today!</p>
		<p><a class="btn btn-primary btn-lg" href="/index.php/items/add" role="button">Add item &rarr;</a></p>
	</div>
</div>

<div class="container">

	<!-- Items -->
	<div class="row">

        <?php foreach ($items as $item): ?>
                    <div class="col-md-4">
			        <h2><?php echo $item['title'] ?></h2>
			        <p><?php echo $item['description'] ?></p>
			        <p><a class="btn btn-default" href="#" role="button">User name &rarr;</a></p>
		            </div>
        <?php endforeach ?>

	</div>

</div>