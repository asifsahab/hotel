@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Destination</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('citydata') }}">City</a></li>
                            </ol>

                            <a href="{{ route('city') }}" class="btn btn-info">Add City</a>
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
            
                <!-- Display SweetAlert when there is a success message in the session -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: "Success",
                            text: "{{ session('success') }}",
                            icon: "success"
                        });
                    });
                </script>
            @endif
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title ">
                                    <i class="fas fa-map"></i>&nbsp;City Table
                                </h3>
                                <div class="card-tools">
                                    <form action="{{ route('citydata') }}" method="get">
                                        @csrf
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="search" placeholder="Search by City...."
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
                                            <th class="text-center">Action</th>
                                        </tr>
                                        @foreach ($data as $id => $city)
                                            <tr>
                                                <td class="text-center"> {{ $city->city }} </td>
                                                <td class="text-center">
                                                    <a href="{{ route('citydelete', $city->city) }}"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                                                    <a href="{{ route('cityupdate', $city->city) }}"
                                                        class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
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
