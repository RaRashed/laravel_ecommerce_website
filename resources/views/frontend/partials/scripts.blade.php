@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	     
 @endpush

@stack('scripts')





<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
{{-- 
<script>
         jQuery(document).ready(function(){
            jQuery('#button').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               
       $.post( "http://localhost:8000/carts/store",
        {
         product_id: product_id 
        })
      .done(function( data ) {
        data =JSON.parse(data);
        console.log(data);
      });
    
               });
            });
</script>



	
  {{-- <script>
           
       $.ajaxSetup({
         headers: {
           'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
      });
    
       function addToCart(product_id){
       $.post( "http://localhost:8000/carts/store",
        {
         product_id: product_id 
        })
      .done(function( data ) {
        alert( "Data Loaded: " + data );
      });
    }
    
    </script> --}}
