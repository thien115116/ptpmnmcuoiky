( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['open_shop_cat_slide_layout'] = [
		    {
				controls: [    
				'open_shop_category_slider_optn', 
				],
				callback: function(layout){
					if(layout =='cat-layout-1'){
					return true;
					}
					return false;
				}
			},	
				
			
			 
		];	
    });
})( jQuery );