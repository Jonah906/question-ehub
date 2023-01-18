@extends('frontend.layouts.app')

{{-- Internal Css Section --}}
@section('style')

<style>
  .lasu-image{
    width: 50px;
  }
  .lasu{
    color: #5672f9;
  }
  .category-list{
    text-align: center
  }
  .footer-lasu{
    color: white;
    position: relative;
  }

  .blur-image{
    filter: blur(2px);
    -webkit-filter: blur(2px);
}

</style>
@endsection

@section('content')
  

  {{-- Header Section --}}
  @include('frontend.partials.header')
  {{-- end header section --}}


  {{--  slider section --}}
  @include("frontend.partials.slider")
  {{-- end slider section --}}
      
  @include("frontend.partials.flash-message")

  {{-- trending questions section --}}
  @include("frontend.partials.trending")
  {{-- end trending questions section --}}


  {{-- Featured Department Section --}}
  @include("frontend.partials.featured")
  {{-- end featured department section --}}

    
  {{-- footer section --}}
  @include('frontend.partials.footer')
  {{-- end footer section --}}
  
@endsection
@section("scripts")
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Jquery -->
 <!-- bootstrap -->
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,   
    smartSpeed: 3000, 
    autoplayTimeout:7000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
  })

  document.addEventListener("contextmenu", function (e){
    e.preventDefault();
  },
  false);
});
</script>
@endsection