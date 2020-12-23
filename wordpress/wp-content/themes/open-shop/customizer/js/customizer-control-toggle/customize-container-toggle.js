/*********************************/
// Sidebar hide and show control
/*********************************/
( function( $ ){
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
OPNCustomizerToggles ['open_shop_default_container'] = [
		    {
				controls: [    
				'open_shop_conatiner_maxwidth',
				'open_shop_conatiner_top_btm',
				],
				callback: function(layout){
					if(layout=='fullwidth'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'open_shop_conatiner_width',  
				],
				callback: function(layout){
					if(layout =='boxed'){
					return false;
					}
					return true;
				}
			},		
		];
	});
})( jQuery );