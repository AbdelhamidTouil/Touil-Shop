
	<!--new-arrivals start -->
    <section id="" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Category</h2>
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                    @foreach ($categories as $categories)
                        
                  
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                
                                <a href="{{ route('product_category',$categories->id) }}">
                                    <img style="width: 150px" src="assets/categorie_image/{{ $categories->image }}" alt="{{ $categories->name }}" />
                                </a>
                               
                               
                               <!-- <div class="sale bg-1">
                                    <p>sale</p>
                                </div>-->
                               
                            
                            </div>
                        
                    </div>
   
                </div>
              @endforeach
                   
               
           
                
            </div>
        </div><!--/.container-->
    
    </section><!--/.new-arrivals-->
    <!--new-arrivals end -->