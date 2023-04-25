@extends('admin.layouts.master')
@section('content')
    <div class="m-3 p-3">
        <a href="{{ route('createUser') }}"><button class="btn btn-sm btn-dark mb-3">Create User </button></a>
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('editUser', $user->id) }}">
                                <button class="btn btn-sm btn-dark">Edit </button>
                            </a>
                            <a href="{{ route('deleteUser', $user->id) }}">
                                <button class="btn btn-sm btn-danger">Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
