<header class="studio-404-header">
	<div class="container studio-404-headerContainer">
			<div class="col-lg-2"><a href="home" class="preventlink"><img src="assets/img/logo.png" width="150" height="63" alt="" /></a></div>
			<div class="col-lg-7 studio-404-topMenu">
				<ul>
					<li><a href="works" class="preventlink hoverSub hovered">Works</a></li>
					<li><a href="about" class="preventlink hoverSub">About</a></li>
					<li><a href="contact" class="preventlink hoverSub">Contact</a></li> 
				</ul>
				<script type="text/javascript">
				$(".preventlink").click(function(e){
					e.preventDefault();
					var u = $(this).attr("href");
					window.history.pushState('page2', 'Title', 'index.php?page='+u);
					getNewUrl(u);
				});
				</script>
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



<nav class="studio-404-navigation studio-404-navigationViewWork" style="display:block">
	<div class="col-lg-2 hideMobile">&nbsp;</div>
	<div class="col-lg-10 col-md-12">
		<h4>Identity Design: <span>Funicular</span></h4>
	</div>
</nav>

<main>
	<div class="container studio-404-Container-workView">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 studio-404-workviewItem">
			<img src="assets/img/pview1.jpg" width="100%" alt="Funicular" />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 studio-404-workviewItem">
			<img src="assets/img/pview1.jpg" width="100%" alt="Funicular" />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 studio-404-workviewItem">
			<img src="assets/img/pview1.jpg" width="100%" alt="Funicular" />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 studio-404-workviewItem">
			<img src="assets/img/pview1.jpg" width="100%" alt="Funicular" />
		</div>
	</div>
</main>

<script type="text/javascript">
	$(document).ready(function(){
		$('.toggle').click(function(){
			$('.menu').slideToggle();
		});
	});
</script>