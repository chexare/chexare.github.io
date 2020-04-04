
			$(document).ready(function(){
			    $(".hamburger_button").click(function(){
			    	$( ".sub_nav" ).toggle("ease");
			    });

			    $(".sub_nav_link").click(function(){
			    	$( ".sub_nav" ).toggle("ease");
			    });

			    $(".home_link").click(function(){
			    	if($( ".left_bio_container" ).css("display") == "block" ){
				    		
			    	}else{
			    		$( ".left_bio_container" ).toggle("ease",function(){			    		
				    	});
				    	$( ".left_memo_container" ).toggle("ease");
			    	}	
			    });

			    $(".memo_link").click(function(){
			    	if($( ".left_memo_container" ).css("display") == "block" ){
				    		
			    	}else{
			    		$( ".left_bio_container" ).toggle("ease",function(){			    		
				    	});
				    	$( ".left_memo_container" ).toggle("ease");
			    	}	
			    });
			    $(window).resize(function(){
			    	if($( window ).width() > 992 ){
			    		$('.left_memo_container').css({
					        'display': 'none'
					    });
					    $('.left_bio_container').css({
					        'display': 'block'
					    });
			    	}else{

			    	}	
			    });


			});
		

