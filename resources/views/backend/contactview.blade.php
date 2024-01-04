@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Notifications</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('contactview') }}">Notification</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
        </section>



        <div class="container">
            @foreach ($data as $contact)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Contact Information</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $contact->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $contact->email }}</li>
                        <li class="list-group-item"><strong>Subject:</strong> {{ $contact->subject }}</li>
                        <li class="list-group-item"><strong>Message:</strong> {{ $contact->message }}</li>
                    </ul>
                </div>
                <div class="card-footer text-muted">
                    Received on {{ $contact->created_at->format('F d, Y \a\t h:i A') }}
                </div>
            </div>
            @endforeach
        </div>




    </div>
@endsection
