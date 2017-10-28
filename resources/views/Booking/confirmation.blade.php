@extends("Layout.app")

@section('content')

@if (isset($house))

<div class="col s12 house-image-s">
      <img src="https://cdn.houseplans.com/product/o2d2ui14afb1sov3cnslpummre/w560x373.jpg?v=15" alt="" >
</div>

<div class="container" ng-controller="ngCtrl">

  <div class="row">
    <div class='col l6 s12' >
      <h5>Enter Your Personal Details</h5>
      <form action="" method="POST" class="col s12">
        {{ csrf_field() }}
        <div class="row">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="" name="f_name" requried >
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="" name="l_name" required >
            <label for="last_name">Last Name</label>
          </div>
        </div>  

        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="" name="email" requried >
            <label for="email">Email</label>
          </div>
        </div> 

        <div class="row">
          <div class="input-field col s12">
            <input id="phone" type="text" class="" name="phone" requried >
            <label for="phone">Phone</label>
          </div>
        </div> 

        <!-- address form -->
        <div class="row">
          <div class="input-field col s12">
            <input type="text" ng-autocomplete details='address' ng-model="address.formattedAddress"  id="addr_auto" ng-change="change()" placeholder="Enter Your Address" >

          </div>
        </div>

        <!-- <div>[[address | json]]</div> -->
        <div ng-show="hasData">
          <div class="row">
            <div class="input-field col s6" >
                <input type="text" id="unit" name="unit" add-data-ng-model="address.subpremise" placeholder="" value="[[ address.subpremise ]]">
                <label for="unit">Unit</label>
               
            </div>
         
            <div class="input-field col s6">
                <input type="text" id="street_number" name="street_number" add-data-ng-model="address.street_number" placeholder="" value="[[ address.street_number ]]">
                <label for="street_number">Street Number</label>
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
                <input type="text" id="street" name="street" add-data-ng-model="address.route" placeholder="" value="[[address.route]]">
                <label for="street">Street Number</label>
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
                <input type="text" id="suburb" name="suburb" add-data-ng-model="address.locality"  placeholder="" value="[[ address.locality ]]">
                <label for="suburb">Suburb</label>
              
            </div>

            <div class="input-field col s6">
                <input type="text" id="state" name="state" add-data-ng-model="address.administrative_area_level_1" placeholder="" value="[[ address.administrative_area_level_1 ]]">
                <label for="state">State</label>
                
            </div>
          </div>

          <div class="row">
            <div class="input-field col s7">
                <input type="text" id="country" name="country" add-data-ng-model="address.country" placeholder="" value="[[address.country]]">
                <label for="country">Country</label>
              
            </div>

            <div class="input-field col s5">
                <input type="text" id="postal_code" name="postal_code" add-data-ng-model="address.postal_code" placeholder="" value="[[address.postal_code]]">
                <label for="postal_code">Postal Code</label>
     
            </div>
          </div>
        </div>


        

        <!-- end address form -->


        <div class="input-field col s12">
            <input type="submit" class="btn" value="Next" />
        </div>
      </div>
    </form>
    </div>


    <div class="col l5 z-depth-3 offset-l1">
      <div class="col s12 house-info">
          <h5 class="house-title s12 left-align">{{ $house->name }}</h5>
          <span class="house-address">{{ $house->address }}</span>
          <div class="row house-title-under">
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('/icons/man.svg') }}" alt="Max Guests" width="25" height="25" />
                  {{ $house->max_guests }}
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('/icons/bed.svg') }}" alt="Max Guests" width="25" height="25" />
                  3
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('/icons/shower.svg') }}" alt="Max Guests" width="25" height="25" />
                  {{ $house->bathrooms }}
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('/icons/garage.svg') }}" alt="Max Guests" width="25" height="25" />
                  {{ $house->max_parking  }}
              </div>
          </div>
      </div>

      <div class="col s12 house-info">
          <div class="row house-title-under">
              <div class="col s5">
                  <span class="check-date-label large-font grey-font">Check-In</span>
                  <span class="check-date-label ">{{ date_format($house->check_in, 'd-m-Y') }}</span>
              </div>
              <div class="col s2 num_of_nights center-align">
                  <div class="content">
                      <div class="emphasize s12"> {{ $house->days }} </div>

                      <span>
                        @if ($house->days > 1)
                          Nights
                        @else
                          Night
                        @endif
                      </span>
                  </div>
              </div>
              <div class="col s5">
                  <span class="check-date-label large-font grey-font right-align">Check-Out</span>
                  <span class="check-date-label right-align">{{ date_format($house->check_out, 'd-m-Y') }}</span>
              </div>
          </div>
      </div>

      <div class="col s12 house-info price-detail" ng-show="showDetails" >
          <div class="row house-title-under">
              <div class="col s6">
                  {{ sprintf("%01.2f", $house->rate) }}  x  {{ $house->days }} nights
              </div>
              <div class="col s6 right-align">
                  {{ sprintf("%01.2f", $house->total_amount) }}
              </div>
          </div>
      </div>

      <div class="col s12 house-info price-total" ng-click="showDetails = !showDetails">
          <div class="row house-title-under">
              <div class="col s6">
                  Total
              </div>
              <div class="col s6 right-align" >
                  {{ sprintf("%01.2f", $house->total_amount) }}
              </div>
          </div>
      </div>
    </div>
</div>
</div>
   
@endif
@endsection