@extends('backend.layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="wrapper">

  @include("backend.partials.header")
  
  <!-- =============================================== -->
  
  <!-- Left side column. contains the sidebar -->
  @include("backend.partials.sidebar")
  
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Question
                {{-- <small>it all starts here</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-HUB</a></li>
                <li><a href="{{route("users.index")}}">Qustion  Management</a></li>
                <li class="active"> Create</li>
            </ol>
       </section>
       <br>
      {{-- <!-- Main content --> --}}
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <a href="{{route("questions.index")}}" class="btn btn-primary">Back</a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="{{ route("questions.store") }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="department_id" name="department_id" data-parsley-trigger="change" required placeholder="Department ID" autocomplete="off" class="form-control">
                                <option selected disabled value="0">>-SELECT DEPARTMENT-<</option>
                                @foreach ($department as $dept )
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input id="Name" type="text" name="name" data-parsley-trigger="change" required placeholder="Product Name" autocomplete="off" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="small_description">Small Description</label>
                            <textarea id="small_description" row="3" name="small_description" data-parsley-trigger="change" placeholder="Small description" required  autocomplete="off" class="form-control @error('small_description') is-invalid @enderror"></textarea>
                            @error('small_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" row="3" name="description" data-parsley-trigger="change" placeholder="Product description" required  autocomplete="off" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keyword</label>
                            <textarea id="meta_keywords" row="3"  name="meta_keywords" data-parsley-trigger="change" placeholder="Meta_keywords" required  autocomplete="off" class="form-control @error('meta_keywords') is-invalid @enderror"></textarea>
                            @error('meta_keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="original_price">Original Price</label>
                            <input id="original_price" type="number" name="original_price" data-parsley-trigger="change" placeholder="Original Price" required  autocomplete="off" class="form-control @error('original_price') is-invalid @enderror">
                            @error('original_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input id="selling_price" type="number" name="selling_price" data-parsley-trigger="change" placeholder="Selling Price" required  autocomplete="off" class="form-control @error('selling_price') is-invalid @enderror">
                            @error('selling_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input id="image" name="image" type="file" data-parsley-trigger="change" placeholder="Image" required  autocomplete="off" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unit">Question Unit</label>
                            <input id="unit" type="number" name="unit" data-parsley-trigger="change" placeholder="Question Unit" required  autocomplete="off" class="form-control @error('unit') is-invalid @enderror">
                            @error('unit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="shipping">Shipping Fee</label>
                            <input id="shipping" type="number" name="shipping" data-parsley-trigger="change" placeholder="Shipping Fee" required  autocomplete="off" class="form-control @error('shipping') is-invalid @enderror">
                            @error('shipping')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="level">level</label>
                            <input id="level" type="number" name="level" data-parsley-trigger="change" placeholder="level" required  autocomplete="off" class="form-control @error('level') is-invalid @enderror">
                            @error('level')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Hide</label>
                            <input id="status" type="checkbox" name="status" data-parsley-trigger="change" placeholder="Status"   autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="trending">Trending</label>
                            <input id="trending" type="checkbox" name="trending" data-parsley-trigger="change" placeholder="Trending"   autocomplete="off">
                            {{-- @error('popular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                        <div class="form-group">
                            <label for="feature">Feature</label>
                            <input id="feature" type="checkbox" name="feature" data-parsley-trigger="change" placeholder="feature"   autocomplete="off">
                            {{-- @error('popular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                   
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <textarea id="meta_title" roe="3" name="meta_title" data-parsley-trigger="change" placeholder="Meta_title" required  autocomplete="off" class="form-control @error('meta_title') is-invalid @enderror"></textarea>
                            @error('meta_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea id="meta_description" row="3"  name="meta_description" data-parsley-trigger="change" placeholder="Meta_description" required  autocomplete="off" class="form-control @error('meta_description') is-invalid @enderror"></textarea>
                            @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Product Slugan</label>
                            <input id="slug" type="text" name="slug" data-parsley-trigger="change" required placeholder="Product Slugan" autocomplete="off" class="form-control @error('slug') is-invalid @enderror">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    

                        {{-- <div class="row"> --}}
                            {{-- <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                </label>
                            </div> --}}
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        {{-- </div> --}}
                    </div>
                    
                </form>
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
   </div>



  
    <!-- /.box -->
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
 @include("backend.partials.footer")

</div>
<!-- ./wrapper -->

@endsection
