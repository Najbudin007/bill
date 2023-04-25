@extends('admin.layouts.master')
@section('content')
    <div class="container bg-light ">
        <div class="bg-gray p-5 m-5 mt-3">

            <form action="{{ route('changePassword') }}" method="POST" enctype="multipart/form-data">
                @if (session()->has('msg'))
                    <div class="alert alert-dark" role="alert">
                        {{ session()->get('msg') }}
                    </div>
                @endif
                @csrf
                <p>Name: {{ auth()->user()->name }}</p>
                <p>Email: {{ auth()->user()->email }}</p>
                <div class="form-group mt-3">
                    <label for="">Old Password</label>
                    <input type="password" name="old" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">New Password</label>
                    <input type="text" name="new" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-sm btn-success mt-3">Update</button>
            </form>
        </div>

    </div>
@endsection
