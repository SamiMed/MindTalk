function autoType(elementClass, typingSpeed){
	var thhis = $(elementClass);
	thhis.css({
	  "position": "relative",
	  "display": "inline-block"
	});
	thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
	thhis = thhis.find(".text-js");
	var text = thhis.text().trim().split('');
	var amntOfChars = text.length;
	var newString = "";
	thhis.text("|");
	setTimeout(function(){
	  thhis.css("opacity",1);
	  thhis.prev().removeAttr("style");
	  thhis.text("");
	  for(var i = 0; i < amntOfChars; i++){
		(function(i,char){
		  setTimeout(function() {        
			newString += char;
			thhis.text(newString);
		  },i*typingSpeed);
		})(i+1,text[i]);
	  }
	},1500);
  }
  
  $(document).ready(function(){
	// Now to start autoTyping just call the autoType function with the 
	// class of outer div
	// The second paramter is the speed between each letter is typed.   
	autoType(".type-js",60);
  });



(function ($) {

	// Breakpoints.
	skel.breakpoints({
		xlarge: '(max-width: 1680px)',
		large: '(max-width: 1280px)',
		medium: '(max-width: 980px)',
		small: '(max-width: 736px)',
		xsmall: '(max-width: 480px)'
	});

	$(function () {

		var $window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
		$body.addClass('is-loading');

		$window.on('load', function () {
			window.setTimeout(function () {
				$body.removeClass('is-loading');
			}, 100);
		});

		// Prioritize "important" elements on medium.
		skel.on('+medium -medium', function () {
			$.prioritize(
				'.important\\28 medium\\29',
				skel.breakpoint('medium').active
			);
		});

		// Off-Canvas Navigation.

		// Navigation Panel.
		$(
			'<div id="navPanel">' +
			$('#nav').html() +
			'<a href="#navPanel" class="close"></a>' +
			'</div>'
		)
			.appendTo($body)
			.panel({
				delay: 500,
				hideOnClick: true,
				hideOnSwipe: true,
				resetScroll: true,
				resetForms: true,
				side: 'left'
			});

		// Fix: Remove transitions on WP<10 (poor/buggy performance).
		if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
			$('#navPanel')
				.css('transition', 'none');

	});

})(jQuery);




(function ($) {
    "use strict";



  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);



$(document).ready(function(){
	$("a").on('click', function(event) {
	  if (this.hash !== "") {
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
		  scrollTop: $(hash).offset().top
		}, 800, function(){
		  window.location.hash = hash;
		});
	  } 
	});
  });