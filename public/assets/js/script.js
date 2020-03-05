
        $(document).ready(function () {
            $('#dismiss, .sidebar__back').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.sidebar__back').css("display", 'none');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('.sidebar__back').css("display", 'block');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            if(location.href === "{{url('/enquiry')}}") {
                $(".enqiry").css("border-top",'2px solid rgb(200, 169, 126)');
            }
        });


        


    $(document).ready(function () {
        $(".navbar-toggler-icon").click(function() {
            $(".img__logo").toggle();
            $(".logo_wi").toggle();
            $(".navbar-collapse2").toggle();
        });
    });



    (function($) {          
        $(document).ready(function(){                    
            $(window).scroll(function(){                          
                if ($(this).scrollTop() > 200) {
                    $('menu').fadeIn(500);
                } else {
                    $('menu').fadeOut(500);
                }
            });
        });
    })(jQuery);

    if($(window).width()>768) {
        window.onscroll = function() {scrollFunction()};
    }

    function scrollFunction() {
        if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
            $('a[href=#top]').show();
            document.getElementById("nav_back_color").style.backgroundColor = "rgb(26, 0, 0)";
            $("#nav_back_color").css("padding",'0');
            if($(window).width() <= 990) {
                $(".navbar-brand").css("margin-left",'45%');
            }
            else {
                $(".navbar-brand").css("margin-left",'15%');
            }
                $(".mb-dspl").css("padding-left",'50px');
            $("#nav_back_color").css("flex-direction",'row');
            $(".navbar-expand-lg .navbar-collapse").css("margin-top",'unset');
            $(".navbar-expand-lg .navbar-collapse").css("margin-bottom",'-20px');
            $(".navbar-expand-lg .navbar-nav .dropdown-menu").css("top",'55px');
            $(".navbar-expand-lg .navbar-nav .dropdown-menu").css("right",'30px');
            
            
            $(".logo_img").css("width",'250px');
            $(".hr").css("display", 'none');
            $(".nav-item").css("padding-left", '0');
        } else {
            $('a[href=#top]').hide();
            document.getElementById("nav_back_color").style.backgroundColor = "rgba(26, 0, 0, 0.8)";
            $("#nav_back_color").css("flex-direction",'column');
            $(".navbar-brand").css("margin-left",'unset');
            $(".navbar-expand-lg .navbar-collapse").css("margin-top",'0px');
            $(".navbar-expand-lg .navbar-collapse").css("margin-bottom",'-10px');
            $(".navbar-expand-lg .navbar-nav .dropdown-menu").css("top",'150px');
            $(".navbar-expand-lg .navbar-nav .dropdown-menu").css("right",'auto');
            $(".mb-dspl").css("padding-left",'0px');

            $(".logo_img").css("width",'370px');
            $(".navbar-brand").css("width",'unset');
            $(".navbar-brand").css("flex-direction",'row');
            $(".hr").css("display", 'block');
            if($(window).width()>768) {
                $(".nav-item").css("padding-left", '0px');
            }
            else {
                $(".nav-item").css("padding-left", '0px');
            }
        }
    };

    $(document).ready(function() {
        $(".enquiry_ok_button").click(function() {
            $(".notify_back").hide();
            $(".contact_notify").hide();
            $(".contact_add1").hide();
        });
    });


    function contact_send() {
        $(".notify_back").show();
        $(".contact_notify").show();
        $(".contact_add1").hide();
        $(".notify_back1").hide();
        $(".contact_notify1").hide();
    }


    var item = $('.ask_product');

    $('.hover_product').hover( 
        function (){
            
            item.addClass('is-product-visible');
            
            setTimeout(function () {
            item.addClass('is-product-open');
            }, 20);
            
        },
        function() {
            
            item.removeClass('is-product-open');
            
            item.one('transitionend', function(e) {
            item.removeClass('is-product-visible');
            });
            
        }
    
    );

    var contact = '';
    contact += '<div class="form-group">';
    contact += '<label class="label-pad lbl_color" for="name">Name</label>';
    contact += '<input type="text" class="form-control inp-rad name1" id="name" name="name" oninput="inputValidate()" placeholder="Enter your name">';
    contact += '<div class="usr_msg1" style="height: 10px;color:red;font-size:12px;"></div>';
    contact += '</div>';
    contact += '<div class="form-group">';
    contact += '<label class="label-pad lbl_color" for="mobile">Mobile<span style="color:red;">*</span></label></br>';
    contact += '<input class="form-control inp-rad mobile phone1" id="phone" type="tel" name="phone" oninput="inputValidate1()" placeholder="Enter your mobile without zero" >';
    contact += '<div style="height: 10px;color:red;font-size:12px;">';
    contact += '<span id="valid-msg" class="hide"></span>';
    contact += '<span id="error-msg" class="usr_msg2"></span>';
    contact += '</div>';
    contact += '</div>';
    contact += '<div class="form-group">';
    contact += '<label class="label-pad lbl_color" for="email">Email</label></br>';
    contact += '<input type="email" class="form-control inp-rad email1" id="email" name="email" oninput="inputValidate2()" placeholder="Enter your email" >';
    contact += '<div class="usr_msg3" style="height: 10px;color:red;font-size:12px;"></div>';
    contact += '</div>';
    contact += '<div class="form-group">';
    contact += '<label class="label-pad lbl_color" for="enquiry">Message<span style="color:red;">*</span></label></br>';
    contact += '<textarea class="form-control enq-rad enquiry1" id="enquiry" name="enquiry" oninput="inputValidate3()" rows="6" placeholder="Send message to get - best quotation, adorable marble statues, Product Enquiry" ></textarea>';
    contact += '<div class="usr_msg4" style="height: 10px;color:red;font-size:12px;"></div>';
    contact += '</div>';
    contact += '<div class="smt-btn">';
    contact += '<button id="send" type="submit" class="btn btn-outline-primary">Submit</button>';
    contact += '</div>';
    $(".contact_add1").html(contact);
    

    function contact_show() {
        $(".notify_back1").show();
        $(".contact_notify1").show();
        $(".lightbox").hide();
        $(".lightboxOverlay").hide();
    }

    $(document).ready(function() {
        $(".close_notify").click(function() {
            $(".contact_notify1").hide();
            $(".notify_back1").hide();
        });

        $(".nav_toggler").click(function() {
            $(".navicon_icn").toggle();
            $(".close_icn").toggle();
        });
    });


    if($(window).width()<768) {
        $(document).ready(function() {
            var showChar = 209;
            var ellipsestext = "...";
            var moretext = "more";
            var lesstext = "less";
            $('.more').each(function() {
                var content = $(this).html();
        
                if(content.length > showChar) {
        
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar-1, content.length - showChar);
        
                    var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
        
                    $(this).html(html);
                }
        
            });
        
            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    }


    $(document).ready(function() {
        $('a[href=#top]').click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });
    });

    function inputValidate1() {
        var u_mobile = $('.phone1').val();
        if (/^((\+)?(\d{2}[-]))?(\d{10}){1}?$/.test(u_mobile) == false) {
            $('.usr_msg2').html('Please enter valid mobile number');
            $('#mobile').focus();
            return false;
        }
        else {
            $('.usr_msg2').html('');
        }
    }
    function inputValidate2() {
        var u_email = $('#email').val();
        if (/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+/.test(u_email) == false) {
            $('.usr_msg3').html('Please Enter valid email.');
            $('#email').focus();
            return false;
        }
        else {
            $('.usr_msg3').html('');
        }
    }
    function inputValidate3() {
        var u_enquiry = $('#enquiry').val();
        if (u_enquiry == '') {
            $('.usr_msg4').html('Please enter description');
            $('#enquiry').focus();
            return false;
        }
        else {
            $('.usr_msg4').html('');
        }
    }

    $(document).ready(function () {
        $("#send").on("click",function(){
            var u_mobile = $('#phone').val();
            var u_enquiry = $('#enquiry').val();
            if (/^((\+)?(\d{2}[-]))?(\d{10}){1}?$/.test(u_mobile) == false) {
                $('.usr_msg2').html('Please enter valid mobile number');
                $('#mobile').focus();
                return false;
            }
            else if (u_enquiry === '') {
                $('.usr_msg4').html('Please enter description');
                $('#enquiry').focus();
                return false;
            }
            else{
                document.getElementById("contact_form").submit();
            } 
        });
    });