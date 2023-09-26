@extends('home')

@section('title')
    Delete
@endsection

@section('content')
    <div class="container mt-5 d-flex justify-content-center col-md-4 col-sm-4 col-lg-4">
        <div class="card shadow-lg">
            <div class="card-header">
                <h2 class="text-center">Are you sure you want to delete "{{ $user->name }}"?</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.delete', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger form-control">Yes, Delete</button>
                    <a href="/" class="btn btn-secondary form-control mt-1">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
