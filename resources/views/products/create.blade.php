@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Create Product</div>

                    <div class="card-body">
                        {!! Form::open(['route'=>'product.store','method'=>'POST','files'=>true]) !!}
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name</label>
                                {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter Product Name','required')) !!}
                            </div>

                            <div class="form-group">
                                <label for="content">Description</label>
                                {!! Form::textarea('description',null,array('class'=>'form-control','rows'=>8,'cols'=>8)) !!}


                            </div>

                            <div class="form-group">
                                <label for="quantity">Image</label>
                                {!! Form::file('image',array('class'=>'form-control-file')) !!}
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                {!! Form::number('quantity',null,array('class'=>'form-control')) !!}

                            </div>

                            <div class="form-group">
                                <label for="quantity">Price</label>
                                {!! Form::number('price',null,array('class'=>'form-control','step'=>0.01)) !!}

                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="quantity">Categories</label>--}}



                                    {{--<select class="form-control" multiple="multiple" id="category">--}}
                                        {{--<option selected="selected">orange</option>--}}
                                        {{--<option>white</option>--}}
                                        {{--<option selected="selected">purple</option>--}}
                                    {{--</select>--}}

                            {{--</div>--}}

                        {!! Form::submit('Save',array('class'=>'form-group btn col-md-3 btn-primary')) !!}

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