@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        <form action="{{route('users.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Name">Full name</label>
                                <input type="text" class="form-control" value="{{$user->full_name}}" name="full_name">
                            </div>

                            <div class="form-group">
                                <label for="Name">Email</label>
                                <input type="email" class="form-control" value="{{$user->email}}" name="email">
                            </div>

                            <div class="form-group">
                                <label for="Name">Password</label>
                                <input type="password" class="form-control"  name="password">
                            </div>

                            <div class="form-group">
                                <label for="Name">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <button type="submit" class="form-group btn col-md-3 btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
