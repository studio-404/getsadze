<header class="studio-404-header">
	<div class="container studio-404-headerContainer">
		<div class="col-lg-2"><img src="assets/img/logo.png" width="150" height="63" alt="" /></div>
		<div class="col-lg-5 studio-404-topMenu">
			<ul>
				<li><a href="home" class="preventlink">Home</a></li>
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
		<div class="col-lg-5">test</div>
	</div>
</header>
<main>
	<h1>Contact</h1>
</main>