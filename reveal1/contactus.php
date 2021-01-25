 <!-- header.php -->
 <?php include 'header.php'; ?>


 <!-- 1.First section -->
 <div class="cont_sectone">
     <div class="cont_sectone_divone">
         <img src="img/contactusbannerimage.jpg">
         <div class="cont_sectone_divtwo">
             <h2 class="contactus">CONTACT US</h2>
         </div>
     </div>
 </div>
 <!-- 1 st sect ends here -->



 <!-- Breadcrumbs starts here -->
 <section class="content_section2">
     <div class="row" style="margin-top: 10px;">
         <div class="col-md-12 col-xs-12">
             <div class="">
                 <a href="index.php">Home &gt;</a>
                 <a href="contactus.php">Contact Us</a>
                 <!-- <a href="idebenone.html">Idebenone &gt;</a>
            <span style="">Idebenone Ampoule</span> -->
             </div>
         </div>
     </div>
 </section>
 <!-- Breadcrumbs ends here -->



 <!-- Breadcrumb starts-->
 <!-- <p>Home>Contact Us</p> -->
 <!-- Breadcrumb ends-->





 <!-- 2nd  section starts -->
 <section class="cont_secttwo row">
     <!-- Left Section -->
     <div class="cont_secttwo_divone col-md-4 col-sm-6">
         <h4><span>CONTACT</span> US </h4>
         <form id="contactform" class="form1" action="#" name="contactform" method="post" style="margin-top:20px;">
             <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                 <input type="text" name="name" id="name" class="form-control" placeholder="Name">
             </div>
             <br>

             <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                 <input type="email" name="email" id="email" class="form-control" placeholder="Email">
             </div>
             <br>

             <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                 <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone">
             </div>
             <br>

             <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                 <input type="text" name="country" id="country" class="form-control" placeholder="Country">
             </div>
             <br>
         </form>
     </div>
     <hr class="vl">

     
     <!-- Mid section -->
     <div class="cont_secttwo_divtwo col-md-8 col-sm-6">
        
         <form id="contactform" class="row mt-4" action="#" name="contactform" method="post" style="margin-top:20px;">
             <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 subject"> -->
             <input type="text" name="country" id="country" class="form-control" style="width: 80%; margin-top:50px" placeholder="Subject">
             <!-- </div> -->
             <textarea class="form-control" name="comments" id="comments" rows="10" placeholder="Message Below" style="width: 80%;margin-top:13px"></textarea>
             <button type="submit" value="SEND" id="submit" class="btn btn-primary" style="width: 80%;margin-top:7px">SEND</button>
         </form>
     </div>
     <!-- Mid section -->

     <!-- Right SEction -->
     <!-- <div class="cont_secttwo_divthree col-md-4 col-sm-6">
         <p style="font-weight: bold;">Reveal Lasers Ltd</p>
         <p>14A Raoul Wallenburg,</p>
         <p>4th Floor</p>
         <p>Tel Aviv,ISRAEL</p>
         <p id="#reveal_id" style="margin-top: 70px;">info@reveallasers.com</p>
     </div> -->

 </section>
 <!-- 3rd section Ends -->

 <!-- footer.php -->
 <?php include 'footer.php'; ?>