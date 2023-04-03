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

    <main class="main">
		<section class="blog-posts">
			<article>
				<img src="image\blog-post-image-1.jpg" alt="Blog Post Image">
				<h2>Blog Post Title 1</h2>
				<p>Excerpt from the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mauris vitae elit luctus cursus. Sed pharetra magna lorem, nec consequat dolor ultricies in.</p>
				<a href="post.php">Read More</a>
			</article>
			<article>
				<img src="image\blog-post-image-2.jpg" alt="Blog Post Image">
				<h2>Blog Post Title 2</h2>
				<p>Excerpt from the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mauris vitae elit luctus cursus. Sed pharetra magna lorem, nec consequat dolor ultricies in.</p>
				<a href="post.php">Read More</a>
			</article>
			<article>
				<img src="image\blog-post-image-3.jpg" alt="Blog Post Image">
				<h2>Blog Post Title 3</h2>
				<p>Excerpt from the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mauris vitae elit luctus cursus. Sed pharetra magna lorem, nec consequat dolor ultricies in.</p>
				<a href="post.php">Read More</a>
			</article>
		</section>
		<aside class="sidebar">
			<form>
				<label for="search">Search:</label>
				<input type="text" id="search" name="search"><br>
				<input type="submit" value="Go">
			</form>
			<ul class="categories">
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
			</ul>
		</aside>
	</main>

	<footer>
		<p>&copy; 2023 My Blog. All rights reserved.</p>
	</footer>
</body>
</html>
