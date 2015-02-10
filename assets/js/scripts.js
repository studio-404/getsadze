$(document).ready(function() {
	var page = '';
	
	var url_page = getUrlParameter("page"); 

	$.get( "file_get_content.php?page="+url_page, function( data ) {
		if( data != 1)
	   		$('#demo-content').html(data);
	});	
	
});

function getNewUrl(u){
	$.get( "file_get_content.php?page="+u, function( data ) {
		if( data != 1)
	   		$('#demo-content').html(data);
	   	else
	   		$('#demo-content').html('Page Not found !');
	});
}

// get url paramiter 
function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
} 