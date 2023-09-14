<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<header>
		
			<nav>
				<ul class="header-menu">
				     <div class="logo">
					     <img src="https://www.cabinet-dentaire.fr/wp-content/uploads/2020/12/logo-selarl-transparent.png">
				     </div>

					<li class="active">
						<a href="index.php">ACCUEIL</a>
						
					</li>
					<li>
						<a href="single.php">SINGLE</a>
					</li>
					<li>
						<a href="service.php"> CONTACT</a>
					</li>
					<li>
						<a href="pricing.php">PRICING</a>
					</li>
					<li>
						<a href="blog.php">BLOG</a>
					</li>

					<li>
						<a href="contact.php">SERVICE</a>
					</li>

					<a class="btn" href="">BOOKING NOW </a>

					
				</ul>
			</nav>
		
	</header> 

	<script>
	$('.header-menu li').on('click', function(){
		$(this).next().removeClass('active');
		$(this).addClass('active');
	});
</script>