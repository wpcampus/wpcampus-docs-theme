/**
 * File search.js.
 *
 * Handles toggling the search form in the header.
 */

// Initiate the menus when the DOM loads.
document.addEventListener( 'DOMContentLoaded', function() {
	initMainSearch();
});

function initMainSearch() {
	var siteSearch = document.querySelector( '.site-search' );

	// Toggle search when we hit the search button.
	document.querySelectorAll( '.search-toggle' ).forEach( function( item ) {
		item.addEventListener( 'click', function( e ) {
			toggleSearch( item.classList.contains( 'search-force' ) );
		});
	});

	// Toggle search when we hit cancel.
	siteSearch.querySelector( '.search-cancel' ).addEventListener( 'click', function( e ) {
		e.preventDefault();
		toggleSearch();
		return false;
    });

	// Submit form on enter in search field.
    siteSearch.querySelector( '.search-field' ).addEventListener( 'keydown', function( e ) {
		if ( 13 == e.keyCode ) {
			e.preventDefault();
			if ( '' !== this.value ) {
				siteSearch.querySelector( '.search-form' ).submit();
			}
		}
    });
}

function toggleSearch( forceOpen ) {
	var siteHeader = document.querySelector( '.site-header' ),
		searchOpenClass = 'search-open';
	if ( ! forceOpen && siteHeader.classList.contains( searchOpenClass ) ) {
		siteHeader.classList.remove( searchOpenClass );
		siteHeader.querySelector( '.search-toggle' ).focus();
	} else {
		siteHeader.classList.add( searchOpenClass );
		siteHeader.querySelector( '.search-field' ).focus();
	}
}
