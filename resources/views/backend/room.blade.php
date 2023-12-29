@extends('backend.Layouts.main')
@section('main-section')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Registration</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('roomregister') }}">Room</a></li>
                            </ol>

                            <a href="{{ route('roomdata') }}" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
        </section>

        @if (session('success'))
            <div id="alertSuccess" class="alert alert-info alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    $('#alertSuccess').alert('close');
                }, 3000);
            </script>
        @endif


        <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Room Registration</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('roomsubmit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select City</label>
                            <select class="form-control" name="city">
                                <option selected disabled name="city">Select City</option>
                                @if (isset($city))
                                    @foreach ($city as $cityname)
                                        <option name="city" value="{{ $cityname->id }}"
                                            {{ old('city') == $cityname->id ? 'selected' : '' }}>{{ $cityname->city }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Category</label>
                            <select class="form-control" name="category">
                                <option selected disabled name="category">Select category</option>
                                @if (isset($category))
                                    @foreach ($category as $categoryname)
                                        <option value="{{ $categoryname->id }}"
                                            {{ old('category') == $categoryname->id ? 'selected' : '' }}>
                                            {{ $categoryname->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hotelname">Room Title</label>
                                    <input type="text" name="hotelname" class="form-control" id="hotelname"
                                        placeholder="Hotel Name" value="{{ old('hotelname') }}">
                                </div>
                                @error('hotelname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Room Price</label>
                                    <input type="number" name="price" class="form-control" id="price"
                                        placeholder="Enter Room Price" value="{{ old('price') }}">
                                </div>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="room">No. of Rooms</label>
                                    <input type="number" name="room" class="form-control" id="room"
                                        placeholder="Enter Room" value="{{ old('room') }}">
                                </div>
                                @error('room')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="person">Person Capacity</label>
                                    <input type="number" name="person"class="form-control" id="person"
                                        placeholder="Enter Person" value="{{ old('person') }}">
                                </div>
                                @error('person')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="date">
                                        <label for="checkin">Availablity Check IN</label>
                                        <input type="date" name="checkin" class="form-control" placeholder="Check In"
                                            value="{{ old('checkin') }}" />
                                    </div>
                                    @error('checkin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="date">
                                        <label for="checkout">Availability Check Out</label>
                                        <input type="date" name="checkout" class="form-control" placeholder="Check Out"
                                            value="{{ old('checkout') }}" />
                                    </div>
                                    @error('checkout')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Hotel Address:</label>
                            <textarea class="form-control" name="address" cols="10" rows="2" placeholder="Address of your Place...">{{ old('address') }}</textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="room">Description:</label>
                            <textarea class="form-control" name="description" cols="10" rows="3"
                                placeholder="Information of Accomodation...">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Choose an image file:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="exampleInputFile"
                                    accept="image/*">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
