@extends('pharmacy.layout.app')
<style>
sup {
    color:red;
    position: initial;
    font-size: 111%;
}
</style>
@section ('content')
<div class="content-wrapper">
          <div class="row">
		  <div class="col-md-2">
		  </div>
            
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ __('messages.Add_Deal_products')}}</h4>
                   @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-primary" role="alert">
                          {{$errors->first()}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                      @endif
                  @endif
                  <form class="forms-sample" action="{{route('pharmacyAddNewDealproduct')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                    <div class="form-group">
                          <label class="bmd-label-floating">{{ __('messages.Select_Product')}}</label>
                          <select name="variant_id" class="form-control">
                              <option disabled selected>{{ __('messages.Select_Product')}}</option>
                              @foreach($deal as $deals)
        		          	<option value="{{$deals->variant_id}}">{{$deals->product_name}} ({{$deals->quantity}}{{$deals->unit}})</option>
        		              @endforeach
                              
                          </select>
                        </div>

                   
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Deal_Price')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="deal_price" placeholder="{{ __('messages.Deal_Price')}}">
                    </div>  
                   
        
        
                    
                 
                    
                    <button type="submit" class="btn btn-success mr-2">{{ __('messages.Submit')}}</button>
                
                     <a href="{{route('pharmacydealroduct')}}" class="btn btn-light">{{ __('messages.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection