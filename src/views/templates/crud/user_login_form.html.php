<div class="inner">
	<h1>Gradebook</h1>
	<h3>Login</h3>
	<form action="<?= BASE_URL; ?>/user/login" method="post">
		<input name="username" type="text" placeholder="Username" autocomplete="off"/>
		<input name="password" type="password" placeholder="Password" autocomplete="off"/>
		<input class="button" name="button" type="submit" value="Login"/>
	</form>
</div>