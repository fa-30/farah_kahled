<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border =1>
        <thead>
            <tr>
                
                <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>category</th>
                <th>photo</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td>{{$product->category_id}}</td>
                <td> <img src="/images/{{ $product->photo }}" alt=""></td>
                <td><a href="{{route('product.index')}}">back</a></td>
            </tr>

        </tbody>
    </table>

</body>
</html>