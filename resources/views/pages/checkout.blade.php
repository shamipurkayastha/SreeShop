@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
		<div class="register-req">
				<p>Please fillup this from. Shree Online Shop always with you</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill Details</p>
							<div class="form-one">
								<form action="{{url('/save_shipping_details')}}" method="post">
									{{csrf_field()}}
								<input type="text" name="shipping_email" placeholder="Email*">
							  <input type="text" name="shipping_first_name" placeholder="First Name *">
							    <input type="text" name="shipping_last_name" placeholder="Last Name *">
								<input type="text" name="shipping_address" placeholder="Address *">
					 <input type="text" name="shipping_mobile_number" placeholder="Mobile Number *">
								<input type="text" name="shipping_city" placeholder="City *">
									<input type="submit" class="btn btn-default" value="Done">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->




@endsection