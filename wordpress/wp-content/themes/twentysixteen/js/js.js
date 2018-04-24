jQuery(document).ready(function() {
    jQuery('#myTable').DataTable( {
		"processing" : true,	
        "ajax": {
             "url": "http://sede.fg.ull.es/opendata/api/cursoects",
            dataSrc : ''
         },
        "columns": [
            { "data": "ID" },
			{ "data": "Titulo" }
        ]
    } );
} );