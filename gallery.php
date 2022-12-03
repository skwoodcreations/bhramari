<?php include "include/header.inc.php" ?>



<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  margin-right: 60%;
    margin-bottom: 10%;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>




<!-- page title area -->
<div class="page_titel">
   <div class="container">
      <div class="row">
         <div class="page_heading text-center">
            <h2>Gallery</h2>
            <span></span>
            <h3>Home / Gallery</h3>
         </div>
      </div>
   </div>
</div>
<!--- start area -->
<section id="aboutus_area">
   <div class="container">
      <div class="row">
         <!-- section title -->
         <div class="head_title about text-center" style="margin-bottom: 20px;">
            <h2>Our Gallery</h2>
            <span class="text-center"></span>
            <p>Interior designing is not just to impress your guests but also to ensure that when you’re away from your beautiful home, it makes you want to come back. </p>
         </div>

         <!-- about box one -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 s4 ">
            <div class="about_box_one polaroid">
               <div class="about_single">
                  <div class="img-holder">
                     <img src=" img/inner-gallery/Kitchen/Kitchen11S.jpg" alt="img" />

			<div class="overlay">
                        <a href="Modular-Kitchen-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>

          
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p >Modular Kitchen</p>
               </div>
            </div>
         </div>


         <!-- about box two -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 s4">
            <div class="about_box_one polaroid">
               <div class="about_single ">
                  <div class="img-holder">
                     <img src="img/inner-gallery/Bedroom/Bedroom_01.jpg" alt="img" />
                     <div class="overlay">
                        <a href="Bed-Room-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p>Bed Room</p>
               </div>
            </div>
         </div>


         <!-- about box two -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 s4">
            <div class="about_box_one polaroid">
               <div class="about_single">
                  <div class="img-holder">
                     <img src=" img/inner-gallery/Living room gallery/TV_Unit11S.jpg" alt="img" />
                     <div class="overlay">
                        <a href="Living-Room-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p>Living Room</p>
               </div>
            </div>
         </div>


         <!-- about box two -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 s4">
            <div class="about_box_one polaroid">
               <div class="about_single">
                  <div class="img-holder ">
                     <img src=" img/inner-gallery/Dining_hall/Dining_hall_01.jpg" alt="img" />
                     <div class="overlay">
                        <a href="Dining-Hall-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p>Dining Hall</p>
               </div>
            </div>
         </div>

         <!-- about box three -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thred_about s4">
            <div class="about_box_one polaroid">
               <div class="about_single">
                  <div class="img-holder">
                     <img src=" img/inner-gallery/Kids_and_study_room/Kids-bed-set-1.jpg" alt="img" />
                     <div class="overlay">
                        <a href="Kids-and-Study-Room-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p>Kids & Study Room</p>
               </div>
            </div>
         </div>


	<!-- about box three -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thred_about s4">
            <div class="about_box_one polaroid">
               <div class="about_single">
                  <div class="img-holder">
                     <img src=" img/inner-gallery/False_ceiling/False_ceiling_11S.jpg" alt="img" />
                     <div class="overlay">
                        <a href="False-ceiling-Gallery.php"><i class="fa fa-link"></i></a>
                     </div>
                  </div>
               </div>
               <div style="text-align: center;font-size: 23px;margin-top:-19px;font-family: 'Roboto', sans-serif;">
                  <p>False Ceiling</p>
               </div>
            </div>
         </div>


      </div>
   </div>
</section>
<!-- end area -->
<?php include "include/footer.inc.php" ?>

 <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> 