<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

</head>
<body>
    <!-- Include the Header Component -->
    <x-header />

    <main>
        <section style="padding: 20px; max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 30px;">Featured Products</h2>
            <div class="products-container">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
    </main>

    <!-- Include the Footer Component -->
    <x-footer />
</body>
</html>
