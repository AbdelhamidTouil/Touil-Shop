
<!doctype html>
<html class="" lang="en">
	<base href="/assets_tamplate">
  @include('assets.css')

	
	<body>
    @include('main.header')
<div>
    <form action="{{ route('orderconfirm') }}" method="post">
        @csrf
        <div>
            <table align="center"  style="margin-top: 20px;">
                <tr>
                    <th style="padding: 30px;">Product name</th>
                    <th style="padding: 30px;">price</th>
                    <th style="padding: 30px;">Qte</th>
                    <th style="padding: 30px;">Total</th>
                    <th style="padding: 30px;">Action</th>
                    
                </tr>
    
                @php
                    $total = 0;
                @endphp
    
                @foreach ($products as $products)
                    <tr align="center">  
                        <td>
                            <input type="text" name="product_name[]" hidden value="{{ $products->name }}">
                            {{ $products->name }}
                        </td>
    
                        <td><input type="text" name="selling_price[]" hidden value="{{ $products->selling_price }}">
                            {{ $products->selling_price}}$
                        </td>
    
                        <td><input type="text" name="quantity[]" hidden value="{{ $products->quantity }}">
                            {{ $products->quantity }}
                        </td>
    
                        <td><input type="text" name="total[]" hidden value="{{ $products->selling_price  *  $products->quantity }}">
                            {{ $products->selling_price  *  $products->quantity }}$
                        </td>
    
                      <!--  <td><button type="button" class="btn btn-danger">Delete</button></td> -->
                        
                        
    </tr>
    
                 @endforeach
    
                 @foreach ($products2 as $products)
                 <td><a href="{{ route('deletecart',$products->id) }}">Delete</a></td>
                 @endforeach 
    
            </table>
            
            <div>Total Price: {{ $total }}</div>
        </div>
     
    
    
        <div align="center" style="padding: 10px">
            <button class="btn btn-primary" id="order" type="button">Order Now </button>
        </div>
    
        <div id="appear" align="center" style="padding:30px; display: none;">
            <div style="padding: 10px">
                <label for="Name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name">
            </div>
            <div style="padding: 10px">
                <label for="phone">phone</label>
                <input type="text" name="phone" id="phone" placeholder="phone">
            </div>
            <div style="padding: 10px">
                <label for="Addresse">addresse</label>
                <input type="text" name="addresse" id="addresse" placeholder="Addresse">
            </div>
    
            <div style="padding: 10px">
             
                <input class="btn btn-success" type="submit"  value="Confirm">
                <input id="close" class="btn btn-danger" type="submit"  value="Close">
            </div>
        </div>
        
    
    </form>
</div>
  @include('assets.script')
  
  <script>
    $('#order').click(
  function()
{
  $('#appear').show();
});


$('#close').click(
  function()
{
  $('#appear').hide();
});

</script>
</body>
</html>