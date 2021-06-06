@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Create Product</div>

                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Product Name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="content">Description</label>
                                <textarea rows="8" cols="8" type="text" class="form-control" name="description"></textarea>


                            </div>

                            <div class="form-group">
                                <label for="quantity">Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Price</label>
                                <input type="number" step="0.01" name="price" min="1" class="form-control">
                            </div>

                            <div class="col-md-9">
                                <label for="quantity">Categories</label>
                                <div class="container rolesPermissions">


                                    @foreach($categories as $category)
                                    <label class="inline-flex items-center text-sm" >

                                        <span class="ml-1">{{$category->name}}</span>

                                        <input type="checkbox" class="form-checkbox" name="category[]" value="{{$category->id}}">
                                    </label>
                                    @endforeach

                                </div>
                            </div>

                                    <button type="submit" class="form-group btn col-md-3 btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script>
        $('select').select2({ width: '100%', placeholder: "Select an Option", allowClear: true });

    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    @stop