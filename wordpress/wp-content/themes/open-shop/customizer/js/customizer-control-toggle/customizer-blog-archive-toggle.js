/*************************************/
// Blog Archive Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'open-shop-toggle-control', function( argument, api ){
OPNCustomizerToggles ['open_shop_blog_post_content'] = [
		    {
				controls: [    
				'open_shop_blog_expt_length',
				'open_shop_blog_read_more_txt',
				],
				callback: function(layout){
					if(layout=='full'|| layout=='nocontent'){
					return false;
					}
					return true;
				}
			},	
		];	
	});
})( jQuery );