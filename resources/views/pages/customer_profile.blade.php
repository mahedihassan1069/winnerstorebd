@extends('layout')
@section('content')

    <section><!--form-->
        <div class="container">
            <div style="margin-left: 0px;">
                <img src="{{asset('image/default.png')}}" height="200px" width="200px">
                
                <p style="margin-top: 20px;">Name :<strong>{{ Session::get('customer_name')}}</strong> </p><br>
                <p>Email : <strong>{{Session::get('customer_email') }}</strong></p><br>
                <p>Phone Number : <strong>{{Session::get('mobile_number') }}</strong></p><br>
                
            </div>
        </div>
    </section><!--/form-->

@endsection