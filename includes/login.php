<div class="jumbotron">
	<h1 class="display-4">Log hier in!</h1>
</div>
<div class="row">
    <div class="col-md-6">
		    <div class="form-group row">
				<div class="col">
					<label for="gebrNaam">Gebruikersnaam:</label><br>
					<p><input type="text" id="gebrNaam" class="form-control" name="gebrNaam"></p>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col">
					<label for="passwoord">Passwoord:</label><br>
					<p><input type="password" id="passwoord" class="form-control" name="passwoord"></p>
				</div>
			</div>
            <div class="form-group row">
				<div class="col">
					<button onclick="login()" type="submit" id="loginKnop">Login</button>
				</div>
			</div>
    </div>
</div>
<script>
    function login(){
        location.href = 'inschrijvingen.php?page=inschrijvingen'
    }
</script>