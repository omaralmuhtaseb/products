@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at </th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user )

                    <tr>
                      <td>  {{$user->id}}</td>

                        <td>  {{$user->full_name}}</td>

                        <td>  {{$user->email}}</td>

                        <td>  {{$user->created_at->toFormattedDateString()}}</td>

                        <td><a href="{{route('users.edit',['id'=>$user->id])}}"><i class="fa fa-edit"></i></a></td>

                        <td>
                            <form method="POST" action="{{route('users.destroy',['id'=>$user->id])}}">
                                @csrf
                                @method('DELETE')
                                <button id="delete-btn" type="submit" onclick="return confirm('هل تريد حذف السجل؟')" >
                                    <i  class="fa fa-trash delete-icon"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{$users->render()}}
        </div>
    </div>

@endsection
