$(function(){
	function slideshow(){
	$('.img4').fadeOut(2800,null,function(){
			$('.img3').fadeOut(2800,null,function(){
				$('.img2').fadeOut(2800,null,function(){
					$('.img1').fadeIn(2800,null,function(){
						$('.img2').fadeIn(2800,null,function(){
							$('.img3').fadeIn(2800,null,function(){
								$('.img4').fadeIn(2800,null,function(){
									$('.img4').fadeOut(2800)
								})
							})
						})
					})
				})	
			})
		})
	
	/*	$('.img4').animate({opacity:0},1000,null,function(){
		$('.img3').animate({opacity:0},1000,null,function(){
			$('.img2').animate({opacity:0},1000,null,function(){
				$('.img1').animate({opacity:0},1000,null,function(){
					$('.img2').animate({opacity:1},1000,null,function(){
						$('.img3').animate({opacity:1},1000,null,function(){
							$('.img4').animate({opacity:1},1000,null,function(){
								$('.img1').animate({opacity:1},1000)
							})
						})
					})
				})
			})
		})
	})*/
	}
	//slideshow()
	setInterval(slideshow,1000);
	
});