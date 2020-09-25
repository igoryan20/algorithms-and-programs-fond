import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/autocomplete.js';

$( function() {
    $('#search').autocomplete({
        source: function ( request ) {
            $.ajax({
                url: "/?" + request.term,
                method: "GET",
                success: function(data) {
                    $('#search').html(data);
                }
            });
        }
    });
} );
