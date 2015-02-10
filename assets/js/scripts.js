$(document).ready(function() {
	var page = '';
	
	var url_page = getUrlParameter("page"); 
	var i = $(".bg").html();

	

	$("<img src='"+i+"' alt='Welcome page background' />").load(function() { 
			$.get( "file_get_content.php?page="+url_page, function( data ) {	
				if(url_page=="home"){

				}else{		
					$(".demo").css({
					"background":"url('"+i+"') no-repeat center center fixed", 
					"background-repeat":"no-repeat", 
					"background-size":"cover", 
					"-webkit-background-size":"cover", 
					"-moz-background-size":"cover", 
					"-o-background-size":"cover", 
					"background-position":"0px 80px"
					});
					$("body").addClass("lines");
				} 
				$('#demo-content').html(data);
			});	
		}).error(function() { 
	});
	
	
	
	
});

function getNewUrl(u){
	var i = $(".bg").html();
	$.get( "file_get_content.php?page="+u, function( data ) {	
		if(u=="home"){
			$(".demo").css({
			"background":""
			});
			$("body").removeClass("lines");
		}else{		
			$(".demo").css({
			"background":"url('"+i+"') no-repeat center center fixed", 
			"background-repeat":"no-repeat", 
			"background-size":"cover", 
			"-webkit-background-size":"cover", 
			"-moz-background-size":"cover", 
			"-o-background-size":"cover", 
			"background-position":"0px 80px"
			});
			$("body").addClass("lines");
		} 
		$('#demo-content').html(data);
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