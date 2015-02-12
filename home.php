<header class="studio-404-header">
	<div class="container studio-404-headerContainer">
			<div class="col-lg-2"><a href="home" class="preventlink"><img src="assets/img/logo.png" width="150" height="63" alt="" /></a></div>
			<div class="col-lg-7 studio-404-topMenu">
				<ul>
					<li><a href="works" class="preventlink">Works</a></li>
					<li><a href="about" class="preventlink">About</a></li>
					<li><a href="contact" class="preventlink">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-3 studio-404-socialNetworks">
				<ul>
					<li class="message"><a href=""><img src="assets/img/ms.png" width="28" height="19" alt="Message" /></a></li>
					<li><a href=""><img src="assets/img/in.png" width="19" height="19" alt="LinkedIn" /></a></li>
					<li><a href=""><img src="assets/img/fb.png" width="19" height="19" alt="facebook" /></a></li>
				</ul>
			</div>
	</div>
</header>

<div id="navigation">  
	  <div class="toggle">
	    <div class="toggleline"></div>
	    <div class="toggleline"></div>
	    <div class="toggleline"></div>
	  </div>
	  
	  <div class="menu">
	    <ul>
	     	<li><a href="works" class="preventlink">Works</a></li>
			<li><a href="about" class="preventlink">About</a></li>
			<li><a href="contact" class="preventlink">Contact</a></li>
	    </ul>
	</div>
</div>
<script type="text/javascript">
	$(".preventlink").click(function(e){
		e.preventDefault();
		var u = $(this).attr("href");
		window.history.pushState('page2', 'Title', 'index.php?page='+u);
		getNewUrl(u);
	});

	$(document).ready(function(){
			$('.toggle').click(function(){
			$('.menu').slideToggle();
		});
	});
</script>

<!-- Set up your HTML 
<div class="owl-carousel" style="width:100%; height:100%; margin-top:80px; float:left; overflow:hidden">
  <div> <img src="assets/img/slider.jpg" width="100%" height="100%" alt="img" /> </div>
  <div> <img src="assets/img/slider.jpg" width="100%" height="100%" alt="img" /> </div>
  <div> <img src="assets/img/slider.jpg" width="100%" height="100%" alt="img" /> </div>
  <div> <img src="assets/img/slider.jpg" width="100%" height="100%" alt="img" /> </div>
</div>
<script src="_plugins/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
<script>
	$(document).ready(function(){
  		$(".owl-carousel").owlCarousel({
  			items: 1, 
  			loop: true, 
  			autoplay: true, 
  			autoplayTimeout: 5000, 
  			smartSpeed: 2000 
  		});
	});
	$("body").css({"overflow-y":"hidden"});
</script>-->