jQuery(document).ready(function() {
    jQuery('#myTable').DataTable( {
		"processing" : true,	
        "ajax": {
             "url": "https://api.myjson.com/bins/14t4g",
            dataSrc : ''
         },
        "columns": [
            { "data": "id" },
			{ "data": "name" }
        ]
    } );
} );