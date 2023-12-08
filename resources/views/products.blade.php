<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" /> 

    <title>Abby's Roastery and Imports</title>
</head>
<body>
    <nav>
        <h1>Abby's Roastery and Imports</h1>
            <p>Find all your coffee and tea supplies in one place</p>
    </nav>

   

    <div class="filter-container">
        <button onclick="filterProducts('all')">All</button>
        <button onclick="filterProducts('under2')">Under £2</button>
        <button onclick="filterProducts('2to3')">£2-£3</button>
        <button onclick="filterProducts('over3')">£3 and up</button>
    </div>

    <div class="outerContainer">
        @foreach ($products as $product)
        <div class="productContainer" data-price="{{$product->price}}">
            <p>{{$product->name}}</p>
            <img src="{{$product->image}}"/>
            <p>£{{$product->price}}</p>
            <a href="/singleProduct/{{$product->id}}">Click for more info about this {{$product->name}}</a>
        </div>
        @endforeach
    </div>

    <script>
        function filterProducts(priceRange) {
            const products = document.querySelectorAll('.productContainer');

            products.forEach(product => {
                const price = parseFloat(product.getAttribute('data-price'));

                switch (priceRange) {
                    case 'all':
                        product.style.display = 'block';
                        break;
                    case 'under2':
                        product.style.display = price < 2 ? 'block' : 'none';
                        break;
                    case '2to3':
                        product.style.display = price >= 2 && price <= 3 ? 'block' : 'none';
                        break;
                    case 'over3':
                        product.style.display = price > 3 ? 'block' : 'none';
                        break;
                    default:
                        break;
                }
            });
        }
    </script>

</body>
</html>