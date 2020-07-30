<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
	<!-- Custom Style -->
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
<!--Navigation-->
	<!-- Todo Header-Section -->
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<!--End Navigation-->

<!-- Page wrapper -->
		<div class="page-wrapper">
<!-- Post-silder -->
			<div class="post-slider">
				<h1 class="slider-title">Trending Post</h1>
				<i class="fas fa-chevron-left prev"></i>
				<i class="fas fa-chevron-right next"></i>
			
			<div class="post-wrapper">
				
				<div class="post">
				<img src="assets/img/img1.jpg" alt="" class="silder-image">
				<div class="post-info">
					<h4><a href="">One day your life...</a></h4>
					<i class="fas fa-user">Awa melavine</i>
					&nbsp;
					<i class="fas fa-calendar">Mar 8, 2020</i>
				</div>
				</div>

				<div class="post">
				<img src="assets/img/img1.jpg" alt="" class="silder-image">
				<div class="post-info">
					<h4><a href="">One day your life...</a></h4>
					<i class="fas fa-user">Awa melavine</i>
					&nbsp;
					<i class="fas fa-calendar">Mar 8, 2020</i>
				</div>
				</div>

				<div class="post">
				<img src="assets/img/img1.jpg" alt="" class="silder-image">
				<div class="post-info">
					<h4><a href="">One day your life...</a></h4>
					<i class="fas fa-user">Awa melavine</i>
					&nbsp;
					<i class="fas fa-calendar">Mar 8, 2020</i>
				</div>
				</div>

				<div class="post">
				<img src="assets/img/img1.jpg" alt="" class="silder-image">
				<div class="post-info">
					<h4><a href="">One day your life...</a></h4>
					<i class="fas fa-user">Awa melavine</i>
					&nbsp;
					<i class="fas fa-calendar">Mar 8, 2020</i>
				</div>
				</div>

			</div>	
		</div>
	
<!-- End Post-silder -->
		
<!-- Content -->
	<div class="content clearfix">

		<!-- Main-content -->
		<div class="main-content">
			<h1 class="recent-post-title">Recents Posts</h1>
		
			<div class="post clearfix">
			<img src="assets/img/img1.jpg" alt="" class="post-image">
			<div class="post-preview">
			<h2><a href="">Title I am legend</a></h2>
			<i class="far fa-user">Awa Melvine</i>
			&nbsp;
			<i class="far fa-calendar">Mar 8, 2020</i>
			<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus, nam alias quis possimus soluta, suscipit qui illo, et voluptatum praesentium ut beatae a? Incidunt saepe, dolore unde repellat voluptate.</p>
			<a href="single.html" class="btn read-more">READ MORE</a>
			</div>
			</div>

			<div class="post clearfix">
			<img src="assets/img/img1.jpg" alt="" class="post-image">
			<div class="post-preview">
			<h2><a href="">Title I am legend</a></h2>
			<i class="far fa-user">Awa Melvine</i>
			&nbsp;
			<i class="far fa-calendar">Mar 8, 2020</i>
			<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus, nam alias quis possimus soluta, suscipit qui illo, et voluptatum praesentium ut beatae a? Incidunt saepe, dolore unde repellat voluptate.</p>
			<a href="single.html" class="btn read-more">READ MORE</a>
			</div>
			</div>

			<div class="post clearfix">
			<img src="assets/img/img1.jpg" alt="" class="post-image">
			<div class="post-preview">
			<h2><a href="">Title I am legend</a></h2>
			<i class="far fa-user">Awa Melvine</i>
			&nbsp;
			<i class="far fa-calendar">Mar 8, 2020</i>
			<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus, nam alias quis possimus soluta, suscipit qui illo, et voluptatum praesentium ut beatae a? Incidunt saepe, dolore unde repellat voluptate.</p>
			<a href="single.html" class="btn read-more">READ MORE</a>
			</div>
			</div>
		
		</div>
<!-- End Main Content -->


		<div class="sidebar">
			
			<div class="section search">
				<h2 class="section-title">Search</h2>
				<form action="index.html" method="post">
					<input type="text" name="search-term" class="text-input" placeholder="Search">
				</form>
			</div>


			<div class="section topics">
				<h2 class="section-title">Topics</h2>
				<ul>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
					<li><a href="">Poems</a></li>
				</ul>
			</div>
		
		</div>
	</div>
<!-- End Content -->
</div>
<!-- End Page wrapper -->
	

	<!-- FooterSection -->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
	<!-- EndFootersection -->

	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Slick Caursol -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- Custom Jquery -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>