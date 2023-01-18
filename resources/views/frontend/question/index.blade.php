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
    filter: blur(2px);
   -webkit-filter: blur(2px);
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
                        <strong>{{strtoupper($department->name)}} DEPARTMENT</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("frontend.partials.flash-message")
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-gray">
                        {{-- <h2>Results For "Electronics"</h2> --}}
                        {{-- <p>123 Results on 12 December, 2017</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            {{-- <h4 class="widget-header">All Departments</h4> --}}
                            {{-- <ul class="category-list">
                                <li><a href="category.html">Law</a></li>
                                <li><a href="category.html">Computer Science</a></li>
                                <li><a href="category.html">Biochemistry</a></li>
                                <li><a href="category.html">Physics</a></li>
                                <li><a href="category.html">Maths</a></li>
                                <li><a href="category.html">Chemistry</a></li>
                                <li><a href="category.html">Language</a></li>
                                <li><a href="category.html">History</a></li>
                            </ul> --}}
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="category-search-filter">
                        <div class="row">
                            <div class="col-md-6">
                      
                            </div>
                            <div class="col-md-6">
                                <div class="view">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-grid-list">
                        <div class="row mt-30">
                         @foreach ($questions as $question)
                         <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="{{ url('department/'.$department->slug.'/'.$question->slug ) }}">
                                            <img class="card-img-top img-fluid blur-image" oncontextmenu="return false;" src="{{ asset('assets/uploads/question/'.$question->image) }}" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="{{ url('department/'.$department->slug.'/'.$question->slug ) }}">{{$question->name}}</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="{{ url('department/'.$department->slug.'/'.$question->slug ) }}"><i class="folder fa fa-folder-open-o fa-4x"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                {{-- <a href=""><i class="fa fa-calendar"></i>26th December</a> --}}
                                            </li>
                                        </ul>
                                        <p class="card-text">{{$question->slug}}</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <p class="card-text">&#8358;{{$question->selling_price}}</p>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                         @endforeach
                       
    
    
    
                            </div>
                        </div>
                    </div>
                    <div class="pagination justify-content-center">
                         <div class="d-flex justify-content-center" style="color: black">
                        <div>
                            <p>{{ $questions->links() }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       


     


    {{-- footer section --}}
    @include('frontend.partials.footer')
    {{-- end footer section --}}
  
@endsection
