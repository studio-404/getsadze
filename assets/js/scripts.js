$(document).ready(function() {
	var page = '';
	
	var url_page = getUrlParameter("page"); 
	var i = $(".bg").html();
	var i2 = $(".bgW").html();
	var iSplited = i2.split(",");	

	if(url_page!="home"){
		$("#supersized").css({"display":"none"});
	}else{
		$("#supersized").css({"display":"block"});
		$('#demo-content').html(" ");
	}

	$("<img src='"+i+"' alt='Welcome page background' />","<img src='"+iSplited[0]+"' alt='Welcome page background' />", "<img src='assets/img/walpaperAfter.png' alt='Welcome page background' />" 
	).load(function() { 

			$.get( "file_get_content.php?page="+url_page, function( data ) { 	
				if(url_page!="home"){
					$("#supersized").css({"display":"none"});
				}else{
					$("#supersized").css({"display":"block"});
				}				
				$('#demo-content').html(data);



				if(url_page!="websites" &&  url_page!="identity" && url_page!="print" && url_page!="various" && url_page !="about"){
					$(".demo").css({
					"background":"none"
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



			});	


		}).error(function() { 
	}); 
});

function getNewUrl(urlget){
	var i = $(".bg").html();
	var i2 = $(".bgW").html();
	var iSplited = i2.split(",");
	$("body").removeClass("lines");
	$('#demo-content').html('<img src="assets/img/loader.gif" class="loader" />');
	if(urlget!="home"){
		$("#supersized").css({"display":"none"});
	}else{
		$("#supersized").css({"display":"block"});
	}
	$(".demo").css({
		"background":"none"
	});
	var url_page = getUrlParameter("page"); 
	//if(url_page!="home"){
		//$('#demo-content').html('<img src="assets/img/loader.gif" class="loader" />');
	//}
	
	$.get( "file_get_content.php?page="+urlget, function( data ) {	
		$('#demo-content').html(data);
		if(urlget!="websites" && urlget!="identity" && urlget!="print" && urlget!="various" && urlget!="about"){
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