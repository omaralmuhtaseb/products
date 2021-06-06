@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit Category</div>

                    <div class="card-body">
                        <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" value="{{$category->name}}" name="name">
                            </div>
                            <button type="submit" class="form-group btn col-md-3 btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
