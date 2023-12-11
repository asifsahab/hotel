@extends('backend.Layouts.main')
@section('main-section')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="offset-3 col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
                Category Room Registration</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

            <div class="card-body">
                <form action="{{route('categorysubmit')}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Room Type:</label>
                <input type="text" name="roomtype" placeholder="Appartment,PentHouse,Villa......" class="form-control @error('roomtype') is-invalid @enderror">
                <span class="text-danger">
                    @error('roomtype')
                    {{$message}}
                    @enderror
                </span>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

        <!-- Form Element sizes -->


      </div>
</div>
@endsection
