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
                       <strong>DEPARTMENTS</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <h4 class="widget-header">All Departments</h4>
                            <ul class="category-list">
                                <li><a href="{{url("/department")}}">Law</a></li>
                                <li><a href="{{url("/department")}}">Computer Science</a></li>
                                <li><a href="{{url("/department")}}">Biochemistry</a></li>
                                <li><a href="{{url("/department")}}">Physics</a></li>
                                <li><a href="{{url("/department")}}">Maths</a></li>
                                <li><a href="{{url("/department")}}">Chemistry</a></li>
                                <li><a href="{{url("/department")}}">Language</a></li>
                                <li><a href="{{url("/department")}}">History</a></li>
                            </ul>
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
                         @foreach ($department as $dept)
                         <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="{{ url('department/'.$dept->slug) }}">
                                            <img class="card-img-top img-fluid" src="{{ asset('assets/uploads/department/'.$dept->image) }}" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="{{ url('department/'.$dept->slug) }}">{{$dept->name}}</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href=""><i class="folder fa fa-folder-open-o fa-4x"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                {{-- <a href=""><i class="fa fa-calendar"></i>26th December</a> --}}
                                            </li>
                                        </ul>
                                        <p class="card-text">{{$dept->slug}}</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">

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
                            <p>{{ $department->links() }}</p>
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
