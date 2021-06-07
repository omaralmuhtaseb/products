@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        {!! Form::open(array('route'=>['users.update','id'=>$user->id],'method'=>'POST')) !!}

                        @csrf
                        <div class="form-group">
                            <label for="Name">Full name</label>
                            {!! Form::text('full_name',$user->full_name,array('class'=>'form-control')) !!}
                        </div>

                        <div class="form-group">
                            <label for="Name">Email</label>
                            {!! Form::email('email',$user->email,array('class'=>'form-control')) !!}
                        </div>

                        <div class="form-group">
                            <label for="Name">Password</label>
                            {{ Form::password('password',array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            <label for="Name">Confirm Password</label>
                            {{ Form::password('password_confirmation',array('class' => 'form-control')) }}

                        </div>
                        {!! Form::submit('Update',array('class'=>'form-group btn col-md-3 btn-primary')) !!}

                        {{Form::close()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
