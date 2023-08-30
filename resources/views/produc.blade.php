<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1 >
        <thead>
            <tr>
            <th>ProductId</th>
               
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Actions</th>


            </tr>
        </thead>

        <tbody>
            @foreach ($produc as $product )
            <tr>
            <td>{{$product->product_id}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_availability}}</td>
                <td><button onclick="location='/products/{{$product->product_id}}'">show</button></td>
            </tr>
            @endforeach

        </tbody>
    </table>

</body>
</html>