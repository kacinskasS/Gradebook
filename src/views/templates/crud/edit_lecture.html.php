<div class="inner">
	<form action="" method="post">
		<input name="name" type="text" placeholder="Name" autocomplete="off" required value="<?= $lecture['name'] ?>"/>
		<input name="description" type="text" placeholder="Description" autocomplete="off"
		       value="<?= $lecture['description'] ?>" required/>
		<input class="button" name="button" type="submit" value="Edit"/>
		<a href="<?= BASE_URL.'/lecture/add'; ?>"><i class="fas fa-arrow-circle-left"></i></a>
	</form>
</div>