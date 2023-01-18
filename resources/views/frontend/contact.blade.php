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
                        <strong>CONTACT US</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <h3> Email: mailsupport@lasu.edu.ng</h3>
                <h3>Address: Lagos State University, Ojo, Lagos, Nigeria.</h3>
                <h3>Phone Number: +234 8024 392 582</h3>
                <br>
				{{-- <article class="single-post">
					<h3>Donec id dolor in erat imperdiet.</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">Admin</a></li>
						<li class="list-inline-item">Nov 22, 2016</li>
					</ul>
					<img src="images/blog/post-4.jpg" alt="article-01">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
					sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

					<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<ul class="social-circle-icons list-inline">
				  		<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
				  	</ul>
				</article> --}}
				<div class="block comment">
					<h4>Leave A Comment</h4>
					<form action="{{url("savecontact")}}" method="Post">
            @csrf
						<!-- Message -->
						<div class="form-group mb-30">
						    <label for="message">Message</label>
						    <textarea class="form-control" id="message" name="message" rows="8"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<!-- Name -->
								<div class="form-group mb-30">
								    <label for="name">Name</label>
								    <input type="text" class="form-control" id="name" name="name">
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<!-- Email -->
								<div class="form-group mb-30">
								    <label for="email">Email</label>
								    <input type="email" class="form-control" id="email" name="email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<!-- Name -->
								<div class="form-group mb-30">
								    <label for="phone">Phone Number</label>
								    <input type="phone" class="form-control" id="phone" name="phone">
								</div>
							</div>
							<!-- <div class="col-sm-12 col-md-6"> -->
								<!-- Email -->
								<!-- <div class="form-group mb-30">
								    <label for="address">Address</label>
								    <input type="text" class="form-control" id="address" name="address">
								</div>
							</div> -->
						</div>
						<button type="submit" class="btn btn-transparent">Leave Comment</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

  {{-- footer section --}}
  @include('frontend.partials.footer')
  {{-- end footer section --}}

@endsection
