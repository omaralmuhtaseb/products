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
                    <th scope="col">Operations </th>


                </tr>
                </thead>
                <tbody>
                @foreach($products as $index=> $product )

                    <tr>
                        <td> {{$products->firstItem() +$index}}.</td>

                        <td>  {{$product->name}}</td>

                        <td>  {{$product->description}}</td>

                        <td>  @foreach($product->Category as $category) {{$category->name}}  @endforeach</td>


                        <td>  {{$product->quantity}} </td>

                        <td>  {{$product->price}} </td>

                        <td>

                            <a type="button" href="" data-toggle="modal" data-target="#myModal_{{$product->id}}"><i class="fa fa-image fa-1x"></i></a>


                            <div class="modal fade" id="myModal_{{$product->id}}" role="dialog">
                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p> {{ucfirst($product->name)}}&nbsp;Picture</p>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div  class="modal-body ml_63">
                                            <img src="{{$product->ProductImage}}" onerror="this.src='/mawdoo3/products-images/noimage.png'" width="280px" height="250px">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </td>


                        <td class="operations"><a href="{{route('product.edit',['id'=>$product->id])}}"><i class="fa fa-edit"></i></a>

                            <form method="POST" action="{{route('product.destroy',['id'=>$product->id])}}">
                                @csrf
                                @method('DELETE')
                                <button id="delete-btn" type="submit" onclick="return confirm('Are you sure to delete this record ?')" >
                                    <i  class="fa fa-trash delete-icon"></i>
                                </button>
                            </form>
                            <form method="get" action="{{route('product.qty.decrement',['id'=>$product->id])}}">

                                <button id="minus-btn" type="submit" >
                                    <i  class="fa fa-minus-square minus-icon "></i>
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
