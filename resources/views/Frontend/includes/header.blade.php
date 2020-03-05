

@include('Frontend.includes.sidebar')
<div class="sidebar__back"></div>
<header style="position: fixed;z-index: 2; width: 100%;">
  <nav id="nav_back_color" class="navbar navbar-expand-lg navbar-light nav-col">
    <div class="mb-dspl">
      <a class="navbar-brand nav-logo" href="{{ asset('/') }}"><img class="logo_img" src="{{ asset('assets/logo.png') }}" alt="moorti palace" style="width: 250px; padding-top: -7px;"></a>
      <hr class="hr">
      <a class="nav_toggler" style="font-size: 30px;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navicon_icn"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <span class="close_icn"><i class="fa fa-times" aria-hidden="true"></i></span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto navbar-collapse1">
        <li class="nav-item active">
          <a class="nav-link home" href="{{ asset('/') }}">Home</a>
        </li>
        <li class="nav-item mobile__view1">
          <a class="nav-link mobile__view "  id="sidebarCollapse" href="javascript:void(0);">Products&nbsp;<i class="fa fa-angle-double-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link desktop__view product products" href="javascript:void(0);" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products&nbsp;<i class="fa fa-angle-double-down"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="row">
                <div class="col-sm-3">
                  <a class="dropdown-item" href="{{ asset('/animals') }}">Animals</a>
                  <a class="dropdown-item" href="{{ asset('/humanstatues') }}">Human Statue</a>
                  <a class="dropdown-item" href="{{ asset('/antique') }}">Antique</a>
                  <a class="dropdown-item" href="{{ asset('/patmoorti') }}">Pat Moorti/Frames</a>
                  <a class="dropdown-item" href="{{ asset('/temples') }}">Marble Temples</a>
                  <a class="dropdown-item" href="{{ asset('/others') }}">Others</a>
                </div>
                <div class="col-sm-3">
                  <a class="dropdown-item" href="{{ asset('/buddha') }}">Buddha</a>
                  <a class="dropdown-item" href="{{ asset('/dattatreya') }}">Dattatreya</a>
                  <a class="dropdown-item" href="{{ asset('/dhashavatar') }}">Dashavatar</a>
                  <a class="dropdown-item" href="{{ asset('/durgamata') }}">Durga Mata</a>
                  <a class="dropdown-item" href="{{ asset('/ganeshji') }}">Ganesh Ji</a>
                  <a class="dropdown-item" href="{{ asset('/hanumanji') }}">Hanuman Ji</a>
                </div>
                <div class="col-sm-3">
                  <a class="dropdown-item" href="{{ asset('/jesus') }}">Jesus</a>
                  <a class="dropdown-item" href="{{ asset('/laxmimata') }}">Laxmi Mata</a>
                  <a class="dropdown-item" href="{{ asset('/navnath') }}">Navnath</a>
                  <a class="dropdown-item" href="{{ asset('/ramdarbar') }}">Ram Darbar</a>
                  <a class="dropdown-item" href="{{ asset('/radhakrishna') }}">Radha Krishna</a>
                  <a class="dropdown-item" href="{{ asset('/saibaba') }}">Sai Baba</a>
                </div>
                <div class="col-sm-3">
                  <a class="dropdown-item" href="{{ asset('/saraswatima') }}">Saraswati Mata</a>
                  <a class="dropdown-item" href="{{ asset('/shivparivar') }}">Shiv Parivar</a>
                  <a class="dropdown-item" href="{{ asset('/shivji') }}">Shiv Ji</a>
                  <a class="dropdown-item" href="{{ asset('/vishnuji') }}">Vishnu Ji</a>
                  <a class="dropdown-item" href="{{ asset('/southindian') }}">South Indian</a>
                  <a class="dropdown-item" href="{{ asset('/others1') }}">Other God Statues</a>
                </div>
            </div> 
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link enquiry" href="{{ asset('/enquiry') }}">Enquiry</a>
        </li>
        <li class="nav-item about_us">
          <a class="nav-link" href="{{ asset('/aboutus') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link about_product" href="{{ asset('/aboutproduct') }}">About Product</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="fab-container" id="fab-container">
		<a href="tel:+91-8560001561" style="box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);-webkit-box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);-moz-box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);border-radius: 100%;" target="_blank" ><img src="{{ asset('assets/telephone.png') }}" height="50px" width="50px"></a>
		<a href="https://wa.me/918560001561" style="box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);-webkit-box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);-moz-box-shadow: inset 0px 0px 85px rgba(0,0,0,.1);border-radius: 100%;" target="_blank" ><img src="{{ asset('assets/Whatsapp-icon.png') }}" height="50px" width="50px"></a>
  </div>
  <div style="position: fixed; bottom: 103px; right: 120px;">
    <a href="#top" class="top" style="font-size: 35px;color: rgb(200, 169, 126);"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
  </div>
  <div class="notify_back">
  </div>
  <div class="container contact_notify">
    <div class="col-sm-12 width_notify" style="border-radius: 10px;background: aliceblue;">
      <div style="padding:10px;">
        <div class="row">
          <h2>Thank you for your Enquiry!</h2>
        </div>
        <div class="row" style="height:100px;">
            <p>Thank you for contacting us. We will get back to you as soon as we can.</p>
        </div>
        <div style="display: flex;justify-content: center;">
          <button type="button" class="btn btn-success enquiry_ok_button">Ok</button>
        </div>
      </div> 
    </div>
  </div>
</header>