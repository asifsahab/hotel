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
                            <li class="breadcrumb-item"><a href="#">Room</a></li>
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
                    <h3 class="card-title">Room Registration</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('submitroom')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select City</label>
                            <select class="form-control" name="city">
                                <option selected disabled name="city">Select City</option>
                                @if (isset($city))
                                    @foreach ($city as $cityname)
                                        <option name="city" value="{{ $cityname->id }}">{{ $cityname->city }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Category</label>
                            <select class="form-control" name="category">
                                <option selected disabled name="category">Select category</option>
                                @if (isset($category))
                                    @foreach ($category as $categoryname)
                                        <option value="{{ $categoryname->id }}">{{ $categoryname->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hotelname">Hotel Name</label>
                            <input type="text" name="hotelname" class="form-control" id="hotelname" placeholder="Hotel Name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="room">Room</label>
                                    <input type="number" name="room" class="form-control" id="room" placeholder="Enter Room">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="person">Person Capacity</label>
                                    <input type="number" name="person"class="form-control" id="person" placeholder="Enter Person">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="date">
                                        <label for="checkin">Availablity Check IN</label>
                                        <input type="date" name="checkin" class="form-control" placeholder="Check In" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="date">
                                        <label for="checkout">Availability Check Out</label>
                                        <input type="date" name="checkout" class="form-control" placeholder="Check Out" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="room">Description:</label>
                            <textarea name="" class="form-control" name="description" cols="10" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
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
