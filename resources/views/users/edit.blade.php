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
               Update User
                {{-- <small>it all starts here</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-HUB</a></li>
                <li><a href="{{route("users.index")}}">User Management</a></li>
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
                <a href="{{route("users.index")}}" class="btn btn-primary">Back</a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route("users.update",$user->id)}}">
                @csrf
                @method('PUT')
                <div class="box-body">
                  <div class="form-group">
                        <label for="name">Full Name </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}" autocomplete="name" autofocus placeholder="Enter Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}" required autocomplete="phone" placeholder="Enter Phone Number">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-check col-md-1">
                        <label for="role">Roles:</label>
                        @foreach ($roles as $role )
                            <label for="role">{{$role->name}}</label>
                            <input type="checkbox"  name="roles[]" id="roles" value="{{$role->id}}">
                        @endforeach
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
