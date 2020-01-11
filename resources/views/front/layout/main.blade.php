<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>D2M Hotel and Restaurant | Hotel In Rohtak | Best Hotel In Rohtak Haryana</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="IemR0b7dbOhYjEkME5xvVJPwbzD9YyXxLStx9u5nhDE" />

        <link rel="icon" href="{{ asset('img/favicon.png') }}" sizes="16x16">
    
        <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
                <script type="text/javascript" src="{{ asset('http://code.jquery.com/jquery-3.2.1.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/fresco.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/fresco.css') }}" />

        <!-- fontawesome -->
    	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />

        <!-- bootstrap -->
    	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

        <!-- uikit -->
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />

        <!-- animate -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" />
        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- rev slider -->
        <link rel="stylesheet" href="{{ asset('css/rev-slider/settings.css') }}" />
        <!-- lightslider -->
        <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">
        <!-- Theme -->
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        
        <!-- custom css -->
	    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
	        <!-- responsive -->
	    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	    @stack('styles')
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
        @media(min-width: 992px){
            .navbar-default
            {
            background: transparent;
            box-shadow: none;
            }
        }
         
        @media(min-width: 992px){
        .opacity{
        background: transparent;
        box-shadow: none;
      }


       
      .opacity .border-right-whitesmoke{
        outline-right: 0px;
        border-right: 0px;
      }
    .site_logo{
         background-color:  rgba(255, 255, 255, 0.9);
         padding-left: 20px;
         padding-bottom:  15px;

         
         margin-top: -10px;

        }
 
 } 

 }
 .hotel_facilities_area{
    background: url({{asset ('img/hotel-facilities-bg.jpg') }}) no-repeat fixed 0 0;
    background-size: cover;
    background-position: fixed;
}
</style>

    </head>


    <body id="@yield('body_id','home_one')">
    	@include('front.include.header')
        @yield('body')
        @include('front.include.footer')
        <!-- jquery library -->
        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- rev slider -->
        <script src="{{ asset('js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js') }}"></script>
        <script src="{{ asset('js/rev-slider/rs-plugin/jquery.themepunch.revolution.js') }}"></script>
        <script src="{{ asset('js/rev-slider/rs.home.js') }}"></script>
        <!-- uikit -->
        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <!-- easing -->
		<script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>
        <script src="{{ asset('js/datepicker.js') }}"></script>
        <!-- scroll up -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- owlcarousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- lightslider -->
        <script src="{{ asset('js/lightslider.js') }}"></script>
        
        <!-- wow Animation -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        
        
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/593fc381b3d02e11ecc69aa1/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->         

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="{{ asset('js/ie-opacity-polyfill.js')}}"></script>
        <![endif]-->
        <!-- my js -->
        <script src="js/main.js"></script>
         <script>
                //fade in navscroll
                if($(window).width() > 992){
                $(document).mousemove(function(e){
                     var mPos = e.pageY - window.pageYOffset;
                     if (mPos < 350) {
                         $('.main_header_area').removeClass('opacity','slow');
                         $('#navHidden').removeClass('hidden','slow');
                         $('.emergency_number').removeClass('hidden','slow');
                     }
                     else{
                        if(!$('.main_header_area').hasClass('opacity')){
                            $('.main_header_area').addClass('opacity');
                            $('#navHidden').addClass('hidden');
                            $('.emergency_number').addClass('hidden');
                        }
                     }
                }); 
                          
                
                $(window).scroll(function() {
                if ($(this).scrollTop() > 100){  
                    $('.main_header_area').removeClass('opacity');
                    $('#navHidden').removeClass('hidden');
                    $('.emergency_number').removeClass('hidden');
                }
                else{
                     if(!$('.main_header_area').hasClass('opacity')){
                            $('.main_header_area').addClass('opacity');
                            $('#navHidden').addClass('hidden');
                            $('.emergency_number').addClass('hidden');
                        }
                }
            });
            }
            else{
                $('#navHidden').removeClass('hidden');
                    $('.emergency_number').removeClass('hidden');
            }

 
        </script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102414588-1', 'auto');
  ga('send', 'pageview');

</script>
        @stack('scripts')
    </body>
</html>