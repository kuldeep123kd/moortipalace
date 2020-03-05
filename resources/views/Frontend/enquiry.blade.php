<?php
    $title="Contact us - Moorti Palace Jaipur | God Statue | Marble Murti";
?>
@include('Frontend.includes.head')

<link rel="canonical" href="https://moortipalace.in/enquiry" />
</head>

<body>
    <style>
        .enquiry {
            border-top: 2px solid rgb(200, 169, 126);
        }
    </style>
    @include('Frontend.includes.header')

    <div style="background: url(/assets/bg.jpg);">
        <div class="strip">
            <h1 class="strip_text">Contact Us</h1>
        </div>
    <div class="">
        <div class="row pdng__enqry">
            <div class="col-sm-6">
                <div class="addr">
                    <h2 style="color: aliceblue;">Address</h2>
                    <p class="addresss" style="color: cornsilk;">2300 , 1st cross, Khanjane Walon ka Rasta,<br> second crossing, Chandpole Bazar,<br> Chandpole, Chandpol, Jaipur,<br> Rajasthan 302001
                        <br>09414241997
                        <br>contact@moortipalace.in</p>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3472770920534!2d75.81060031504516!3d26.924202983122647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db1538821ba31%3A0x5a50f67127fd15b5!2sMishr%20Moorti%20Bhandar!5e0!3m2!1sen!2sin!4v1572703343146!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
                </div>
            </div>

            <div class="col-sm-6">
                <div class="container enq__pad">
                    <p style="text-align: center;color:white;">Feel free to contact us</p>
                    <div class="row contact-rad enq__border">
                        <form class="col-12 col-md-8 enq__pad1" id="contact_form" onsubmit="return contact_send();" method="POST" action="{{ action('PhpmailerController@sendEmail') }}">
                            {!!csrf_field()!!}
                            <div class="contact_add1"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@include('Frontend.includes.footer')
@include('Frontend.includes.end')
