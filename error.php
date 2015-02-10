<header class="studio-404-header">
	<div class="container studio-404-headerContainer">
		<div class="row">
			<div class="col-lg-2"><a href="home" class="preventlink"><img src="assets/img/logo.png" width="150" height="63" alt="" /></a></div>
			<div class="col-lg-7 studio-404-topMenu">
				<ul>
					<li><a href="works" class="preventlink">Works</a></li>
					<li><a href="about" class="preventlink">About</a></li>
					<li><a href="contact" class="preventlink">Contact</a></li>
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
			<div class="col-lg-3"><font color="#fff">social networks</font></div>
		</div>
	</div>
</header>
<main>
	<div class="container studio-404-Container">
		
		<div class="row">
			<div class="col-lg-12">
				<h2>Error page not found !</h2>
			</div>
		</div>		

	</div>
</main>