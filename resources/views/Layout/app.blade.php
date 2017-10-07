<!DOCTYPE html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ko</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Google Webfonts -->
        <link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
				<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- Style Sheets-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" >
        <link href='' rel='stylesheet' type='text/css'>
	</head>
    <body ng-app="myapp">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="mobile.html">Mobile</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
				<!-- Angular Js -->
				<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.1/angular-animate.js"></script>
				<script src = '{% static "js/ngMessages.js" %}'></script>
				<script src = '{% static "js/ngAutocomplete.js" %}'></script>

				<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB9wi2d0r__Wgv9PECtIRgcrTsJ8Jlgz60&libraries=places&sensor=false"></script>
				<script>
					var myApp = angular.module("myapp",['ngMessages','ngAutocomplete','ngAnimate']);
					myApp.config(function($interpolateProvider) {
						$interpolateProvider.startSymbol('[[');
						$interpolateProvider.endSymbol(']]');
					});

				  myApp.controller('ngCtrl', ['$scope', function($scope) {
				    $scope.address = {

				    };
						$scope.change = function() {

							var object_var = $scope.address.formattedAddress;
							var input_var = $('#addr_auto');

							if ((object_var === undefined) && input_var.val() ) {
								$scope.hasData = true;
							}
							else{
								$scope.hasData = false;
							}

						}
				  }]);


				</script>
        <!-- jQuery -->
        <script src="{% static "js/jquery.min.js" %}"></script>
        <!-- Materialize JS -->
        <script src="{% static "js/materialize.js" %}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                var yesterday = new Date((new Date()).valueOf()-1000*60*60*24);
                $(".button-collapse").sideNav();
                $('.modal').modal({
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .5, // Opacity of modal background
                    inDuration: 300, // Transition in duration
                    outDuration: 200, // Transition out duration
                    startingTop: '4%', // Starting top style attribute
                    endingTop: '10%', // Ending top style attribute
                    ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    },
                    complete: function() { } // Callback for Modal close
                });
                $('.datepicker').pickadate({
                    format: 'dd-mm-yyyy',
                    today: 'Today',
                    clear: 'Clear',
                    close: 'Ok',
                    closeOnSelect: true, // Close upon selecting a date,
                    disable:[
                        {from:[0,0,0,], to: yesterday}
                    ],
                    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    showMonthsShort: true,
                });
            })
        </script>
    </body>
</html>
