@extends('home')

@section('title')
    Create
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card shadow-lg mt-5 col-md-4 col-sm-4 col-lg-5">
            <div class="card-header">
                <h2 class="text-center">Create User</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}"
                            class="form-control" id="name" required autocomplete="name">
                        @error('name')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" value="{{ old('address') }}"
                            class="form-control" id="address" required autocomplete="address">
                        @error('address')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" placeholder="Enter Age" name="age" value="{{ old('age') }}"
                            class="form-control" id="age" required autocomplete="age">
                        @error('age')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" placeholder="Enter Birthday" name="birthday" value="{{ old('birthday') }}"
                            class="form-control" id="birthday" required autocomplete="birthday">
                        @error('birthday')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" placeholder="Enter Password" name="password" value="{{ old('password') }}"
                            class="form-control" id="password" required autocomplete="password">
                        @error('password')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" name="password_confirmation"
                            value="{{ old('password_confirmation') }}" class="form-control" id="password_confirmation" required
                            autocomplete="password_confirmation">
                        @error('password')
                            <span class="text-danger font-italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                    <a href="/" class="btn btn-secondary form-control mt-1">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
