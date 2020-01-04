 <!-- Footer Area Start Here -->
            <footer>

                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="index.html" class="footer-logo img-fluid">
                                    <!-- <img src="img/logo.png" alt="logo" class="img-fluid"> -->
                                    <?php the_custom_logo(); ?>
                                </a>
                                <ul class="footer-social" style="margin-top:40px">
                                    <li>
                                        <a href="#" title="facebook">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="twitter">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                </ul>
                                <p>© 2020 Estadão Alagoas. Todos os direitos reservados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->

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
