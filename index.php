<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Violonistra</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
</head>

<body style=" background-color: #0e0e0e;">

<?php include('header.php'); ?>


<div class="about_me">
<div class="container">
	<div class="top">
 <div class="row">
	
 <div class="content col-lg col-lg-4 mb-3 text-center">
		<img src="images/image12.png" width="80%" alt="">
	</div>
	<div class="content col-lg col-lg-8 pt-5">
		<h3>About me </h3>
	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
	   <a href="bio.php"><button class="button button1">More</button></a>
​
	</div>
	
</div>
</div>



<div class="middle pt-5">
	<h3>Looking for a good violoniste ?</h3>
	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
</div>

<div class="photos">
  <div class="row gallery ">
      <div class="col-md-3">
        <a href="images/image2.jpg"><img class="img-fluid image" src="images/image2.jpg" alt="Image"></a>
      </div>
      <div class="col-md-3">
        <a href="images/image3.jpg"><img class="img-fluid image" src="images/image3.jpg" alt="Image"></a>
      </div>
      <div class="col-md-3">
        <a href="images/image4.jpg"><img class="img-fluid image" src="images/image4.jpg" alt="Image"></a>
      </div>
      <div class="col-md-3">
        <a href="images/image6.jpg"><img  class="img-fluid image" src="images/image6.jpg" alt="Image"></a>
      </div>
    
</div>

<a href="gallery.php"><button class="button button1 mt-4 ">My Gallery</button></a>

</div>

<div class="my_video mt-5 mb-5" >
<div class="embed-responsive embed-responsive-16by9">
            <video  controls>
              <source src="videos/video1.mp4" type="video/mp4">
              Your browser does not support the video !
            </video>      
</div>

<a href="videos.php"><button class="button button1 mt-4 ">My Videos</button></a> 
</div>
<div class="contact_us">
	<h3>Feel free to Contact us</h3>
	<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	<a href="contact.php"><button class="button button1 mt-1 ">Contact Me</button></a>
</div>


</div>
</div>


<?php include('footer.php') ?>

<!------------------------------------------Scripts------------------------------------------>

<script src="js/jquery-3.4.1.min.js" ></script>
<script src="https://use.fontawesome.com/721f144d74.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.lightbox.js"></script>

 <script>
   $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

  $(function() {
    $('.photos .gallery a').lightbox(); 
  });
</script>

<!-------------------------------------------------------------------------------------------->

</body>
</html>