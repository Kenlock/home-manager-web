@extends("Layout.app")

@section('content')

@if (isset($house))

<div class="col s12 house-image-s">
      <img src="https://cdn.houseplans.com/product/o2d2ui14afb1sov3cnslpummre/w560x373.jpg?v=15" alt="" >
</div>

<div class="container" ng-controller="ngCtrl">

      <div class="col s12 house-info">
          <h5 class="house-title s12 left-align">{{ $house->name }}</h5>
          <span class="house-address">{{ $house->address }}</span>
          <div class="row house-title-under">
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('icons/man.svg') }}" alt="Max Guests" width="25" height="25" />
                  3
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('icons/bed.svg') }}" alt="Max Guests" width="25" height="25" />
                  3
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('icons/shower.svg') }}" alt="Max Guests" width="25" height="25" />
                  3
              </div>
              <div class="col s3 house-title-under-box">
                  <img class="float-left" src="{{ url('icons/garage.svg') }}" alt="Max Guests" width="25" height="25" />
                  3
              </div>
          </div>
      </div>

      <div class="col s12 house-info">
          <div class="row house-title-under">
              <div class="col s5">
                  <span class="check-date-label large-font grey-font">Arrive</span>
                  <span class="check-date-label ">{{ $house->check_in }}</span>
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
                  <span class="check-date-label large-font grey-font right-align">Leave</span>
                  <span class="check-date-label right-align">{{ $house->check_out }}</span>
              </div>
          </div>
      </div>

      <div class="col s12 house-info price-detail" ng-show="showDetails" >
          <div class="row house-title-under">
              <div class="col s6">
                  {{ $house->rate }}  x  {{ $house->days }} nights
              </div>
              <div class="col s6 right-align">
                  {{ $house->room_total }}
              </div>
          </div>
      </div>

      <div class="col s12 house-info price-total" ng-click="showDetails = !showDetails">
          <div class="row house-title-under">
              <div class="col s6">
                  Total
              </div>
              <div class="col s6 right-align" >
                  {{ $house->room_total }}
              </div>
          </div>
      </div>

</div>
        {{ $house->check_in }}
        {{ $house->check_out }}
        {{ $house->days }}
@endif
@endsection