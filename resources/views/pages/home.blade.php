@extends('layout')
@section('content')


	
<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 pr-1 aside-stretch">
    				<form action="#" class="booking-form">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-in Date</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-out Date</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">Room Category</label>
			      					<div class="form-field">
									  
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control input-sm m-bot15">
											@foreach($category as $key => $cate)								                												
												<option value=""><a href="{{URL::to('/category-room/'.$cate->category_id)}}">{{$cate->category_name}}</a></option>									                              	                	                  		                			                     
											@endforeach
                                            </select>																				
                                        </div>										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">District</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control">
											@foreach($district as $key => $dist)
			                    	            <option value=""><a href="{{URL::to('/district-room/'.$dist->district_id)}}">{{$dist->district_name}}</a></option>
											@endforeach
			                                </select>
											
			                            </div>
										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <a href="#" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>
      	

    <section class="ftco-section bg-light ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Room Management</span>
            <h2 class="mb-4">Room Management Application</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap">
    					<div class="img d-flex align-items-center" style="background: url({{('public/fontend/images/image_5.jpg')}});">
    						<div class="text text-center px-4 py-4">
    							<h2>Welcome to <a href="index.html">Room</a> Management</h2>
    							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    						</div>
    					</div>
    				</div>
    			</div>
				@foreach($all_room as $key => $room)
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<img style="height:360px" src="{{URL::to('public/upload/room/'.$room->room_image)}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p>{{$room->room_name}}</p>
    							<p class="mb-0"><span class="price mr-1">{{number_format($room->room_price)}}</span> <span class="per">/đ</span></p>
	    						<h3 class="mb-3"><a href="rooms.html"></a></h3>
	    						<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
                 @endforeach
				 
    		</div>
    	</div>
    </section>


    

@endsection