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
                Questions Management
                {{-- <small>it all starts here</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> E-HUB</a></li>
                <li><a href="{{route("questions.index")}}">Questions Management</a></li>
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
                    <a href="{{route("questions.create")}}" class="btn btn-primary">Add Question</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Slogan</th>
                        <th>Description</th>
                        <th>Unit</th>
                        <th>Selling Price</th>
                        <th>image</th>
                        @can('edit-user')
                        <th>Action</th>
                        @endcan
                        {{-- <th>Progress</th>
                        <th>Progress</th> --}}
                        {{-- <th style="width: 40px">Label</th> --}}
                    </tr>
                    @foreach ($questions as $question)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$question->department->name}}</td>
                            <td>{{$question->name}}</td>
                            <td>{{$question->slug}}</td>
                            <td>{{$question->description}}</td>
                            <td>{{$question->unit}}</td>
                            <td>{{$question->selling_price}}</td>
                            {{-- <td>{{ $dept->status == "0" ? 'available' : 'Hidden'}}</td> --}}
                            <td><img src="{{ asset('assets/uploads/question/'.$question->image) }}" style="width: 50px;height:50px" alt="image"></td>
                            <td>
                                @can('edit-user')
                                    <a href="{{route("questions.edit", $question->id)}}" class="btn btn-primary">Edit</a>
                                    <a onclick="handleDelete({{ $question->id }})" class="btn btn-danger">Delete</a>

                                @endcan
                            </td>
                        </tr>
                    @endforeach
        
                  </table>
                  {{-- delete modal --}}
                  <form action="" method="POST" id="deleteQuestionForm">
                      @csrf
                      @method('DELETE')
                      <div class="card-body">
                          <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLiveLabel">Delete Question</h5>
                                          <a href="{{route('questions.index')}}" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                                      </div>
                                      <div class="modal-body">
                                          <p class="mb-0">Are you sure u want to delete Question?</p>
                                      </div>
                                      <div class="modal-footer">
                                          {{-- <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button> --}}
                                          <a href="{{route('questions.index')}}" class="btn btn-secondary">Close</a>
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
          var form = document.getElementById('deleteQuestionForm')
          form.action = '/questions/' + id
          $('#exampleModalLive').modal('show')
      }
  </script>
@endsection
