 <img src="<?php echo $_SESSION["user_image"] ?>"/>
					<a class="name"><i>Welcome!!</i> <br> <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?></a>
					
					<!-- more menu -->
					<ul class="menu">
						<li><a>Email: <?php echo $_SESSION['user_email_address'] ?></a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>
				</div>
			</li>
		</ul>







