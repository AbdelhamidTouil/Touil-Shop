
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/assets_tamplate">
    @include('assets.css')
   
</head>
<body>
    
    @include('main.header')
    <div class="card">
        <div class="card-header">
          Product Description
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $product_des->name }}</h5>
          <img width="400px" height="400px" src="/assets/products_image/{{ $product_des->image }}" alt="{{ $product_des->name }}">
          <p class="card-text">{{ $product_des->description }}</p>
         
        </div>
      </div>
      @include('main.footer')
</body>
</html>