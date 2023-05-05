<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            @foreach ($product as $prod)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{ url('product_details',$prod->id) }}" class="option1">
                           Product Details 
                           </a>
                           <a href="{{ url('add_cart',$prod->id) }}" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                     <img src="product1/{{$prod->image}}" alt="{{$prod->image}}">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$prod->title}}
                        </h5>
                        <p class="dis-p-cl"><b>&#8377;{{$prod->discunt_price}}</b> <br><span class="dis-prs"> &#8377;{{$prod->price}}</span><br><span class="dis-pr"> &#8377;{{$prod->price-$prod->discunt_price}} OFF</span><p>
                        
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
            <span>
               {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
               </span>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>