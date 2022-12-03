<!---footer start area -->
	<section id="footer_area">
		<div class="container">
			<div class="row">
				<div class="footer_content">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer_spacing">
						<div class="single_footer">
							<img src="img/logo1.png" alt="logo.jpg" class="mt-45" style="background: white; padding: 10px; border-radius: 8px; width:225px">
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer_spacing">
						<div class="column_title">
							<h2>Quick Links</h2>
							<span></span>
						</div>
                              <ul class="footer-nav">
                                   <li>
                                        <span class="border"></span> <a href="index.php"> Home</a>
                                   </li>
                                   <li>
                                        <span class="border"></span> <a href="about.php"> About</a>
                                   </li>
                                   <li>
                                        <span class="border"></span> <a href="Island-Kitchen.php"> Products</a>
                                   </li>
                                   <li>
                                        <span class="border"></span> <a href="project.php"> Projects</a>
                                   </li>
                                   <li>
                                        <span class="border"></span> <a href="gallery.php"> Gallery</a>
                                   </li>
                                   <li>
                                        <span class="border"></span> <a href="contact-us.php"> Contact</a>
                                   </li>
                              </ul>
					</div>
                         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer_spacing">
                              <div class="column-three">
                                   <h2>Qr Code</h2>
                                   <span></span>
                                   <img src="img/qrcode.png" alt="qrcode.png" class="mt-45">
                              </div>
                         </div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer_spacing">
						<div class="column-three" >
							<h2>Address</h2> 
							<span></span>
                                   <div class="mt-45">
                                        <a href="#">SRI BHRAMARI CREATIONS</a> <br>
                                        <a href="#" class="i fa fa-map-marker"></a># 149, 1st Floor, Maruthi Nagara,Kodigehalli Main Road,
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sahakara Nagara, Bengaluru-560 092<br />
                                        <a href="#" class="i fa fa-phone"></a> 080 23630021, 9845067198, 7618719898 <br />
                                        <a href="#" class="i fa fa-envelope-o"></a> info@bhramari.in <br />
                                   </div>
						</div>
					</div>
				</div> 
			</div>
		</div>
		<hr class="horizenal" /> 
		<div class="container">
			<div class="row">
				<div class="copy_right_area">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="copy_left">
							<p style="color:white;">&copy; copyright 2020 <span style="color:#f8aa27;"> BHRAMARI Modular Kitchens & Interiors</span></p>
						</div>
					</div>
					

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer end area -->
   <!-- jquery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
	<script src="js/jquery.min.js"></script>  
	<script src="custom_js/contact.js"></script>  
	<script src="custom_js/service.js"></script>  
	<script src="custom_js/modal_enquiry.js"></script>
 	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script> 
	<!-- MixIt UP JS -->
	<script src="js/jquery.mixitup.min.js"></script> 
	<script src="js/masonry.pkgd.min.js"></script> 
	<!-- jQuery sticky -->
     <script src="js/jquery.sticky.js"></script> 
	<!-- Count To JS -->
	<script src="js/jquery.countTo.js"></script> 
	<!-- iSotope JS -->
	<script src="js/isotope.pkgd.min.js"></script> 
	 <!-- Revolution Slider Tools --> 
	<script src="js/revolution.min.js"></script> 
	 <!-- Gmap Helper -->
	<script src="http://maps.google.com/maps/api/js"></script>
	<script src="js/gmap.js"></script> 
	<!-- owlcarousel -->
	<script src="js/jquery.bxslider.js"></script>  
	<script src="js/owl.carousel.js"></script>  
	<!-- FancyBox -->
	<script src="js/jquery.fancybox.pack.js"></script> 
	<!-- SmartMenus jQuery plugin -->
     <script src="js/jquery.smartmenus.js"></script> 
     <script src="js/jquery.smartmenus.bootstrap.js"></script> 
	<!-- my js -->
     <script src="js/main.js"></script>      
     <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>

     <script src="js/lightgallery-all.min.js"></script>      
     <script>
          $(document).ready(function($) {
     $(".process-step").click(function() {
    var theClass = $(this).attr("class").match(/(^|\s)step-\S+/g);
    var bute = $.trim(theClass);
    switch (bute) { 
         case "step-1": 
       $(".process-wrap").addClass("active-step1")
        break;
      case 'step-2': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step2")
        break;
      case 'step-3': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step3")
        break;
      case 'step-4': 
         $(".process-wrap").attr('class', 'process-wrap');
        $(this).parents(".process-wrap").addClass("active-step4 ")
        break;      
      default:
        $(".process-wrap").attr('class', 'process-wrap');
    }
  })
  
  $(".process-dots").click(function() {
    if ($(this).hasClass("ship-process-dot-1"))  {
       $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1")
      
      }
    if ($(this).hasClass("ship-process-dot-2"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini2")
        
      }
    if ($(this).hasClass("ship-process-dot-3"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini3")

      }
    if ($(this).hasClass("ship-process-dot-4"))  {
      $(".process-wrap").attr('class', 'process-wrap active-step1')
        $(this).parents().find(".process-wrap").addClass("active-step1-mini4")
      }
   });
  
});

     </script>
             <script type="text/javascript">
           $(document).ready(function() {
            $('#lightgallery').lightGallery({
               pager: true
            });
            });
			
			


document.addEventListener('contextmenu', event => event.preventDefault());
			
            </script>
        <script src="custom_js/modal.js"></script>
</body>

<!-- Mirrored from world5.commonsupport.com/html/duplex/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2020 05:16:00 GMT -->
</html> 


<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header" style="background-color: #eab250">
         <h4 class="modal-title" style="color:white;">Enquire Now</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <form class="product_form" id="product_form" action="#" method="post">
            <div class="row">
               <div class="col-md-6">
                  <!-- Field 1 -->
                  <div class="input-text form-group">
                     <input type="text" name="modal_contact_name" id="modal_contact_name" class="input-name form-control" placeholder="Full Name*" />
                  </div>
               </div>
               <div class="col-md-6">
                  <!-- Field 2 -->
                  <div class="input-email form-group">
                     <input type="email" name="modal_contact_email" id="modal_contact_email" class="input-email form-control" placeholder="Email*" />
                  </div>
               </div>
            </div>
            <!-- Field 3 -->
            <div class="row">
               <div class="col-md-6">
                  <!-- Field 1 -->
                  <div class="input-text form-group">
                     <input type="text" name="modal_contact_phone" id="modal_contact_phone" class="input-name form-control" placeholder="Phone*" />
                  </div>
               </div>
               <div class="col-md-6">
                  <!-- Field 2 -->
                  <div class="input-text form-group">
                     <input type="text" name="modal_product" id="modal_product" class="input-email form-control" placeholder="Product" readonly="" />
                  </div>
               </div>
            </div>
            <!-- Field 4 -->
            <div class="row">
               <div class="col-md-12">
                  <div class="textarea-message form-group">
                     <textarea name="modal_contact_message" id="modal_contact_message" class="textarea-message form-control" placeholder="Detailed Requirement" rows="6"></textarea>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #eab250;border:1px solid #eab250;color:white;">Cancel</button>
               <button class="btn btn-default" type="submit" style="float: right;background-color: #eab250;border:1px solid #eab250;color:white;">Send Now
               <i class="icon-paper-plane"></i></button>
            </div>
      </div>
      </form>
   </div>
</div>
</div>

<div id="basicModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="margin-top:150px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fill This Form to Access The Content</h4>
      </div>
      <div class="modal-body">
        <form class="gatway_modal_form" method="post">
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" pattern="[a-zA-Z][a-zA-Z\s]*"  maxlength="18" name="gatway_name" id="gatway_name" class="form-control">
                        </div>
                    </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact Number*</label>
                            <input type="text" name="gatway_number"  minlength="10"  pattern="[6789][0-9]{9}" maxlength="10" id="gatway_number" class="form-control">

                            <input type="hidden" name="gatway_url" id="gatway_url">
                        </div>
                    </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Email Id*</label>
                            <input type="text" maxlength="50"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="gatway_email" id="gatway_email" class="form-control">
                        </div>
                    </div>

            </div>
        
      </div>
      <div class="modal-footer">
       
                 <button type="Submit" class="btn" style="width:180px;height:50px;background:#2c1a70;color: white">&nbsp;Get Access Now !!</button>
            
                 <button type="button" class="button" data-dismiss="modal" style="width:80px;height:50px;background:#95b901;color: white">&nbsp;Close</button>
           
     
      </div>

      </form>
    </div>

  </div>
</div>
