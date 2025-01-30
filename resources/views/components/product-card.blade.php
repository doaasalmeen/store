@props(['product'])

<div class="product-card" style="border: 1px solid #ddd; padding: 15px; text-align: center; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" style="width: 100%; height: auto; max-height: 250px; object-fit: contain;">
    <h3 style="margin: 10px 0;">{{ $product['title'] }}</h3>
    <p style="color: #777; font-size: 14px;">{{ Str::limit($product['description'], 80) }}</p>
    <p style="font-weight: bold; color: #333;">${{ $product['price'] }}</p>
</div>
