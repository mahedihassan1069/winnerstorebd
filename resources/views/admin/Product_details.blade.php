@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
			<p class="alert-success">

							<?php
							$message=Session::get('message');
							if ($message){

											echo $message;
											Session::put('message',null);
								
									}

							?>
							
							
						</p>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>

							  <tr>

								  <th style="font-size: 150%">customer name</th>
								  <th style="font-size: 150%">customer number</th>				  
								  <th style="font-size: 150%">description</th>
							  </tr>
						  </thead> 

						  @foreach($all_products_details as $v_details) 
						  
						  <tbody>
							<tr>
								
								<td class="center">{{ $v_details->customer_name }}</td>
								<td class="center">{{ $v_details->customer_number }}</td>
								<td class="center">{{ $v_details->description }}</td>
							</tr>
						
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->















@endsection