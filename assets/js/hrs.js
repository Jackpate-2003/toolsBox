function include(link) {
	
	$(document).ready(function() {
    $('body').append($(`<script src="${link}"></script>`));
    });

}

const b = $( 'body' ).html().toString();

console.log('body', b);