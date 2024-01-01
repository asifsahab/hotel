@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <section class="content-header">
            <!-- Content Header (Page header) -->

            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rooms</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('roomdata') }}">Room</a></li>
                            </ol>

                            <a href="{{ route('roomregister') }}" class="btn btn-info">Add Room</a>
                        </div>
                    </div>
                </div>
        </section>

        @if (session('msg'))
            <div id="alertMsg" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('msg') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    $('#alertMsg').alert('close');
                }, 3000);
            </script>
        @endif
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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title ">
                                    <i class="fas fa-bed"></i>&nbsp;Room Table
                                </h3>
                                <div class="card-tools">
                                    <form action="{{ route('roomdata') }}" method="get">
                                        @csrf
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="search" placeholder="Search by Title....."
                                                class="form-control float-right">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-secondary"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="card-body table-responsive p-0">

                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">City</th>
                                            <th class="text-center">Room Category</th>
                                            <th class="text-center">Room Title</th>

                                            <th class="text-center">Detail</th>

                                            <th class="text-center">Time</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $room)
                                            <tr>

                                                <td class="text-center"> {{ $room->city->city }} </td>
                                                <td class="text-center"> {{ $room->category->name }} </td>
                                                <td class="text-center"> {{ $room->hotelname }} </td>
                                                <td class="text-center"> RS-{{ $room->price }}/- <br>Room-
                                                    {{ $room->room }} <br> Person-{{ $room->person }}</td>

                                                <td class="text-center"> {{ $room->checkin }} <br> {{ $room->checkout }}
                                                </td>

                                                <td class="text-center"> {{ $room->address }} </td>
                                                <td class="text-center"> {{ $room->description }} </td>
                                                <td class="text-center">@if($room->status == 1)<span class="badge badge-success">Available</span>@else <span class="badge badge-danger">Un-Available</span>@endif</td>

                                                <td class="text-center">
                                                    <img src="{{ asset('storage/images/' . $room->image) }}"
                                                        style="width: 40px; height: 45px; border-radius: 10px;" />
                                                </td>

                                                <td class="text-center"> <a
                                                        href="{{ route('roomdelete', $room->hotelname) }}"
                                                        class="text-danger btn-md"><i class="fas fa-trash"></i></a>&nbsp;
                                                    <a href="{{ route('roomupdate', $room->hotelname) }}"
                                                        class="text-primary btn-md"><i class="fas fa-pen"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if(isset($data))
                                {{ $data->links('pagination::bootstrap-5') }}
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
