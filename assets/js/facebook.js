//FB.Canvas.scrollTo(0,0);

function Facebook(){
	var self= this;
	
	this.init= function(){
	
	};
	
	this.shareFriend= function(message, max, callback){
		console.log('shareFriend');
		FB.ui({ method: 'apprequests',message: message, max_recipients: max}, function(res){	
			console.log(res);
			if(res){
				$.post(
					base_url + 'fb/share',
					{
						token	: token,
						to 		: res.to
					},
					function(data){
						if (callback && typeof(callback) === "function") {  
							callback(data);  
						}  
					},'json'
				);
			}
		});		
	};
}
Facebook= new Facebook();