@extends('layout')
@section('content')
<h2 class="title text-center">Features Items</h2>
<?php foreach( $product_by_category as $v_category_by_product){?>
    <div class="col-sm-3 ab">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center ">
                         <a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}">
                            <div class="zoomhover"><img   src="{{URL::to($v_category_by_product->product_image)}}" style="height: 300px;" alt="" /></a>
                            </div>
                       
                        <h2>{{$v_category_by_product->product_price}}Tk</h2>
                        <p>{{$v_category_by_product->product_name}}</p>
                        
                    </div>
                    
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li> -->
                    
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
  
    <!--features_items-->







@endsection