@extends('Layout.app')

@section('content')

@if (isset($house) && $house != null)
<div class="col s12 house-image">
        <img src="https://cdn.houseplans.com/product/o2d2ui14afb1sov3cnslpummre/w560x373.jpg?v=15" alt="" >
</div>

<div class="container">
    <div class="row">

        <div class="l4 m12 col hide-on-small-only book_side z-depth-3 mg-bt-20" >
                <h5 class="modal-book-title ">
                    ${{ sprintf("%01.2f", $house->rate) }} <span style="font-weight: 300; font-size: 70%;">per night</span>
                </h5>
                <form class="col s12" id="book-now-m" action="{{ route('confirmation') }}" method="get">

                
                        <div class="input-field col s6 m6">
                            <input id="check-in" type="text" class="datepicker" name="check_in">
                            <label for="check-in">Check-In Date</label>
                        </div>
                        <div class="input-field col s6 m6">
                            <input id="check-out" type="text" class="datepicker" name="check_out">
                            <label for="check-out">Check-Out Date</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="house_id" type="hidden" value="{{ $house->id }}" name="house_id"/>
                            <button class="btn waves-effect waves-light btn-m-book">
                                Book Now
                            </button>
                        </div>
                    
                 </form>
            </div>

        <div class="col s12 m12 l8">
            <div class="col s12 house-info">
                <h4 class="house-title s12 left-align">{{ $house->name }}</h4>
                <span class="house-address">{{ $house->address }}</span>
            </div>

            <button data-target="modal1" class="btn modal-trigger waves-effect waves-light m-only" style="width:100px;">BOOK</button>



            <!-- The Space -->
            <div class="col s12 basic-info section scrollspy">
                <h5 class="info-title s12 left-align">The Space</h5>
                <div class="row">
                    <div class="col s5 m3 ">Accommodation</div>
                    <div class="col s7 m3 ">{{ $house->max_guests }}</div>
                    <div class="col s5 m3 ">Parking</div>
                    <div class="col s7 m3 ">{{ $house->max_parking }}</div>
                    <div class="col s5 m3 ">Bathroom</div>
                    <div class="col s7 m3 ">{{ $house->bathrooms }}</div>
                    <div class="col s5 m3 ">Bedroom</div>
                    <div class="col s7 m3 ">{{ sizeof($house->bedrooms) }}</div>
                    <div class="col s5 m3 ">Room Type</div>
                    <div class="col s7 m3 ">{{ $house->type }}</div>
                    <div class="col s5 m3 ">Area</div>
                    <div class="col s7 m3 ">{{ $house->area }}</div>
                </div>
            </div>

            <div class="col s12 house-desc section scrollspy">
                <h5 class="info-title s12 left-align">Description</h5>
                <div class="row">
                    <div class="col">
                        {{ $house->desc }}
                    </div>
                </div>
            </div>

            @if (isset($house->amenities) && sizeof($house->amenities) > 0)
            <!-- Amenities -->
            <div class="col s12 amenities-info section scrollspy">
                <h5 class="info-title s12 left-align">Amenities</h5>
                <div class="row">
                    @foreach($house->amenities as $amenity)
                    <div class="col s6 m4 l3">{{$amenity->name}}</div>

                    @endforeach
                </div>
            </div>
            @endif
            <!-- The Rules -->
            <div class="col s12 rule-info section scrollspy">
                <h5 class="info-title s12 left-align">Rules</h5>
                <div class="row inner-row">
                    <div class="col s5 m3 l2">Check-In</div>
                    <div class="col s7 m9 l10">02:00 pm</div>
                </div>
                <div class="row inner-row">
                    <div class="col s5 m3 l2">Check-Out</div>
                    <div class="col s7 m9 l10">10:00 am</div>
                </div>
                <div class="row inner-row">
                    <div class="col s5 m3 l2">Cancellation Policy</div>
                    <div class="col s7 m9 l10">asd ca dsf ewasdf wef qwf wfasdf ewf awef sadfw df ef asdf er afa sdf ercf wer thdgfh asefew fga dsfer g dsafg g </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

    <!-- Modal for Booking Form -->
    <div id="modal1" class="modal bottom-sheet">
    <div class="modal-header">
        <h5 class="modal-book-title ">
            Book at {{ $house->rate }} per night
        </h5>
    </div>
    <div class="modal-content">
         <form class="col s12 m6" id="book-now-m" action="{{ route('confirmation') }}" method="get">

            <div class="row">
                <div class="input-field col s6">
                    <input id="check-in" placeholder="dd-mm-yyyy" type="text" class="datepicker" name="check_in">
                    <label for="check-in">Check-In Date</label>
                </div>
                <div class="input-field col s6">
                    <input id="check-out" placeholder="dd-mm-yyyy" type="text" class="datepicker" name="check_out">
                    <label for="check-out">Check-Out Date</label>
                </div>
                <div class="input-field col s12">
                    <input id="house_id" type="hidden" value="{{ $house->id }}" name="house_id"/>
                    <button class="btn waves-effect waves-light btn-m-book">
                        Book Now
                    </button>
                </div>
            </div>
         </form>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
    </div>
@endif

@endsection