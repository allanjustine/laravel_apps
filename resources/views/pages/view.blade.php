@extends('home')

@section('title')
    Show
@endsection

@section('content')
    <div class="container mt-5 d-flex justify-content-center col-md-5 col-sm-4 col-lg-5">
        <div class="card shadow-lg">
            <div class="card-header">
                <h2 class="text-center">Viewing "{{ $user->name }}" info</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">ID Number: <span class="float-right">{{ $user->id }}</span></li>
                    <li class="list-group-item">Address: <span class="float-right">{{ $user->address }}</li>
                    <li class="list-group-item">Age: <span class="float-right">{{ $user->age }}</li>
                    <li class="list-group-item">Email: <span class="float-right">{{ $user->email }}</li>
                </ul>
                <a href="/" class="btn btn-secondary mt-3 form-control">Back</a>
            </div>
        </div>
    </div>
@endsection
