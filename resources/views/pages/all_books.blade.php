@extends('layout')
@section('content')

<h2 class="title text-center">FEATURES PRODUCTS</h2>
<?php foreach( $all_published_product as $v_published_product){?>
    <div class="col-sm-3 ab">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center ">
                       <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}">
                            <div class="zoomhover"><img   src="{{URL::to($v_published_product->product_image)}}" style="height: 300px;" alt="" />
                                </div>
                            </a>
                        <!--<a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
                    </div>
                  <div class="">
                        <div class=>
                            <h2 style="font-size: 150%;text-align: center;color:#F7E001;">{{$v_published_product->product_price}}BDT</h2>
                            <p style="text-align: center;">{{$v_published_product->product_name}}</p>
                           
                        </div>
                    </div> 
            </div>
           <!-- <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_published_product->manufacture_id)}}"><i class="fa fa-plus-square"></i>{{$v_published_product->manufacture_name}}</a></li>
                    <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                </ul>
            </div>-->
        </div>
    </div>
    <?php } ?>  
    <!--features_items-->
</div>








@endsection