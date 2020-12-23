( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['open_shop_top_slide_layout'] = [
		    {
				controls: [    
				'open_shop_lay2_adimg', 
				'open_shop_lay2_url',
				'open_shop_lay3_adimg',
				'open_shop_lay3_url',
				'open_shop_lay3_adimg2',
				'open_shop_lay3_2url',
				'open_shop_lay3_adimg3',
				'open_shop_lay3_3url',
				'open_shop_lay4_adimg1',
				'open_shop_lay4_url1',
				'open_shop_lay4_adimg2',
				'open_shop_lay4_url2',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-1'){
					return false;
					}
					return true;
				}
			},	
			{
				controls: [    
				'open_shop_lay2_adimg', 
				'open_shop_lay2_url',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'open_shop_lay3_adimg',
				'open_shop_lay3_url',
				'open_shop_lay3_adimg2',
				'open_shop_lay3_2url',
				'open_shop_lay3_adimg3',
				'open_shop_lay3_3url',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'open_shop_lay4_adimg1',
				'open_shop_lay4_url1',
				'open_shop_lay4_adimg2',
				'open_shop_lay4_url2',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'open_shop_top_slide_lay5_content',
				],
				callback: function(slideroptn){
			    if(slideroptn =='slide-layout-5'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'open_shop_top_slide_content',
				],
				callback: function(slideroptn){
			    if(slideroptn =='slide-layout-5'){
					return false;
					}
					return true;
				}
			},
			 
		];	
    });
})( jQuery );