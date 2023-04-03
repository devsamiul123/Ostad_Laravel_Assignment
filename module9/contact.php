<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="image\logo.png" alt="My Blog Logo">
		</div>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<div class="container">
            <?php
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) &&
                    isset($_POST['message'])){
                        echo "<h2>Form Sent Successfully!!!</h2>";
                }
            ?>
            
			<h1>Contact Us</h1>
			<p>Fill out the form below to send us a message.</p>


			<form action="" method="post">
				<div>
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" required>
				</div>
				<div>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required>
				</div>
				<div>
					<label for="subject">Subject:</label>
					<input type="text" id="subject" name="subject" required>
				</div>
				<div>
					<label for="message">Message:</label>
					<textarea id="message" name="message" required></textarea>
				</div>
				<div>
					<input type="submit" value="Send">
				</div>
			</form>
		</div>
	</main>

	<footer>
		<p>&copy; 2023 My Blog. All rights reserved.</p>
	</footer>
</body>
</html>
