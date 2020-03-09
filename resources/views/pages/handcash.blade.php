@extends('layout')
@section('content')

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<p class="alert-success">
						<?php
						$message=Session::get('message');
						if($message)
						{
							echo $message;
							Session::put('message',null);
						}

						?>
											
					</p>
					<div class="login-form" style=" padding: 25px; height: 450px; width: 450px; border-radius: 3px; border-style: outset; background-color: #3A9D64; text-align: center; margin-left: 200px;"><!--login form-->
						<h2 style="line-height: 35px; color: #17202A "><b>Congratulations! your order successfully Submitted.</b> <br><b>
						  Please, pay 25% amount of your total bill to confirm your order.</b><br><b>
						  Finally, Send a sms with your transaction id Or Call us.</b><br>
						  
						  <p style="color: #B40404 ;"><b>bKash personal-01709054840.<br>
						  ROCKET Personal- 017090548407.</b><br></p>
					
					</h2>
						<h3 style="line-height: 35px;color: #8C0C0C  ">We will contact as soon as possible</h3> 
					</div><!--/login form--><!--/login form-->
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	


@endsection