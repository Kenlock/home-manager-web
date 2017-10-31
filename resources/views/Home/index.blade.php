@extends('Layout.app')

@section('content')

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
		<div class="container">
        <br/>
        <h1 class="header center teal-text text-lighten-2"></h1>
        <div class="row center">
          <h5 class="header col s12 light">Yours Dreaming Destination</h5>
        </div>
        <div class="row center" >
			     <form class="form-inline" id="main-search-form" role="form" style="">
            <div class="form-group">
              <label class="sr-only" for="location">Location</label>
              <select name="location" id="location" class="form-control">
                <option value="0">Location</option>
                <option value="Sanctuary Cove">Sanctuary Cove</option>
              </select>
            </div>
            <div class="form-group">
              <label class="sr-only" for="type">Type</label>
              <select name="type" id="type" class="form-control">
                <option value="0">Type of Home</option>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
              </select>
            </div>

            <div class="form-group">
              <label class="sr-only" for="guest">Guest</label>
              <select name="guest" id="guest" class="form-control">
                <option value="0">Guests</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-warning">Search</button>
          </form>
        </div>
        <br/>
      </div>
    </div>
    <!--  -->
    <div class="parallax"><img src="https://www.goldcoastairport.com.au/gca-wp/wp-content/uploads/2016/10/gold-coast-hero-shot.jpg" alt="Unsplashed background img 1" style="display: block;transform: translate3d(-50%, 227px, 0px);"></div>
</div>

<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/58/e5/6d/sea-view-resort-spa-koh.jpg">
              <span class="card-title">House 1</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="{{ route('house.show', ['id' => 1]) }}">View Details</a>
            </div>
          </div>
        </div>
     
        

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/58/e5/6d/sea-view-resort-spa-koh.jpg">
              <span class="card-title">House 2</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="">This is a link</a>
            </div>
          </div>
        </div>
     

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/58/e5/6d/sea-view-resort-spa-koh.jpg">
              <span class="card-title">House 3</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
      </div>
 </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="https://st.hzcdn.com/fimgs/82f1f1c408921593_5036-w618-h399-b0-p0--midcentury-pool.jpg" alt="Unsplashed background img 2" style="display: block;transform: translate3d(-50%, 227px, 0px);"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="https://st.hzcdn.com/fimgs/82f1f1c408921593_5036-w618-h399-b0-p0--midcentury-pool.jpg" alt="Unsplashed background img 3" style="display: block;transform: translate3d(-50%, 227px, 0px);"></div>
  </div>



@endsection