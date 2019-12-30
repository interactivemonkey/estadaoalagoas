	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'estadaoalagoas' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
			//	printf( esc_html__( 'Proudly powered by %s', 'estadaoalagoas' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
			//	printf( esc_html__( 'Theme: %1$s by %2$s.', 'estadaoalagoas' ), 'estadaoalagoas', '<a href="http://interactivemonkey.com.br">Interactive MOnkey</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>


<script>


	   var owl = $('.owl-carousel');


owl.owlCarousel({
	  loop: true,
	  items: 4,
	  margin: 20,
	  autoplay:true,
	  autoplayTimeout:5000,
	  smartSpeed:2000,
	  dots:false,
	  nav:true,
	  navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	  navSpeed:false,
	  center:false,
	  responsive:{

			  	480:{
			  		 items:2,
			  		 nav:true,
			  		 dots:false
			  		},
		  		768:{
		  			items:3,
		  			nav:true,
		  			dots:false
		  		},
		  		992:{items:4,
		  			nav:true,
		  			dots:true
		  		},
		  		1200:{
		  			items:4,
		  			nav:true,
		  			dots:false
		  	      }
	            }

})

</script>

</body>
</html>
