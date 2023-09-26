@extends('home')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show mt-3 py-3 text-center" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="overflow-x-auto">
            <h1 class="mt-5">Users</h1>
            <hr>
            <a href="/users/create" class="btn btn-info float-end mb-3 text-white">Add User</a>
            <table class="table table-striped table-hover mt-5">
                <thead class="table-secondary">
                    <tr>
                        <th class="text-black">ID No.</th>
                        <th class="text-black">Name</th>
                        <th class="text-black">Address</th>
                        <th class="text-black">Age</th>
                        <th class="text-black">Email</th>
                        <th class="text-black">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('users.show', $user->name) }}"
                                        class="btn bg-success text-white">Show</a>
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn bg-primary text-white">Update</a>
                                    <a href="{{ route('users.delete', $user->id) }}"
                                        class="btn bg-danger text-white">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
            {{-- <select name="select" id="select" class="form-select mt-5">
                @foreach (\App\Models\User::pluck('name', 'id') as $user => $name)
                    <option value="{{ $user }}">{{ $name }}</option>
                @endforeach
            </select> --}}
        </div>
    </div>
@endsection
