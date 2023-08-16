<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
		  <li><a href="logout.php">Logout</a></li>
		</ul>
		<nav style="padding-left: -10;" class="blue-grey darken-4">
		  <div class="nav-wrapper">
		    <ul class="right hide-on-med-and-down">
		      <!-- Dropdown Trigger -->
		      <li class="blue-text"><?php echo date('l, d  F  Y'); ?></li>
		      <li><a class="dropdown-trigger blue-text" href="#!" data-target="dropdown1">Hi , <?php echo $_SESSION["admin"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
		    </ul>
		  </div>
		</nav>