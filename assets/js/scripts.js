$(document).ready(function() {
	var page = '';
	
	var url_page = getUrlParameter("page"); 
	var i = $(".bg").html();
	var i2 = $(".bgW").html();
	var iSplited = i2.split(",");	

	$("<img src='"+i+"' alt='Welcome page background' />","<img src='"+iSplited[0]+"' alt='Welcome page background' />", "<img src='assets/img/walpaperAfter.png' alt='Welcome page background' />" 
	).load(function() { 
			$.get( "file_get_content.php?page="+url_page, function( data ) { 	
				if(url_page!="home"){
					$("#supersized").css({"display":"none"});
				}else{
					$("#supersized").css({"display":"block"});
				}
				if(url_page!="works"){
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
					"background-position":"0px 0px"
					});
					$("body").addClass("lines");
				} 
				$('#demo-content').html(data);
			});	
		}).error(function() { 
	});
		//hovered


});

function getNewUrl(u){
	var i = $(".bg").html();
	var i2 = $(".bgW").html();
	var iSplited = i2.split(",");
	//$('#demo-content').html("<div class='loader'><img src='assets/img/loader.gif' alt='loader' align='center'></div>");
	$.get( "file_get_content.php?page="+u, function( data ) {	
		if(u!="home"){
			$("#supersized").css({"display":"none"});
		}else{
			$("#supersized").css({"display":"block"});
		}
		if(u!="works"){
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
			"background-position":"0px 0px"
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