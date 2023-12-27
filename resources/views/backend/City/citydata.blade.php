@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">All Cities Data</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('city') }}">
                                    <h5><b>Go Back</b></h5>
                                </a>
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

        @if (session('success'))
            <div id="alertSuccess" class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
            <script>
                setTimeout(function() {
                    $('#alertSuccess').alert('close');
                }, 5000);
            </script>
        @endif

        <div class="container">
            <div style="text-align: center" class="row">
                <div class="offset-3 col-md-6">
                    <table class="table table-bordered table-striped" style="color: blue">
                        <tr>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $id => $city)
                            <tr>
                                <td> {{ $city->city }} </td>
                                <td> <a href="{{ route('citydelete', $city->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                 <a href="{{ route('cityupdate', $city->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
                    @if(isset($data))
                    {{ $data->links('pagination::bootstrap-5') }}
                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
