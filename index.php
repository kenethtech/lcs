<?php 
  function title(){
  	
  	echo "Luq's Cleaning Services Limited";

  }

 ?>
<!-- Header here --->
 <?php require_once('includes/header.php')?>

<!--- Navigation bar ---->
<?php require_once('includes/navbar.php')?>

		
			<!---- Image slide code --->
			<div id="carouselImage" class="carousel carousel-dark slide carousel-fade mb-2" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselImage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselImage" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselImage" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselImage" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselImage" data-bs-slide-to="4" aria-label="Slide 5"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="5000">
						<img class=" w-100" src="images/image15.jpeg" style="height:350px;">
					</div>
					<div class="carousel-item" data-bs-interval="5000">
						<img class="d-block w-100" src="images/image16.jpeg" style="height:350px;">
					</div>
					<div class="carousel-item" data-bs-interval="5000">
						<img class="d-block w-100" src="images/image18.jpeg" style="height:350px;">
					</div>
					<div class="carousel-item" data-bs-interval="5000">
						<img class="d-block w-100" src="images/image19.jpeg" style="height:350px;">
					</div>
					<div class="carousel-item" data-bs-interval="5000">
						<img class="d-block w-100" src="images/image21.jpeg" style="height:350px;">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselImage" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselImage" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
<div class="container-fluid">
	<center>
		<h4 class="float-middle"><strong>Welcome to Luq's Cleaning Services Limited</strong></h4>
	</center>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-8 col-ms-10 justify-content-center mt-3 mb-2">
			<p class="user-select-none">
				At Luq's Cleaning Solutions Limited, we take great pride in providing top-quality cleaning services to our clients. Our team of cleaning professionals is highly trained and experienced, with years of experience in the industry. We use the latest cleaning equipment and techniques to ensure that your space is sparkling clean and ready to use. With our expertise and attention to detail, you can rest assured that your property is in good hands.

			</p>
		</div>
		<div class="col-lg-6 col-md-12 col-ms-12 bg-image object-fit-fill mb-2 mt-3">
			<img src="images/image22.jpeg" class="img-fluid rounded" style=" height: 300px; ">
			<p class="mb-2">Don't let the beauty hide in the dust</p>
		</div>
		
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-8 col-ms-10 mt-3 mb-2">
			<center>

				<h5 class="text-muted"><strong><u> Our Vision</u></strong></h5>
				<img src="images/image13.jpeg" class="img-fluid rounded mt-2 mb-2" >
				
			</center>
			<p class="user-select-none text-muted">
				Our vision is to be recognized as the premier cleaning company in our region. known for our exceptional service, professionalism, and commitment to sustainability. We aim to continuously improve and innovate our services, utilizing the latest technology and techniques to stay ahead of the curve.
            </p>
		</div>
		<div class="col-lg-4 col-md-8 col-ms-10 mt-3 mb-2">
			<center>
				<h5 class="text-muted"><strong><u>Our Mission</u></strong></h5>
				<img src="images/image27.jpeg" class="img-fluid rounded mt-2 mb-2" style="height: 240px; width: auto;">
			</center>
			<p class="user-select-none text-muted">
				Our goal is to become a trusted partner for our clients, providing them with a clean and healthy environment that enhances their well-being and productivity. Ultimately, we aspire to make a positive impact on the communities we serve by creating a cleaner, healthier, and more sustainable world.
            </p>
		</div>
		<div class="col-lg-4 col-md-8 col-ms-10 mt-3 mb-2">
			<center>
				<h5 class="text-muted"><strong><u>Our Core Values</u></strong></h5>
				<img src="images/image30.jpeg" class="img-fluid rounded mt-2 mb-2" style="height: 240px; width: auto;">
			</center>
			<p class="user-select-none text-muted">
				Our core values are customer satisfaction, integrity, professionalism, attention to detail and sustainability
            </p>
		</div>
	</div>
</div>



 <?php require_once('includes/footer.php')?>