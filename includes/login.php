<?php 
    include("scripts/function.php");
?>

<div class="jumbotron">
	<h1 class="display-4">Log hier in!</h1>
</div>
<div class="row">
    <div class="col-md-6">
		<form method="post" onsubmit="login()">
		    <div class="form-group row">
				<div class="col">
					<label for="username">Username:</label><br>
					<input type="text" id="username" name="username" required><br><br>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="password">Password:</label><br>
					<input type="password" id="password" name="password" required><br><br>
				</div>
			</div>
            <div class="form-group row">
				<div class="col">
					<button type="submit">Login</button>
				</div>
			</div>
		</form>
    </div>
</div>