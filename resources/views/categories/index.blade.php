@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at </th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category )

                    <tr>
                        <td>  {{$category->id}}</td>

                        <td>  {{$category->name}}</td>

                        <td>  {{$category->created_at->toFormattedDateString()}}</td>

                        <td><a href="{{route('category.edit',['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <form method="POST" action="{{route('category.destroy',['id'=>$category->id])}}">
                                @csrf
                                @method('DELETE')
                                <button id="delete-btn" type="submit" onclick="return confirm('Are you sure to delete this record ?')" >
                                    <i  class="fa fa-trash delete-icon"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{$categories->render()}}
        </div>
    </div>

@endsection
