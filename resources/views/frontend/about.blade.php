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
  .advance-search{
    text-align: center;
    color: white;
    font-size: large;
  }

</style>
@endsection

@section('content')
  

  {{-- Header Section --}}
  @include('frontend.partials.header')
  {{-- end header section --}}

      
  @include("frontend.partials.flash-message")
  <section class="page-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <strong>ABOUT US</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
              
				<article class="single-post">
					<h2 class="d-flex justify-content-center font-weight-bold">Our Vision</h2>
					<ul class="list-inline">
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>

					</ul>
					<h2 class="d-flex justify-content-center font-weight-bold">Our Mission</h2>
					<ul class="list-inline">
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>

					</ul>
					<h2 class="d-flex justify-content-center font-weight-bold">core Values</h2>
					<ul class="list-inline">
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>
						<li class="list-inline-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>

					</ul>
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
					
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

					<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> --}}
					<ul class="social-circle-icons list-inline">
				  		<li class="list-inline-item text-center"><a class="fa fa-facebook" href="https://www.facebook.com/lasuinfo"></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-twitter" href="https://www.twitter.com/lasuofficial"></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-instagram" href="https://www.instagram.com/lasuofficial"></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-linkedin" href="https://www.linkedin.com/school/lagos-state-university-ojo-campus"></a></li>
				  	</ul>
				</article>
		
			</div>
			
		</div>
	</div>
  </section>
    
  {{-- footer section --}}
  @include('frontend.partials.footer')
  {{-- end footer section --}}
  
@endsection


