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


                                    <select class="form-control" multiple="multiple" id="categories">
                                        <option selected="selected">orange</option>
                                        <option>white</option>
                                        <option selected="selected">purple</option>
                                    </select>
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $("#categories").select2({
            minimumInputLength: 1,
            tags: true,
            dir: "rtl",
            placeholder: "قم بإختيار الأوسمة",
            ajax: {
                url: "",
                dataType: 'json',
                data: function (term) {
                    return {
                        term: term
                    };
                }
            }
        });
    </script>
    @stop