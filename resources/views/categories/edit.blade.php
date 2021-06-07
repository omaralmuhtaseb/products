@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit Category</div>

                    <div class="card-body">
                        {!! Form::open(array('route'=>['category.update','id'=>$category->id],'method'=>'POST')) !!}
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Name">Name</label>
                                {!! Form::text('name',$category->name,array('class'=>'form-control')) !!}
                            </div>

                        {{Form::submit('Update',array('class'=>'form-group btn col-md-3 btn-primary'))}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
