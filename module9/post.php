<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

	<main class="single-post">
		<div class="container">
			<article>
				<h1 class="post-title">My Blog Post Title</h1>
				<div class="post-meta">
					<span class="post-author">Posted by John Doe</span>
					<span class="post-date">on January 1, 2023</span>
				</div>
				<img src="image\blog-post-image-1.jpg" alt="My Blog Post Image">
				<p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in diam odio. Nullam consectetur tellus sed lacus accumsan venenatis. Aliquam a sapien sit amet sem vestibulum ullamcorper. Sed quis tellus felis. Suspendisse potenti. Etiam viverra, nunc eu rutrum facilisis, nibh nibh interdum nulla, in dignissim ipsum sapien ut metus.</p>
			</article>
			<div class="social-share">
				<h3>Share this post:</h3>
				<ul>
					<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>&copy; 2023 My Blog</p>
		</div>
	</footer>

</body>
</html>
