<?php
    $title="Statue | Marble Murti | Ganpati statue | Moorti Palace | Idols";
?>
@include('Frontend.includes.head')

<link rel="canonical" href="https://moortipalace.in" />
<!-- <link rel="alternate" media="only screen and (max-width: 640px)"  href="http://m.moortipalace.in"> -->
</head>

<body>
    <style>
        .home {
            border-top: 2px solid rgb(200, 169, 126);
        }
    </style>
    @include('Frontend.includes.header')
    <div style="background: url(/assets/bg.jpg);">
        <div class="strip">
            <h1 class="strip_text">Manufacturer & Exporter of Marble Statues</h1>
        </div>
        <div class="mrgn__lft_rgt">
            <div class="row col-reverse">
                <div class="col-sm-6">
                    <div class="col-sm-12 mob-padd" style="display: flex;">
                        <img src="{{ asset('assets/icon.png') }}" style="height: 200px; width:150px ;" alt="Sculpture Artist">
                        <p class="sculpture">
                            <span style="display: block;">Sculpture </span>
                            <span class="sculpture_text">Artist</span>
                        </p>
                    </div>
                    <div class="jumbotron jmbtrn home-jmbtrn">
                        <h2 class="display-4">Welcome</h2>
                        <h3 class="lead">We have successfully emerged as a leading manufacturer ,exporter and supplier of the Marble Murties, Statues ,since 1986. Making all kind of Artistic, Marble Murti , Statue, Bust, etc.</h3>
                        <strong style="font-size: 18px;line-height: 0;color: burlywood;">Price depends on height of statue, marble quality and design.
                            <br><u> For Order and Price please contact us.</u>
                    </strong>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="/aboutus" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 reverse-top-pad">
                    @include('Frontend.includes/carousel')
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row abt__center">
                <div class="col-md-5 wrap-about abt__center_content pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section heading__section mb-4 my-5 my-md-0">
                        <span class="subheading">About</span>
                        <h2 class="mb-4">Moorti Palace</h2>
                    </div>
                    <p>We make all types of marble murti of <strong>all religion god/goddess, human statues</strong> in half/full size(in any size which you wants), different <strong>animal arts</strong>, we also makes specific unique <strong>art/model/design/statue</strong> on the basis of your description.

                            We have worked also for <strong>Birla Mandir(Calcutta,India) all the Pat Moorties (24*7 ft Mahabharat Geeta Updesh, Rashella , Dropatichirharan 8*4 ft)</strong> are made by our company in <strong>1996</strong> and many more.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="notify_back1"></div>
            <div class="contact_notify1">
                <span class="close_notify">X</span>
                <div class="ftco-footer-widget">
                    <div class="row contact-rad enq__border" style="margin-bottom: 0; box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);-webkit-box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);-moz-box-shadow: 0px 0px 85px rgba(212,175,55, 0.5);">
                        <form class="col-12 col-md-8 enq__pad1" id="contact_form" onsubmit="return contact_send();" method="POST" action="{{ action('PhpmailerController@sendEmail') }}">
                            {!!csrf_field()!!}
                            <div class="contact_add1"></div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="container">
                <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Products</h2>
                </div>
                </div>
            <div class="row ftco-animate">
                <div class="col-sm-3 arrange bdr__img0">
                    <div class="brdr__img1">
                        <a href="{{ asset('assets/images/G104.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: G104</p> <p style="margin-left: 10px;"><a href="/ganeshji">Marble Ganesha Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                            <img src="{{ asset('assets/images/G104.jpg') }}" alt="marble ganesha statue" class="img-thumbnail">  
                        </a>
                    </div>
                    <div class="brdr__img1">
                            <a href="{{ asset('assets/images/SB103.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: SB103</p> <p style="margin-left: 10px;"><a href="/saibaba">Sai Baba Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                <img src="{{ asset('assets/images/SB103.jpg') }}" alt="shridi sai baba" class="img-thumbnail">  
                            </a>
                    </div>
                </div>
                
                <div class="col-sm-6 arrange">
                    <div class="row brdr__img1" style="padding: 0 !important;">
                        <a href="{{ asset('assets/images/RD102.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: RD102</p> <p style="margin-left: 10px;"><a href="/ramdarbar">Ram Darbar Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                            <img src="{{ asset('assets/images/RD102.jpg') }}" alt="radha darbar statue" class="img-thumbnail">  
                        </a>
                    </div>
                    <div class="" style="display: flex;padding: 0 !important;">
                        <div class="row left-mob-img" style="padding: 0 !important;">
                            <div class="col-sm-12 brdr__img1">
                                <a href="{{ asset('assets/images/H101.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: H101</p> <p style="margin-left: 10px;"><a href="/hanumanji">Marble Hanumanji Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/H101.jpg') }}" alt="hanuman ji moorti" class="img-thumbnail">  
                                </a>
                            </div>
                            <div class="col-sm-12 brdr__img1">
                                <a href="{{ asset('assets/images/SP103.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: SP102</p> <p style="margin-left: 10px;"><a href="/shivparivar">Shiv Parivar Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/SP103.jpg') }}" alt="Gorishankar" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="row right-mob-img" style="padding-right: 0;">
                            <div class="col-sm-12 brdr__img1">
                                    <a href="{{ asset('assets/images/SM101.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: SM101</p> <p style="margin-left: 10px;"><a href="/saraswatima">Saraswati Mata Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                        <img src="{{ asset('assets/images/SM101.jpg') }}" alt="saraswati mata statue" class="img-thumbnail">  
                                    </a>
                            </div>
                            <div class="col-sm-12 brdr__img1">
                                    <a href="{{ asset('assets/images/RK104.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: RK104</p> <p style="margin-left: 10px;"><a href="/radhakrishna">Radha Krishna Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                        <img src="{{ asset('assets/images/RK104.jpg') }}" alt="radha krishna statue" class="img-thumbnail">  
                                    </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 arrange" style="margin-left: 0;padding-left: 0;">
                        <div class="col-sm-12 brdr__img1">
                            <a href="{{ asset('assets/images/HS101.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: HS101</p> <p style="margin-left: 10px;"><a href="/humanstatues">Marble Human Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                <img src="{{ asset('assets/images/HS101.jpg') }}" alt="human statue | bust" class="img-thumbnail">  
                            </a>
                        </div>
                        <div class="col-sm-12 brdr__img1">
                                <a href="{{ asset('assets/images/OH101.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH101</p> <p style="margin-left: 10px;"><a href="/others">Swami Narayan Statue</a></p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/OH101.jpg') }}" alt="Swami narayan statue" class="img-thumbnail">  
                                </a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
            </div>
            <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap text-center pb-5">
                    <div class="text p-3">
                        <p class="mb-4">The most trusted and efficient experties in ancient & modern stone sclupture in india, prompt delivery at ideal cost. I remain ever to Moorti Palace</p>
                        <p class="name">Sanatan Beura</p>
                        <span class="position">Customer</span>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center pb-5">
                    <div class="text p-3">
                        <p class="mb-4">Good response for all the enquiry.Nice product which I have received. Response is super and no delay in getting clarifications.V Dayanandhan/ Tamil Nadu.</p>
                        <p class="name">Jay Engineering Industries</p>
                        <span class="position">Customer</span>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center pb-5">
                    <div class="text p-3">
                        <p class="mb-4">A trust worthy, good work moorti seller. I have bought krishna and radha moorti. I was very happy about their packing and their response to all our needs.</p>
                        <p class="name">Krishna Kumar</p>
                        <span class="position">Customer</span>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center pb-5">
                    <div class="text p-3">
                        <p class="mb-4">We immensely happy with the end product and the customer service  since day one .With this professionalism in handling the customer to their fullest satisfaction.</p>
                        <p class="name">Ramachandran Srinivassan</p>
                        <span class="position">Customer</span>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap text-center pb-5">
                    <div class="text p-3">
                        <p class="mb-4">Nice work.. i bought radha ji moorti. It is so beautiful.  Thank you.</p>
                        <p class="name">Kedar Khare</p>
                        <span class="position">Customer</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

@include('Frontend.includes.footer')
@include('Frontend.includes.end')