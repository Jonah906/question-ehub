
<section class="blog_section">
    <div class="container trending">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Trending Questions</h2>
                    <p>Join the millions of students who buy past questions from Lasu E-Hub everyday with ease and stress free process..</p>
                </div>
            </div>
        </div>
        <div class="blog_content">
            <div class="owl-carousel owl-theme">
                @foreach ($trending_question as $trending)
                  <div class="card-body">
                    <div class="blog_item">
                        <div class="blog_image">
                          <a href="{{url('department/'.$trending->department->slug.'/'.$trending->slug)}}">
                            <img class="img-fluid blur-image" oncontextmenu="return false;" src="{{ asset('assets/uploads/question/'.$trending->image) }}" alt="trending-image">
                            <span><i class="icon ion-md-create"></i></span>
                          </a>
                        </div>
                        <div class="blog_details">
                            <div class="blog_title">
                                <h5><a href="{{url('department/'.$trending->department->slug.'/'.$trending->slug)}}">{{$trending->name}}</a></h5>
                            </div>
                            <ul>
                                <li style="color: #5672f9;font-weight:bold;"><i class="icon ion-md-calendar"></i>{{$trending->unit}}unit</li>
                                <li style="color: #5672f9;font-weight:bold;">(&#x20A6){{$trending->selling_price}}</li>
                            </ul>
                        </div>
                      </div> 
                  </div>
                @endforeach                       
              
            </div>
        </div>
    </div>
</section>