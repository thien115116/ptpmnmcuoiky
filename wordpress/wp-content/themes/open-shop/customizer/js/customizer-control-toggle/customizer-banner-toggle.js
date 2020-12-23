/*************************************/
// Banner Hide N Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
OPNCustomizerToggles ['open_shop_banner_layout'] = [
		     

		     {
				controls: [    
				'open_shop_bnr_1_img',
				'open_shop_bnr_1_url',
				'open_shop_bnr_2_img',
				'open_shop_bnr_2_url',
				'open_shop_bnr_3_img',
				'open_shop_bnr_3_url',
				'open_shop_bnr_4_img',
				'open_shop_bnr_4_url',
				'open_shop_bnr_5_img',
				'open_shop_bnr_5_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'open_shop_bnr_1_img',
				'open_shop_bnr_1_url',
				'open_shop_bnr_2_img',
				'open_shop_bnr_2_url',
				'open_shop_bnr_3_img',
				'open_shop_bnr_3_url',
				'open_shop_bnr_4_img',
				'open_shop_bnr_4_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-five' ||  layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
		    {
				controls: [    
				'open_shop_bnr_1_img',
				'open_shop_bnr_1_url',
				'open_shop_bnr_2_img',
				'open_shop_bnr_2_url',
				'open_shop_bnr_3_img',
				'open_shop_bnr_3_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'open_shop_bnr_1_img',
				'open_shop_bnr_1_url',
				'open_shop_bnr_2_img',
				'open_shop_bnr_2_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'open_shop_bnr_1_img',
				'open_shop_bnr_1_url',	
				],
				callback: function(layout){
					if(layout=='bnr-one' || layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five'){
					return true;
					}else{
					return false;	
					}
				}
			},	
				
		];	
	});
})( jQuery );