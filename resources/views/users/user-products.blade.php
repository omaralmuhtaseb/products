@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created at </th>
                    <th scope="col">Image </th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($user->Products as $product )

                    <tr>
                        <td>  {{$product->id}}</td>

                        <td>  {{$product->name}}</td>

                        <td>  {{$product->quantity}} pcs.</td>

                        <td>  {{$product->price}} JD</td>

                        <td>  {{$product->created_at->toFormattedDateString()}}</td>

                        <td>{{$product->getImage}}</td>

                        <td><a href="{{route('product.edit',['id'=>$product->id])}}"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <form method="POST" action="{{route('product.destroy',['id'=>$product->id])}}">
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

        </div>
    </div>

@endsection
