﻿//Document ready
$(document).ready(function() {

	/********************************
	    - Hide loader on mobile -
	********************************/
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$(".player").hide();
    	$(".player-controls").hide();
	}
	
	/************************
	    - Scroll reveal -
	************************/
   	window.sr = new scrollReveal({
	  	reset:true,
	  	move:"10px",
	  	mobile:false
	});
	/***********************
	    - Contact form -
	***********************/
    $('#submit').click(function() {   	
		//Validate and process form 
    	$("#ajax-contact-form").validate({             
			rules:{			
				name:{
					required:true,
				},
							
				email:{
					required:true,
					email:true,
				},
							
				message:{
					required:true,
				},
			},
			
			messages:{			
				name:{
					required:"<i class='fa fa-exclamation-triangle name'></i>",
				},
			
				email:{
					required:"<i class='fa fa-exclamation-triangle email'></i>",
					email:"<i class='fa fa-exclamation-triangle email'></i>",
				},
			
				message:{
					required:"<i class='fa fa-exclamation-triangle message'></i>",
				},
			
			},

            //Submit form
           	submitHandler:function(form) {
		 		//Create variables from the form
		 		var name = $('input#name').val(); 
		 		var email = $('input#email').val();  
		 		var message = $('textarea#message').val();

               	//Create variables that will be sent in a URL string to contact.php
              	var dataString = '&name='+name+'&email='+email+'&message='+message;
        		
				$.ajax({
                	type: "POST",
                   	url: "contact.php",
                    data: dataString,
                    success: function(data) {
                    	if(data==='ok') { 
							$("#ajax-contact-form").find('input[type=text], input[type=email], textarea').val(""); 
						} 
                        
						if(data=='ok') {
                        	result = '<div class="notification_ok"><i class="fa fa-check"></i> Your email was sent. Thanks!</div>';
                       	} else {
                        	result = data;
                        }
                        
						$('#note').html(result);
           			}                         
              	});
					  
				return false;
        	}
		});
    });

	/*************************
	    - Ajax mailchimp -
	*************************/
    $('#ajaxChimp').ajaxChimp({
      	language:'eng',
      	url:'http://xxx.xxx.list-manage.com/subscribe/post?u=xxx&id=xxx'
    });

    $.ajaxChimp.translations.eng = {
      	'submit':'Submitting...',
      	0:'<i class="fa fa-check"></i> We will be in touch soon!',
      	1:'<i class="fa fa-warning"></i> You must enter a valid e-mail address.',
      	2:'<i class="fa fa-warning"></i> E-mail address is not valid.',
      	3:'<i class="fa fa-warning"></i> E-mail address is not valid.',
      	4:'<i class="fa fa-warning"></i> E-mail address is not valid.',
      	5:'<i class="fa fa-warning"></i> E-mail address is not valid.'
    }
	
	/*************************
	    - Youtube player -
	*************************/
    $(".player").mb_YTPlayer();
    $('#play').on("click", function(){
    	$('.player').playYTP();
	});

  	$('#pause').on("click", function(){
    	$('.player').pauseYTP();
	});
});

/**********************
	- Window load -
**********************/
$(window).load(function() {
    $(".page-loader").delay(700).fadeOut("slow");
 
	setTimeout(function() {
		$(".logo").delay(1000).css({display: 'none'}).fadeIn(1000);
		$("h1").delay(1000).css({display: 'none'}).fadeIn(1000);
		$("p").delay(1000).css({display: 'none'}).fadeIn(1000);
		$(".countdown").delay(1000).css({display: 'none'}).fadeIn(1000);
		$(".mouse").delay(1000).css({display: 'none'}).fadeIn(1000);
    });
});

/**********************
	- Google Maps -
**********************/
function googleMaps() {
	//Variables
	var title = arrMap.title;
	var latitude = arrMap.latitude;
	var longitude = arrMap.longitude;
	var zoom = arrMap.zoom;
	
	//Marker icon
	var marker_url = arrMap.marker;
	
	//Main color
	var main_color = arrMap.color;
	
	//Saturation and brightness
	var saturation_value = -20;
	var brightness_value = 5;

	//Map style
	var style= [ 
		
	
	
	
		
	];
	
	//Set google map options
	var map_options = {
		center:new google.maps.LatLng(latitude, longitude),
		zoom:zoom,
		panControl:false,
		zoomControl:false,
		mapTypeControl:false,
		streetViewControl:false,
		mapTypeId:google.maps.MapTypeId.ROADMAP,
		scrollwheel:false,
		styles:style
	}
	
	//Inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);
 
	//Add a custom marker to the map        
	var marker = new google.maps.Marker({
		position:new google.maps.LatLng(latitude, longitude),
		map:map,
		title:title,
		visible:true,
		icon:marker_url
	});

	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center); 
	});

	//Add custom buttons for the zoom-in/zoom-out on the map
	if (arrMap.zoomControlDiv==undefined) {		
		function customZoomControl(controlDiv, map) {
			//Grap the zoom elements from the DOM and insert them in the map 
			var controlUIzoomIn = document.getElementById('zoom-in'),
			controlUIzoomOut = document.getElementById('zoom-out');
		  
			controlDiv.appendChild(controlUIzoomIn);
			controlDiv.appendChild(controlUIzoomOut);
	
			//Setup the click event listeners and zoom-in or out according to the clicked element
			google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
				map.setZoom(map.getZoom()+1);
			});
			
			google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
				map.setZoom(map.getZoom()-1);
			});
		}
	
		var zoomControlDiv = document.createElement('div');		
		var zoomControl = new customZoomControl(zoomControlDiv, map);
		arrMap.zoomControlDiv = zoomControlDiv;
	}
		
	//Insert the zoom div on the top left of the map
	map.controls[google.maps.ControlPosition.LEFT_TOP].push(arrMap.zoomControlDiv);
}

