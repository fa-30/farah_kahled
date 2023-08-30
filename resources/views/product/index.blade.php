<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <a href="{{route('product.create')}}">Add Product</a>
   <a href="{{route('category.index')}}">Categories</a>
   <a href="{{route('order.index')}}">order</a>
    <table border =1>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product price</th>
              
                <th>photo</th>
                <th>Actions</th>


            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
             
                <td><img src="{{ asset('images/'.$product->photo) }}" alt="Product Photo" style="height: 50px;"></td>
                <td>
                    {{-- <a href="{{route('product.show',$product->id)}}">show</a> --}}
                 <form action="{{route('product.show',$product->id)}}" method="get">
                    <button>Show</button>
                 </form>
                   <form action="{{route('product.destroy',$product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>

                   <form action="{{route('product.update',$product->id)}}" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</body>
</html>