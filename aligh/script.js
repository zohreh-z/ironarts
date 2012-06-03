$(function(){
	function slideshow(){
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
	}
	slideshow();
  
	$('.about-li').click(function(){
		$('.bottom-background').css('display','block');
		$('body').css('overflow','auto');
		//$('.contact-us-form').animate({marginLeft:700},500);
		$('.about-content').animate({marginLeft:0},500);
	})

  
});