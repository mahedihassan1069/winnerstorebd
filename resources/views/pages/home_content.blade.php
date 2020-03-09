@extends('layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="{{asset("frontend/images/slide-photo/slider7.jpg")}}" style="width:100%;">
            </div>

            <div class="item">
            <img src="{{asset("frontend/images/slide-photo/slider4.jpg")}}" style="width:100%">
            </div>

            <div class="item">
            <img src="{{asset("frontend/images/slide-photo/slider5.jpg")}}" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<h2 class="title text-center">Features Products</h2>
<?php foreach( $all_published_product as $v_published_product){?>
    <div class="col-sm-3 ab">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center ">
                        
                        <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}">
                            <div class="zoomhover"><img   src="{{URL::to($v_published_product->product_image)}}" style="height: 300px;" alt="" /></a>
                        </div>
                        <h2>{{$v_published_product->product_price}} BDT</h2>
                        <p>{{$v_published_product->product_name}}</p>
                        <!--<a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
                    </div>
                                      <!-- <div class="product-overlay">
                                                              <div class="overlay-content">
                                                                  <h2>{{$v_published_product->product_price}}BDT</h2>
                                                                  <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><p>{{$v_published_product->product_name}}</p></a>
                                                                  <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                              </div>
                                                          </div>  -->
            </div>
           <!--  <div class="choose">
               <ul class="nav nav-pills nav-justified">
                   <li><a href="{{URL::to('/product_by_manufacture/'.$v_published_product->manufacture_id)}}"><i class="fa fa-plus-square"></i>{{$v_published_product->manufacture_name}}</a></li>
                   <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
               </ul>
           </div> -->
        </div>
    </div>
    <?php } ?>  
    <!--features_items-->
</div>








@endsection