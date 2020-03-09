@extends('layout')
@section('content')


<section id="cart_items">
	<p class="alert-success">

							<?php
							$message=Session::get('message');
							if ($message){

											echo $message;
											Session::put('message',null);
								
									}

							?>
							
							
						</p>
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="http://127.0.0.1:8000/books">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
		</div>
	</section>

	<form action="{{url('/add-details-cart')}}" method="post">
		{{csrf_field()}}
	    <div class="form-group">
	      <label class="control-label" for="typeahead">customer name: </label>
	     <input type="text" class="input-xlarg" name="customer_name"required="">
	    </div>
	    <div class="form-group">
	      <label class="control-label" for="typeahead">customer number: </label>
	     <input type="text" class="input-xlarg" name="customer_number"required="">
	    </div>
	    <div class="form-group">
	      <label for="email">Description:</label>
	      <textarea rows="10" class="form-control" id="description" placeholder="Enter details" name="description" style="text-align: left;"required="">
	      </textarea>
	    </div>
	    <div class="form-group">
	      
	    </div>
	    <button type="submit"  class="btn btn-default">Submit</button>
	    <h1>  <?php $rowId ?> </h1>
  </form>


@endsection