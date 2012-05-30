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
				}
				
				
			}
		}
		
	}
	
	
}