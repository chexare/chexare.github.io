
			$(document).ready(function(){
			    $('#header').load('header.html',function(){
			    	var upper_nav_links = [];
			    	var upper_nav_links = $(".main_nav_opt");
			    	for (var i = 0; i < upper_nav_links.length; i++) {
		                var file = upper_nav_links[i];
		                $("#navPanel").children("nav").append('<a class="link depth-0" href="'+file.getAttribute("href")+'" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">'+file.innerHTML+'</a>');
		            };
			    });
			    
			});
		