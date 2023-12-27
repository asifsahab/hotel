@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('categorydata') }}"><h5><b>Go Back</b></h5></a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        @if (session('msg'))
            <div id="alertMsg" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('msg') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    $('#alertMsg').alert('close');
                }, 5000);
            </script>
        @endif

        <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        Room Category Updation</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <form action="{{ route('categoryupdated', $data->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Update Room Type:</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->


        </div>
    </div>
@endsection
