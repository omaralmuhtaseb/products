@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        {!! Form::open(array('route'=>['product.update','id'=>$product->id],'method'=>'POST','files'=>true)) !!}
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Name">Name</label>
                            {!! Form::text('name',$product->name,array('class'=>'form-control','placeholder'=>'Enter Product Name','required')) !!}
                        </div>

                        <div class="form-group">
                            <label for="content">Description</label>
                            {!! Form::textarea('description',$product->description,array('class'=>'form-control','rows'=>8,'cols'=>8)) !!}


                        </div>
                        <img src="{{$product->ProductImage}}" width="240px" height="185px">
                        <h6 style="color: darkred">Note that if you upload new picture , the old one will be deleted</h6>
                        <div class="form-group">
                            <label for="quantity">Image</label>
                            {!! Form::file('image',array('class'=>'form-control-file')) !!}
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            {!! Form::number('quantity',$product->quantity,array('class'=>'form-control')) !!}

                        </div>

                        <div class="form-group">
                            <label for="quantity">Price</label>
                            {!! Form::number('price',$product->price,array('class'=>'form-control','step'=>0.01)) !!}

                        </div>

                        {{--<div class="form-group">--}}
                        {{--<label for="quantity">Categories</label>--}}



                        {{--<select class="form-control" multiple="multiple" id="category">--}}
                        {{--<option selected="selected">orange</option>--}}
                        {{--<option>white</option>--}}
                        {{--<option selected="selected">purple</option>--}}
                        {{--</select>--}}

                        {{--</div>--}}

                        {!! Form::submit('Update',array('class'=>'form-group btn col-md-3 btn-primary')) !!}

                        {{ Form::close()  }}


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