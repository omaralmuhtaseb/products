@extends('layouts.app')

@section('content')
    <a href="{{route('product.create')}}" class="btn btn-primary mb-2 ml-5">Create Product <i class="fa fa-plus"></i></a>

    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $product )

                    <tr>
                        <td>  {{$product->id}}</td>

                        <td>  {{$product->name}}</td>

                        <td>  {{$product->description}}</td>

                        <td>  @foreach($product->Category as $category) {{$category->name}}  @endforeach</td>


                        <td>  {{$product->quantity}} </td>

                        <td>  {{$product->price}} </td>

                        <td>  {{$product->id}} </td>


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

            {{$products->render()}}
        </div>
    </div>

@endsection
