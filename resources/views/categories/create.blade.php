@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">
                        {{Form::open(['route'=>'category.store','method'=>'POST','files'=>true])}}

                            @csrf
                            <div class="form-group">
                                <label for="Name">Name</label>
                                {!! Form::text('name',null,array('class'=>'form-control')) !!}
                            </div>
                        {!! Form::submit('Save',array('class'=>'form-group btn col-md-3 btn-primary')) !!}

                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
