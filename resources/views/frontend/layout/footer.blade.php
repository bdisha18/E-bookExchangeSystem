<footer>
   <div class="row">
      <div class="col-md-12">
         <div class="jumbotron">
            <div class="row">
               <div class="col-md-12">
                  <div class="newsletter">
                     <div class="col-md-4">
                        <hr>
                     </div>
                     <div class="col-md-4">
                     <h2>NEWSLETTER</h2>
                     <p>Subscribe To our Newsletter.</p>
                     </div>
                     <div class="col-md-4">
                        <hr>
                     </div>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <form method="get" action="{{route('newsletter.store')}}" class="newsletter-form">
                     <input type="email" name="email" class="newsletter-input" placeholder="Enter Email Address" required>
                     <button type="submit" id="newsletter" class="btn btn-primary newsletter-btn">Subscribe</button>
                  </form>
               </div>
            </div>
            <div class="row footer-detail">
               <div class="col-md-4 footer-address">
                  <h4><b>Address</b></h4>
                  <p>dvdfvanfdanvf</p>
                  <p>fvafdffd</p>
               </div>
               <div class="col-md-4"> 
               <div class="footer-icons">
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-twitter"></i>
                  <i class="fa fa-instagram"></i>
                  <i class="fa fa-pinterest"></i>
               </div><br>
               <hr class="footer-hr">
               </div>
               
               <div class="col-md-4 footer-page">
                  <h4><b>Pages</b></h4>
                  <a href="{{route('user.contact')}}"><p>Contact Us</p></a>
                  <p>About</p>
                  <p>Blog</p>
                  <p>Privacy Policy</p>
                  <p>Terms & Conditions</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <p class="copyright">Copyright © 2019 All rights reserved</p>
               </div>
            </div>
         </div>
      </div>
      
   </div>
</footer>