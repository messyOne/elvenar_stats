<form class="col-lg-4 col-lg-offset-4" method="post">
	<div class="form-group">
		<label for="user-1">messy</label>
		<input type="number" class="form-control" name="user-1" placeholder="0" >
	</div>
	<div class="form-group">
		<label for="user-2">firegate666</label>
		<input type="number" class="form-control" name="user-2" placeholder="0" >
	</div>
	<div class="form-group">
		<label for="user-3">lensboy</label>
		<input type="number" class="form-control" name="user-3" placeholder="0" >
	</div>
	<div class="form-group">
		<label for="user-4">adler94</label>
		<input type="number" class="form-control" name="user-4" placeholder="0" >
	</div>

	<?php if (!isset($_SESSION['logged_in'])): ?>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
	<?php endif; ?>

	<input type="submit" value="Submit" name="submit" class="btn btn-default">
</form>
