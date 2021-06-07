/* eslint-disable vars-on-top */
jQuery( document ).ready( function( $ ) { //no conflict
	$( 'input, textarea' ).each( function() {
		if ( 0 != $( this ).val().length ) { //In case there is a preloaded value

			$( this ).parent().siblings( 'label' ).addClass( 'move' );
		} else {
			$( this ).parent().siblings( 'label' ).removeClass( 'move' );
		}
	});
	$( 'input, textarea' ).focus( function() { //On focus move the label

		$( this ).parent().siblings( 'label' ).addClass( 'move' );
	});
	$( 'input, textarea' ).focusout( function() {

		//On focusout check if there is any value, else remove the move class.
		if ( 0 == $( this ).val().length ) {
			$( this ).parent().siblings( 'label' ).removeClass( 'move' );
		}
	});
	$( '.hamburger' ).click( function() {
		$( this ).toggleClass( 'is-active' );
		$( '#mobile_menu, #mobile' ).toggleClass( 'open' );
	});
	$( '#mobile_menu a' ).click( function() {
		$( '#mobile_menu, #mobile' ).removeClass( 'open' );
		$( '.hamburger' ).removeClass( 'is-active' );
	});

	var labelID;
	$( 'label' ).click( function() {
		labelID = $( this ).attr( 'for' );
		$( '#' + labelID ).trigger( 'click' );
	});

	var distance = $( 'div' ).offset().top,
		$window = $( window );

	$window.scroll( function() {
		if ($(window).scrollTop() >= 100) {
			$('.navbar').attr('id','navbar');
	}
	else {
			$('.navbar').removeAttr('id');

	}
	if ($(window).scrollTop() >= 30) {
		$('.navbarV2').attr('id','navbarV2');
}
else {
		$('.navbarV2').removeAttr('id');

}
	});
	var prevScrollpos = window.pageYOffset;
	var prevScrollposV2 = window.pageYOffset;
	window.onscroll = function() {

		var currentScrollpos = window.pageYOffset;
		var currentScrollposV2 = window.pageYOffset;

		if ( prevScrollpos > currentScrollpos ) {
			document.getElementById( 'navbar' ).style.top = '0px';
		} else {
			document.getElementById( 'navbar' ).style.top = '-100px';
		}
		if ( prevScrollposV2 > currentScrollposV2 ) {
			document.getElementById( 'navbarV2' ).style.top = '0px';
		} else {
			document.getElementById( 'navbarV2' ).style.top = '-100px';
		}

		prevScrollpos = currentScrollpos;
		prevScrollposV2 = currentScrollposV2;


	};


	// Example for automatically closing lightcase after five seconds using a hook function
	$( '#foo' ).lightcase({
		onFinish: {
			autoClose: function() {
				setTimeout( function() {
					lightcase.close();
				}, 5000 );
			}
		}
	});
});
