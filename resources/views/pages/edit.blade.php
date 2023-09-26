@extends('home')

@section('title')
    Edit
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card shadow-lg mt-3 col-md-4 col-sm-4 col-lg-5">
            <div class="card-header">
                <h2 class="text-center">Edit User</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.edit', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" placeholder="Enter Name" name="name" value="{{ $user->name }}"
                            class="form-control" id="name" required autocomplete="name">
                        @error('name')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" value="{{ $user->address }}"
                            class="form-control" id="address" required autocomplete="address">
                        @error('address')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" placeholder="Enter Age" name="age" value="{{ $user->age }}"
                            class="form-control" id="age" required autocomplete="age">
                        @error('age')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" placeholder="Enter Birthday" name="birthday" value="{{ $user->birthday }}"
                            class="form-control" id="birthday" required autocomplete="birthday">
                        @error('birthday')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email"
                            value="{{ $user->email }}" required autocomplete="email">
                        @error('email')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Update</button>
                    <a href="/" class="btn btn-secondary form-control mt-1">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
