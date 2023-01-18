<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Featured Departments</h2>
                    <p>Questions are available for various departments.</p>
                </div>
                <div class="row">

                    <div class="container">
                        <div class="row blog">
                            <div class="col-md-12">
                                <div class="blog_content">
                                    <div class="owl-carousel owl-theme">
                                        @foreach ($featured_department as $dept)
                                          <div class="blog_item">
                                            <div class="blog_image">
                                              <a href="{{ url('department/'.$dept->slug) }}">
                                                <img class="img-fluid" oncontextmenu="return false;" src="{{ asset('assets/uploads/department/'.$dept->image) }}" alt="trending-image">
                                                <span><i class="icon ion-md-create"></i></span>
                                              </a>
                                            </div>
                                            <div class="blog_details">
                                                <div class="blog_title">
                                                    <h5><a href="{{ url('department/'.$dept->slug) }}">{{$dept->name}}</a></h5>
                                                </div>
                                                {{-- <ul>
                                                    <li><i class="icon ion-md-person"></i>Price </li>
                                                    <li><i class="icon ion-md-calendar"></i>unit</li>
                                                </ul> --}}
                                                {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                                                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a> --}}
                                            </div>
                                          </div> 
                                        @endforeach                       
                                      
                                    </div>
                                </div>
                         
                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>