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
.carousel-control-prev-icon, .carousel-control-next-icon {
    height: 50px;
    width: 50px;
    outline: black;
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
    border: 1px solid black;
}
.folder{
    color: #5672f9;
    text-align: center;
}
.advance-search{
    text-align: center;
    color: white;
    font-size: large;
}
.blur-image{
    filter: blur(5px);
    -webkit-filter: blur(5px);
}

</style>
@endsection

@section('content')
  

    {{-- Header Section --}}
    @include('frontend.partials.header')
    {{-- end header section --}}

    <section class="page-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search">
                      <strong>{{strtoupper($question->name)}}: {{strtoupper($question->description)}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <!-- Left sidebar -->
                <div class="col-md-8">
                    <div class="product-details">
                        <h1 class="product-title">{{$question->department->name}} </h1>
                        <div class="product-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="{{ url('department/'.$question->department->slug.'/'.$question->slug)}}">{{$question->name}}</a></li>
                                <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Department of<a href="{{ url('department/'.$question->department->slug)}}">{{$question->department->name}}</a></li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow"></i> <a href="">Lagos state University</a></li>
                            </ul>
                        </div>
                        <div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
                            {{-- <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol> --}}
                            <div class="carousel-inner" id="question-image">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 blur-image" oncontextmenu="return false;" src="{{ asset('assets/uploads/question/'.$question->image) }}" alt="First slide">
                                </div>
                                {{-- <div class="carousel-item">
                                    <img class="d-block w-100" src="images/products/products-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/products/products-3.jpg" alt="Third slide">
                                </div> --}}
                            </div>
                            <br>
                            <br>
                            {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a> --}}
                        </div>
                        {{-- <div class="content">
                            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active download" id="pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="pills-home" aria-selected="true">Download Question</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget price text-center">
                            <h4>Price</h4>
                            <p>&#8358;{{$question->selling_price}}</p>
                        </div>
                        <!-- User Profile widget -->
                        <div class="widget user">
                            {{-- <img class="rounded-circle" src="images/user/user-thumb.jpg" alt=""> --}}
                            <h4><a href="">{{$question->department->name}}</a></h4>
                            <p class="member-time">{{$question->description}}</p>
                            <a href="">{{$question->level}} Level Question</a>
                            <ul class="list-inline mt-20">
                                {{-- <li class="list-inline-item"><a href="" class="btn btn-contact">Contact</a></li> --}}
                                {{-- <li class="list-inline-item"><a href="" class="btn btn-offer">Make an offer</a></li> --}}
                            </ul>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Container End -->
    </section>
       


     


    {{-- footer section --}}
    @include('frontend.partials.footer')
    {{-- end footer section --}}
  
@endsection
@section("scripts")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AcnOgSoocRHSSH7Ai7hNO72_C4mfdQgxOn8uyt7CF_Xgc4UMhPaleiPEgXixKHri6-Co0G6EzZxCQm6W"></script>
<script>
    $(".download").remove();

    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{$question->selling_price}}' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          alert(`Transaction ${transaction.status}: ${transaction.id}\n\nPayment successful`);
          $("#question-image").after("<a class='btn btn-primary btn-block btn-lg border border-bottom-5' href='{{url('download/'.$question->image)}}'><strong>Download Question</strong></a>");
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
      
        });
      }
    }).render('#paypal-button-container');
        
  </script>
@endsection