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
					//be jaie in chi bezaram
					document.getElementsByClassName('contact-us-form').item(0).getElementsByTagName('table').item(0).getElementsByTagName('tr').item(i).getElementsByTagName('td').item(0).style.color='red';
					//be jaie in chi bezaram
				}
				
				
			}
		}
		
	}
	
	
	
	
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	function hide_send_alert() {
		$("div.send-alert").css("display","none");
		alert("for test");
		
	}
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	//kar nemikoneeeeeeeeeeeeeeeeeee     in function toie onclick input[reset] hast vali kar nemikone
	
}