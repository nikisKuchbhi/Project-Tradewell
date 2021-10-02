@extends('admin.layout.app')

@section ('content')
<div class="row">
  
<div class="col-md-3"></div>
		 <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ __('messages.Add Offer Amount')}}</h4>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  <form class="forms-sample" action="{{route('offer_amount_add')}}" method="post" enctype="multipart/form-data">
                     {{csrf_field()}}
                     @if (count($errors) > 0)
                    @if($errors->any())
                   <div class="alert alert-primary" role="alert">
                  <strong>SUCCESS : </strong>{{$errors->first()}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  </div>
                  @endif
                 @endif
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Amount')}}</label>
                      <input type="number" class="form-control" name="amount"  id="exampleInputName1" placeholder="Add Amount">
                    </div>
                    
                    <div class="form-group">
                      <label>{{ __('messages.image')}}</label>
                      <div class="input-group col-xs-12">
                        <input type="file" name="city_image" class="file-upload-default">
                      </div>
                    </div>
                    
                      <div class="form-group">
                      <label for="cod">{{ __('messages.Discount Value')}}</label>
                      <select class="form-control" name="discount_type">
                          <option value="0">---Select---</option>
                          <option value="percentage">{{ __('messages.Precentage')}}</option>
                          <option value="price">{{ __('messages.Price')}}</option>
                      </select><br>
                      
                      <input type="text" class="form-control" id="exampleInputName1" name="offer_discount" placeholder="{{ __('messages.Amount')}}">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Maximum Offer')}}</label>
                      <input type="number" class="form-control" name="max_offer"  id="exampleInputName1" placeholder="{{ __('messages.Add Amount')}}">
                    </div>
                  
                  
                    <button type="submit" class="btn btn-success mr-2">{{ __('messages.Add')}}</button>
                   
                  </form>
                </div>
              </div>
            </div>
  <div class="col-md-3"></div>

</div>
</div>
@endsection