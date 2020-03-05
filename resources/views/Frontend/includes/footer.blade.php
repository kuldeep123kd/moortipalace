<footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-bottom: unset;">
  <div class="container">
    <div class="row mb-5">
      <div class="col-sm-6 col-xs-12">
        <div class="ftco-footer-widget mb-4" style="display: flex; flex-direction: column;">
          <h2 class="ftco-heading-2">Moorti Palace</h2>
          <p>All across the globe we have shown enthusiastic work for our clients, we have worked also for Birla Mandir (Calcutta,India) all the Pat Moorties (24*7 ft Mahabharat Geeta Updesh, Rashella , Dropatichirharan 8*4 ft) are made by our company in 1996 and many more.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="https://twitter.com/MoortiPalace" target="_blank"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://facebook.com/statue.manufacturer" target="_blank"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://instagram.com/moorti_palace" target="_blank"><img style="position: absolute;top: 20%;left: 20%;" src="{{ asset('assets/insta-logo.png') }}" alt="moorti palace" height="25px" width="25px"></a></li>
            <li class="ftco-animate"><a href="https://pinterest.com/moortipalace" target="_blank"><img style="position: absolute;top: 20%;left: -4%;" src="{{ asset('assets/pinterest.png') }}" alt="mishr moorti bhandar" height="25px" width="45px"></a></li>
          </ul> 
          <p style="margin-bottom: 0;"><strong>+91-8560001561</strong></p>
          <p style="margin-bottom: 0;"><strong>+91-9414241997</strong></p>
          <p style="margin-bottom: 0;"><strong>contact@moortipalace.in</strong></p>  
          <a style="margin-bottom: 0;" href="http://www.moortipalace.in"><strong>www.moortipalace.in</strong></a>
          <a style="margin-bottom: 0;" href="http://www.mishrmoortibhandar.com" target="_blank"><strong>www.mishrmoortibhandar.com</strong></a>
          <p>
            <br>
            Terms & conditions : <br>
            All item are subject to Jaipur jurisdiction only.
            <br>Item once sold not be taken back.
          </p>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2" style="text-align: center;">Contact Us</h2>
          <div class="row contact-rad enq__border" style="margin-bottom: 0; box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);-webkit-box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);-moz-box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);">
          <form class="col-sm-12" id="contact_form" onsubmit="return contact_send();" method="POST" action="{{ action('PhpmailerController@sendEmail') }}">
          {!!csrf_field()!!}
          <div class="form-group">
          <label class="label-pad" style="padding-top: 10px;" for="name">Name</label>
          <input type="text" class="form-control inp-rad name1" id="name" name="name" oninput="inputvalidate()" placeholder="Enter your name">
          <div class="usr_msg1" style="height: 10px;color:red;font-size:12px;">
          </div>
          </div>
          <div class="form-group">
          <label class="label-pad" for="mobile">Mobile<span style="color:red;">*</span></label></br>
          <input class="form-control inp-rad mobile phone1" id="phone" type="tel" name="phone" placeholder="Enter your mobile" >
          <div style="height: 10px;color:red;font-size:12px;">
          <span id="valid-msg" class="hide"></span>
          <span id="error-msg" class="usr_msg2"></span>
          </div>
          </div>
          <div class="form-group">
          <label class="label-pad" for="email">Email</label></br>
          <input type="email" class="form-control inp-rad email1" id="email" name="email" oninput="inputvalidate2()" placeholder="Enter your email" >
          <div class="usr_msg3" style="height: 10px;color:red;font-size:12px;">
          </div>
          </div>
          <div class="form-group">
          <label class="label-pad lbl_color" for="enquiry">Message<span style="color:red;">*</span></label></br>
          <textarea class="form-control enq-rad" id="enquiry" name="enquiry" oninput="inputvalidate3()" rows="6" placeholder="Send message to get - best quotation, adorable marble statues, Product Enquiry" ></textarea>
          <div class="usr_msg4" style="height: 10px;color:red;font-size:12px;">
          </div>
          </div>
          <div class="smt-btn">
          <button id="send" name="submit" type="submit" class="btn btn-outline-primary">Submit</button>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Moorti Palace | All rights reserved</a></p>
      </div>
    </div>
  </div>
</footer>





