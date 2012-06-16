window.onload=function(){

	var myform=document.forms.item(0);
	
	myform.onsubmit=function(){
		var t=true;
		for(i=0;i<myform.elements.length;i++){
			
			if(myform.elements.item(i).className!='ok'){
				
				alert("Do not forget "+myform.elements.item(i).name);
				t=false;	
			}
		}
		return t;
	}	
	
	
	for(i=0;i<myform.elements.length;i++){
		
		if(myform.elements.item(i).type=='text' || myform.elements.item(i).type=='textarea'){
		
			myform.elements.item(i).onblur=function(){
				if(this.value!=''){
			
					this.className='ok';	
					
				}
				else{
					this.className='not-ok';
					document.getElementsByClassName('contact-us-form').item(0).getElementsByTagName('table').item(0).getElementsByTagName('tr').item(i).getElementsByTagName('td').item(0).style.color='red';
				}
				
				
			}
		}
		
	}
	
	function hide_send_alert() {
		$("div.send-alert").css("display","none");
		alert("for test");
		
	}	
}




$(function(){
		$('.hide-nav').click(function(){
		$('.nav').stop().animate({'top':'-400px'},700,null,function(){
			$('.hide-nav').click(function(){
					if($('.nav').css('top')=='-400px'){
						$('.nav').stop().animate({'top':'0px'},700)
					}
			});
			});
		
	});
		
	
})