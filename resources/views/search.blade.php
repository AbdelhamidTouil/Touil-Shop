	
    <base href="/assets_tamplate">
  @include('assets.css')
    @include('main.header')
    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Products</h2>
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                    @foreach ($products as $products)
                        
                   <form action="{{ route('storecart',$products->id) }}" method="post">
                     @csrf
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                
                                <img src="/assets/products_image/{{ $products->image }}" alt="{{ $products->name }}">
                                <div class="single-new-arrival-bg-overlay"></div>
                               
                                <div class="sale bg-1">
                                    <p>sale</p>
                                </div>
                               
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <input type="submit" value="Add To Cart" style="color: black">
                                        <input style="color: black" type="number" name="quantity" min="1" value="1">
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <div>
                            <h4><a href="#">{{ $products->name }}</a></h4>
                                 <p class="">{{ $products->selling_price }}$</p>
                                 <a href="{{ route('product_description',$products->id) }}">show more</a>
                           </div>
                           
                        </div>
                    </div>
                </form>
              @endforeach
                   
               
           
                
                </div>
            </div>
        </div><!--/.container-->
    
    </section><!--/.new-arrivals-->
    <!--new-arrivals end -->