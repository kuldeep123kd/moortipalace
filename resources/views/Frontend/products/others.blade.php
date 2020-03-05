<?php
    $title="Statue | Marble Murti | Ganpati statue | Moorti Palace";
?>
@include('Frontend.includes.head')

<link rel="canonical" href="https://moortipalace.in/others" />

</head>

<body>
    <style>
        .enq__border {
            background: rgba(0,0,0,0.5);
        }
        .products {
            border-top: 2px solid rgb(200, 169, 126);
        }
    </style>
    @include('Frontend.includes.header')
    <div style="background: url(/assets/bg.jpg);">
        <div class="strip">
            <h1 class="strip_text">Marble Animals Sculpture </h1>
        </div>
        <div class="mrgn__lft_rgt" style="display: block;">
            <div class="row col-reverse">
                <div class="col-sm-12">
                    <div class="jumbotron jmbtrn" id="prdct_jmbo">
                        <p class="lead comment more">We are one of the leading manufacturer and exporter of <strong> Animal Marble Sculptures</strong>.
                            <strong> Marble Animals Sculpture </strong> is carved from <strong>pure marble</strong> and can be available as per the client’s requirements , as we deal
                            with different types of design and size in white as well as black marble.
                            <br>Here you will find a top quality of
                              <br> • <strong>Pair of Elephant murti</strong> • <strong>Cow</strong> • <strong> Lion</strong> • <strong>Horses</strong> • <strong>Black Horses</strong> •<strong>Cow & Calf</strong>  • <strong></strong> •<strong>White Lion </strong> •<strong>etc</strong>
                            Our Designer Animals Sculpture are precisely designed by our expert craftsmen who understand the needs and specification of customers.
                        </p>
                        <strong style="font-size: 18px;line-height: 0;color: burlywood;">Price depends on height of statue, marble quality and design.
                            <br> <u>For Order and Price please contact us.</u>
                    </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <div class="row">
                <div class="col-sm-3 pd-tp-product">
                    <div class="ftco-animate">
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH101.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH101</p> <p style="margin-left: 10px;">Marble Lion Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH101.jpg') }}" alt="Vietnam loin Sculpture" class="img-thumbnail hover_product">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1 hover_product2">
                                <a href="{{ asset('assets/images/others/OH102.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH102</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' data-title="My caption1" class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH102.jpg') }}" alt="Pure White Ganpati Sculpture" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH103.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH103.jpg') }}" alt="makrana moorti" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH104.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH104.jpg') }}" alt="Ganpati Idol" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH105.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH105.jpg') }}" alt="Lord Ganesha Idol" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pd-tp-product">
                    <div class="ftco-animate">
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH106.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH104</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH106.jpg') }}" alt="premium quality statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH107.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH105</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH107.jpg') }}" alt="Lord Ganesha Idol" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH108.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH106</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH108.jpg') }}" alt="Dancing ganesha statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH109.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH109.jpg') }}" alt="makrana moorti" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH110.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH110.jpg') }}" alt="Big Ganeshji Sculpture" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pd-tp-product">
                    <div class="ftco-animate">
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH111.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH107</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH112.jpg') }}" alt="Dagdu seth statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH112.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH108</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH112.jpg') }}" alt="White Ganeshji statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH113.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH109</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH113.jpg') }}" alt="ganpati statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH114.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH114.jpg') }}" alt="Indian Hindu Ganeshji" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH115.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH115.jpg') }}" alt="Religious Sculpture" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pd-tp-product">
                    <div class="ftco-animate">
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH116.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: G110</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH116.jpg') }}" alt="Colored Ganeshji statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH117.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: G111</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>'class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH117.jpg') }}" alt="shidhivinayak statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH118.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: G112</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH118.jpg') }}" alt="ganpati statue" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH119.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH119.jpg') }}" alt="makrana moorti" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 arrange bdr_products_img">
                            <div class="brdr__img1">
                                <a href="{{ asset('assets/images/others/OH120.jpg') }}" data-lightbox="image-1" data-title='<div style="display:flex;justify-content:center;font-size: 1em;"><p>Code: OH103</p> <p style="margin-left: 10px;">Marble Ganesha Sculpture</p></div> <div style="display:flex;justify-content:center;"><button type="button" onclick="contact_show();" class="btn btn-outline-success ask-for-price">Ask for Price</button></div>' class="with-caption image-link" title="">
                                    <img src="{{ asset('assets/images/others/OH120.jpg') }}" alt="Black Marble Ganeshji Moorti" class="img-thumbnail">  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('Frontend.includes.footer')
@include('Frontend.includes.end')