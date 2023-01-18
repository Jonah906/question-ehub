@extends('backend.layouts.app')

@section('content')

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
                Department Management
                {{-- <small>it all starts here</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-HUB</a></li>
                <li><a href="{{route("backenddepts.index")}}">Department Management</a></li>
                <li class="active"> Home</li>
            </ol>
       </section>
       <br>
       @include("backend.partials.flash-message")
       <br>
      <!-- Main content -->
      <section class="content">
          <section class="row">
             <section class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                    <a href="{{route("backenddepts.create")}}" class="btn btn-primary">Add Department</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Slugan</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>image</th>
                        @can('edit-user')
                        <th>Action</th>
                        @endcan
                        {{-- <th>Progress</th>
                        <th>Progress</th> --}}
                        {{-- <th style="width: 40px">Label</th> --}}
                    </tr>
                    @foreach ($departments as $dept)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$dept->name}}</td>
                            <td>{{$dept->slug}}</td>
                            <td>{{$dept->description}}</td>
                            <td>{{ $dept->status == "0" ? 'available' : 'Hidden'}}</td>
                            <td><img src="{{ asset('assets/uploads/department/'.$dept->image) }}" style="width: 50px;height:50px" alt="image"></td>
                            <td>
                                @can('edit-user')
                                    <a href="{{route("backenddepts.edit", $dept->id)}}" class="btn btn-primary">Edit</a>
                                    <a onclick="handleDelete({{ $dept->id }})" class="btn btn-danger">Delete</a>

                                @endcan
                            </td>
                        </tr>
                    @endforeach
        
                  </table>
                  {{-- delete modal --}}
                  <form action="" method="POST" id="deleteDepartmentForm">
                      @csrf
                      @method('DELETE')
                      <div class="card-body">
                          <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLiveLabel">Delete Department</h5>
                                          <a href="{{route('backenddepts.index')}}" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                                      </div>
                                      <div class="modal-body">
                                          <p class="mb-0">Are you sure u want to delete Department?</p>
                                      </div>
                                      <div class="modal-footer">
                                          {{-- <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button> --}}
                                          <a href="{{route('backenddepts.index')}}" class="btn btn-secondary">Close</a>
                                          <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                  {{-- end delete modal --}}
                </div>
         
            </div>
        </section>
    </section>
    </section>
  </div>
    <!-- /.box -->
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
 @include("backend.partials.footer")


</div>
<!-- ./wrapper -->

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
@section('scripts')
  <script>
      function handleDelete(id)
      {
          var form = document.getElementById('deleteDepartmentForm')
          form.action = '/backenddepts/' + id
          $('#exampleModalLive').modal('show')
      }
  </script>
@endsection
