
<!--=============First section start here==============-->
<section class="section home-jumbo fp-section fp-table active" data-parallax-src="assets/latest/img/home-01.jpg" style="background-color: transparent; width:100%;" data-anchor="jumbo">
<!-- Modal -->
 <div id="registermodel" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="">
  	  <div class="form-group">
      <label for="Firstname">First Name:</label>
      <input type="test" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" required>
    </div>
      <div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" minlength="6" required>
    </div>
      <div class="form-group">
      <label for="Firstname">Role:</label>
      <select class="form-control" name="role" required>
      	<option value="customer">Customer</option>
      	<option value="employee">Employee</option>
      </select>
          </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<div class="fp-tableCell">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="inner-home-content">
					<div class="col-md-6 col-sm-6 col-xs-9">
						<img src="assets/latest/img/logo1.png" alt="bobuncle" class="img-responsive home-jumbo__logo">
					</div>


				    <div class="col-md-6 col-sm-6 col-xs-3">
                    
				    <div id="myNav" class="overlay">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	                    <div class="overlay-content">
	                       <ul class="nav nav-pills">
										<li><a  href="#clients">About us</a></li>
								        <li><a  href="#">Privacy</a></li>
								        <li><a  href="#">FAQ &amp; Terms of Use</a></li>
								        <li><a  href="#blog">Contact Us</a></li>
								        <li><a  data-toggle="modal" data-toggle="modal" id="clicknow" data-target="#myModal1">Partner With Us</a></li>
							</ul>
                       </div>
                  </div>
                                    
    <script>
		function openNav() {
		    document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
		    document.getElementById("myNav").style.height = "0%";
		}

   </script>
   						<span><button class="btn btn-info" id="register_open" type="button">Register</button><span>
                           <span class="list" style="font-size:30px;cursor:pointer; margin-top:20px; float:right;" onclick="openNav()">&#9776;</span>
                            <span class="p-number"><a href="tel:7657900900"><i class="fa fa-phone" aria-hidden="true"></i>7657-900-900</a></span>
                   </div>                 
     


				
						<h1 class="home-jumbo__title">
						We Are Experts In
						</h1>
                     <span class="highlight" style="font-size:25px; font-weight:bold; color:#2f2f2f; float:left; width:100%;"><span class="highlight typed"></span></span>
                    
					</div>

				</div>
			</div>
		</div>
           <a class="mouse-scroll hidden-xs" href="#slides">
			<div class="mouse-scroll-arrow"></div>
		</a>
	</div>
</section>
<!--=============First section close here================-->

<?php if($this->session->flashdata('msg') != ''){?><div id="snackbar" class="flash_success_message"><?php echo $this->session->flashdata('msg'); ?></div><?php }?>

<!--=============second section start here=============-->
<section class="section home-clients-testimonials fp-section fp-table" style="background-color: #000;" data-anchor="clients">
	<div class="fp-tableCell">
		<div class="home-clients">
			<h2 class="home-clients-testimonials__title heading-line heading-line--light">Services</h2>
		       <div class="row">
					<div class="col-xs-12 col-sm-3">
			         <a target="_blank" href="<?php echo base_url(); ?>electrical" class="home-client">
			         <div class="left-service">
			         <div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-01.png">
							<span class="hover-img"><img src="assets/latest/img/service-01-hover.png" alt="#"></span></div>
							<h3>Electrical Services</h3>
						</div>
					</a>
            
					</div>
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>carpentry" class="home-client">
			            <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-02.png">
							<span class="hover-img"><img src="assets/latest/img/service-02-hover.png" alt="#"></span></div>
							<h3>Carpentry Services</h3>
						</div>
					</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>carspa" class="home-client">
			               <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-03.png">
							<span class="hover-img"><img src="assets/latest/img/service-03-hover.png" alt="#"></span></div>
							<h3>Car Spa</h3>
						</div>
					</a>
					</div>
				
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>housespa" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-04.png">
							<span class="hover-img"><img src="assets/latest/img/service-04-hover.png" alt="#"></span></div>
							<h3>Home Spa</h3>
						</div>
					</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>pestcontrol" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-05.png">
							<span class="hover-img"><img src="assets/latest/img/service-05-hover.png" alt="#"></span></div>
							<h3>Pest Control</h3>
						</div>
					</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>plumbing" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-06.png">
							<span class="hover-img"><img src="assets/latest/img/service-06-hover.png" alt="#"></span></div>
							<h3>Plumbing Services</h3>
						</div>
					</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>waterproofing" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-07.png">
							<span class="hover-img"><img src="assets/latest/img/service-07-hover.png" alt="#"></span></div>
							<h3>Water Proofing</h3>
						</div>
					</a>
					</div>


					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>homeappliances/repair" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-08.png">
							<span class="hover-img"><img src="assets/latest/img/service-08-hover.png" alt="#"></span></div>
							<h3>Installation and repair <br>of home appliances</h3>
						</div>
					</a>
				</div>

					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>painting" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-09.png">
							<span class="hover-img"><img src="assets/latest/img/service-09-hover.png" alt="#"></span></div>
							<h3>Color your home</h3>
						</div>
					</a>
				</div>

					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>terracegarden" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-10.png">
							<span class="hover-img"><img src="assets/latest/img/service-10-hover.png" alt="#"></span></div>
							<h3>Terrace Garden</h3>
						</div>
					</a>
				</div>


					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>swimmingpool" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-11.png">
							<span class="hover-img"><img src="assets/latest/img/service-11-hover.png" alt="#"></span></div>
							<h3>Swimming Pool</h3>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>salonathome" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-13.png">
							<span class="hover-img"><img src="assets/latest/img/service-13-hover.png" alt="#"></span></div>
							<h3>Women salon at home</h3>
						</div>
					</a>
				</div>

					<div class="col-xs-12 col-sm-3">
						 <a target="_blank" href="<?php echo base_url(); ?>tilesflooring" class="home-client">
			           <div class="left-service">
							<div class="image">
							<img class="featured_img_01" alt="" src="assets/latest/img/service-12.png">
							<span class="hover-img"><img src="assets/latest/img/service-12-hover.png" alt="#"></span></div>
							<h3>Tile and Flooring</h3>
						</div>
					</a>
				</div>
		</div>
	
	</div>
</section>
<!--=============second section close here=============-->




<!--=============third section start here=============-->
<section class="section home-blog fp-section fp-table " data-anchor="blog">
	<div class="fp-tableCell">
		<section class="module-posts module-posts1" id="module-posts" style="background-color: rgb(255,197,39);">
			<div class="container">
				<header>
					<h3 class="module-posts__title heading-line">Why Bob Uncle</h3>
				</header>
			
				<div class="col-md-4">
                  <div class="left-work">
                          <div class="images">
					        <i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>
							<h4>Background Checked</h4>
							<p>We value your safety and security that's why we ascertain that the details of every employee we bring on board are thoroughly checked.
							</p>
							
					</div>

					 <div class="left-work">
                          <div class="images">
							<i class="fa fa-clipboard" aria-hidden="true"></i>
                         </div>
							<h4>Seasoned professionals</h4>
							<p>Each Bob Uncle professional is experienced, reliable, and skilled to deliver the right service that meets your needs.</p>
							
					</div>

					 <div class="left-work">
                          <div class="images">
							<i class="fa fa-clock-o" aria-hidden="true"></i></div>
							<h4>Timely service</h4>
							<p>We respect the time of our clients and are committed to delivering timely services.</p>
							
					</div>

               

				</div>
				<div class="col-md-4">

				
                      <div class="feature_img"><img src="assets/latest/img/feature2-home2.png" alt="#"></div>
                      

				</div>
	            <div class="col-md-4">
	             <div class="right-work left-work">
                          <div class="images">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>

							</div>
							<h4>Reliable and transparent</h4>
							<p>We strive for customer satisfaction and vow to deliver trusted and transparent services to our customers. </p>
							
					</div>

					
					 <div class="right-work left-work">
                          <div class="images">
							<i class="fa fa-money" aria-hidden="true"></i>
                          </div>
							<h4>Moneyback guarantee</h4>
							<p>We won't hesitate to return your money if you are not satisfied with what we have delivered.</p>
							
					</div>


					 <div class="right-work left-work">
                          <div class="images">
							<i class="fa fa-usd" aria-hidden="true"></i>
                         </div>
							<h4>Standardized pricing</h4>
							<p>Our services come with transparent and competitive pricing that fit the pocket size of each individual.</p>
							
					</div>
				</div>
			
			
			</div>
			
		</section>
	</div>
</section>
<!--=============third section close here=============-->

<!--=============Fourth section start here=============-->
<section class="section home-about fp-section" data-anchor="about" style="background-color: #000;">
<div class="heading"><h2 class="home-clients-testimonials__title heading-line heading-line--light">Testimonial</h2></div>

	<div class="resposlider">
    
            <!-- Start: RespoSlider -->
            <ul id="resposliderCont" class="respocontent resFadeIn">
            
                <li class="resposingle active">
                    <div class="respotexts">
                        <p>&quot; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et. &quot;</p>
                    </div>
                    <h4>Marcose</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem quia. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut. &quot;</p>
                    </div>
                    <h4>Meera John </h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Sed ut, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. &quot;</p>
                    </div>
                    <h4>MarksMom</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa Sed ut perspiciatis unde omnis iste natus error sit voluptatem quae ab illo inventore veritatis et. &quot;</p>
                    </div>
                    <h4>Shakeera - ZeeMarcos</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Eaque ipsa quae ab illo inventore veritatis et Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. &quot;</p>
                    </div>
                    <h4>Rachel Micra - MicroTacos</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Unde omnis iste natus error sit voluptatem Sed ut perspiciatis accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et. &quot;</p>
                    </div>
                    <h4>John Richards - Richardo Inc</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa Sed ut perspiciatis unde omnis iste natus error sit voluptatem quae ab illo inventore veritatis et. &quot;</p>
                    </div>
                    <h4>Marks Moris - Mouten Marks</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem quia. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut. &quot;</p>
                    </div>
                    <h4>Johny Rica - Rangel Woods</h4>
                </li>
                <li class="resposingle">
                    <div class="respotexts">
                        <p>&quot; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et. &quot;</p>
                    </div>
                    <h4>Rachel - Renosa</h4>
                </li>
                
            </ul>
            <!-- End: RespoSlider -->
            
            <!-- Start: Thumbnail -->
            <div class="respothumb">
                <ul>
                    <li class="active"><img src="assets/latest/img/prof-01.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-02.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-01.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-02.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-01.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-02.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-01.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-02.jpg" alt=""></li>
                    <li><img src="assets/latest/img/prof-01.jpg" alt=""></li>
                </ul>
            </div>
            <!-- End: Thumbnail -->
            
    </div>
</section>
<!--=============Fourth section close here=============-->

<!--=============fifth section start here=============-->
<section class="section home-footer fp-section fp-table" data-anchor="footer">
	<div class="fp-tableCell">	
		<footer class="site-footer" style="background-image: url(assets/latest/img/home-02.jpg);">
			<div class="footer-top text-center">
				<div class="container-small">
					<h4 class="footer-top__title heading-line">Request a Free Quote</h4>
					<p class="footer-top__description">You have something awesome in mind. We can feel that. Reach out and let us know how we can help you.</p>	

					<div class="lower-footer">
					<ul class="menu">
						<li><a href="#clients">About us</a></li>
						<li><a href="javascript:void(0);">Privacy</a></li>
						<li><a href="javascript:void(0);">FAQ &amp; Terms of Use</a></li>
						<li><a href="#blog">Contact Us</a></li>
						<!-- <li><a target="_blank" href="#">Blog</a></li> -->
					</ul>
				</div>			
					
					<div class="row footer-top__details">
						<div class="col-sm-6 text-right">
							<address class="footer-top__address">
								SCF 112 First Floor,<br> Harmilap Nagar Tehsil Baltana Distt. <br>S.A.S Nagar- 140603
							</address>
						</div>
						<div class="col-sm-6 text-left">
							<address class="footer-top__contact">
								<i class="fa fa-phone"></i><a href="tel:7657900900">7657-900-900</a><br>
								<i class="fa fa-envelope"></i><a href="mailto:services@bobuncle.com">services@bobuncle.com</a>
							</address>
						</div>
					</div>

					
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="col-md-7">
						<p class="site-copyright">© Copyright 2016. All Rights Reserved.|<a href="#">Privacy Policy</a> | <a href="#">Join Our Team!</a></p>
					</div>
					<div class="col-md-5">
						<ul class="list-inline footer-bottom__social">
							<li class="footer-bottom__label hidden-xs">Follow Us:</li>
							<li><a href="javascript:void(0);" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="javascript:void(0);" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="javascript:void(0);" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
</section>
<!--=============fifth section close here=============-->