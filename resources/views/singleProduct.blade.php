<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/style.css"/> 

    <title>{{$product->name}}</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/products-page">Home</a></li>
        </ul>
    </nav>
    
        <h1>{{$product->name}}</h1>
        <img src="{{$product->image}}" />
        <div>£{{$product->price}}</div>
        <p>{{$product->description}}</p>
        
</body>
</html>