<div class = "heading">
	<div class = "logo">
		<?php 
			session_start();
			if($_SESSION['state'] == 2)
				echo "<img src='/img/logo.png' width=200px></img>";
			else
				echo "<img src='../img/logo.png' width=200px></img>";
		?>
	</div>
	<div class = "login">
		<!--check if its logged-->
		<?php
			$data = null;
			$active = false;
			if(isset($_SESSION['on'])){
				if(isset($_SESSION['username'])){
					if($_SESSION['on']){
						$data = $_SESSION['username'];
						echo "You are logged as ".$data;
						if($_SESSION['state'] == 2)
							echo "<br/><a href='/controllers/logout.php'>log out</a>";
						else
							echo "<br/><a href='../controllers/logout.php'>log out</a>";
						$active = true;
					}
				}
			} 
			
			if(!$active){
				if($_SESSION['state'] == 2)
					echo "<a href='/pages/register_user.php'>register</a> or <a href='pages/login_user.php'>login</a>";
				else
					echo "<a href='../pages/register_user.php'>register</a> or <a href='pages/login_user.php'>login</a>";
			}
		?>
	</div>
	<div class = "user">
		<br/>
		<a href="pages/profile_user.php">view/edit profile</a>
	</div>
</div>