/****************/
// Main header	
/****************/
( function( $ ) {
//**********************************/
// Main Header settings
//**********************************/
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['open_shop_main_header_option'] = [
		    {
				controls: [    
				'open_shop_main_hdr_btn_txt', 
				'open_shop_main_hdr_btn_lnk',
				'open_shop_main_hdr_calto_txt',
				'open_shop_main_hdr_calto_nub',
				'open_shop_main_hdr_calto_email',
				'open_shop_main_header_widget_redirect'
				],
				callback: function(headeroptn){
					if (headeroptn =='none'){
					return false;
					}
					return true;
				}
			},	
			 {
				controls: [    
				'open_shop_main_hdr_btn_txt', 
				'open_shop_main_hdr_btn_lnk',
				],
				callback: function(layout){
					if(layout=='button'){
					return true;
					}
					return false;
				}
			},
			 {
				controls: [    
				'open_shop_main_hdr_calto_txt',
				'open_shop_main_hdr_calto_nub',
				'open_shop_main_hdr_calto_email',
				],
				callback: function(layout){
					if(layout=='callto'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'open_shop_main_header_widget_redirect'
				],
				callback: function(layout){
					if(layout=='widget'){
					return true;
					}
					return false;
				}
			},
			 
		];	
    });
})( jQuery );