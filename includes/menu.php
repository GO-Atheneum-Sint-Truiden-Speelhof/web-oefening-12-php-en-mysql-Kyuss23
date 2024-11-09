<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();  // Only start session if not already started
}
?>
<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="index.php?page=start">
				<img src="plaatjes/camera.gif" alt="logo">
			</a>
			<div class="collapse navbar-collapse" id="menubalk">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="begin.php?page=wedstrijd" class="nav-link">Wedstrijd</a>
					</li>
					<li class="nav-item">
						<a href="begin.php?page=winnen" class="nav-link">Prijzen</a>
					</li>
					<li class="nav-item">
						<a href="begin.php?page=laureaat" class="nav-link">Laureaat vorig jaar</a>
					</li>
					<li class="nav-item">
						<a href="begin.php?page=deelnemen" class="nav-link">Deelnemen</a>
					</li>
					<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
						<li><a href="begin.php?page=inschrijvingen" class="nav-link">Inschrijvingen</a></li>
            			<li><a href="begin.php?page=logout" class="nav-link">Logout</a></li>
        			<?php else: ?>
            			<li><a href="begin.php?page=login" class="nav-link">Login</a></li>
        			<?php endif; ?>


				</ul>
			</div>
			<button class="navbar-toggler" type="button"
					data-toggle="collapse"
					data-target="#menubalk"
					aria-controls="menubalk" 
					aria-expanded="false" 
					aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>