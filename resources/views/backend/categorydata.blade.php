@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <section class="content-header">
        <!-- Content Header (Page header) -->

            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
<div class="d-flex justify-content-between align-items-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active"><a href="{{route('categorydata')}}">Category</a></li>
    </ol>

    <a href="{{route('roomcategory')}}" class="btn btn-info">Add Category</a>
</div></div>
</div>
</section>

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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title ">
                                    <i class="fas fa-bed"></i>&nbsp;Category Table
                                </h3>
                                <div class="card-tools">
                                    <form action="{{route('registerdata')}}" method="get" >
                                        @csrf
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" placeholder="Search by Category....." class="form-control float-right">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            </form>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">

                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                            <th class="text-center">Category</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @foreach ($data as $id => $category)
                            <tr>
                                <td class="text-center"> {{ $category->name }} </td>
                                <td class="text-center"> <a href="{{ route('categorydelete', $category->id) }}"
                                        class="btn btn-danger btn-sm">Delete </a>
                                        <a href="{{ route('categoryupdate', $category->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </section>
            </div></div>
@endsection
