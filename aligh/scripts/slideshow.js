$(function(){
	(slideshow=function (){
		$('.img4').fadeOut(4000,null,function(){
			$('.img3').fadeOut(4000,null,function(){
				$('.img2').fadeOut(4000,null,function(){
					$('.img1').fadeIn(4000,null,function(){
						$('.img2').fadeIn(4000,null,function(){
							$('.img3').fadeIn(4000,null,function(){
								$('.img4').fadeIn(4000,null,function(){
									slideshow();
								})
							})
						})
					})
				})  
			})
		})
	} )();
});
