jQuery(document).ready(function($){
	"use strict";
       if( typeof openshopqv === 'undefined' ){
        return;
       }

	    var thnk_qv_loader_url   = openshopqv.qv_loader,
		thnk_quick_view_bg   = $(document).find( '.thnk-quick-view-bg' ),

		thnk_qv_modal    	= $(document).find( '#thnk-quick-view-modal' ),
		thnk_qv_content  	= thnk_qv_modal.find( '#thnk-quick-view-content' ),
		thnk_qv_close_btn 	= thnk_qv_modal.find( '#thnk-quick-view-close' ),
		thnk_qv_wrapper  	= thnk_qv_modal.find( '.thnk-content-main-wrapper'),
		thnk_qv_wrapper_w 	= thnk_qv_wrapper.width(),
		thnk_qv_wrapper_h 	= thnk_qv_wrapper.height();
	    var	thnk_qv_center_modal = function(){
		thnk_qv_wrapper.css({
			'width'     : '',
			'height'    : ''
		});

		thnk_qv_wrapper_w 	= thnk_qv_wrapper.width(),
		thnk_qv_wrapper_h 	= thnk_qv_wrapper.height();

		var window_w = $(window).width(),
			window_h = $(window).height(),
			width    = ( ( window_w - 60 ) > thnk_qv_wrapper_w ) ? thnk_qv_wrapper_w : ( window_w - 60 ),
			height   = ( ( window_h - 120 ) > thnk_qv_wrapper_h ) ? thnk_qv_wrapper_h : ( window_h - 120 );

		thnk_qv_wrapper.css({
			'left' : (( window_w/2 ) - ( width/2 )),
			'top' : (( window_h/2 ) - ( height/2 )),
			'width'     : width + 'px',
			'height'    : height + 'px'
		});
	};

	var thnk_update_summary_height = function() {
		var quick_view = $(document).find('#thnk-quick-view-content'),
			img_height = quick_view.find( '.product .thnk-qv-image-slider' ).first().height(),
			summary    = quick_view.find('.product .summary.entry-summary'),
			content    = summary.css('content');

		if ( 'undefined' != typeof content && 544 == content.replace( /[^0-9]/g, '' ) && 0 != img_height && null !== img_height ) {
			summary.css('height', img_height );
		} else {
			summary.css('height', '' );
		}
	};

	var thnk_qv_btn = function(){
        $(document).off( 'click','.opn-quick-view-text' ).on( 'click', '.opn-quick-view-text', function(e){
			e.preventDefault();
			var $this       = $(this),
				wrap 		= $this.closest('li.product');
			var product_id  = $this.data( 'product_id' );
			

				if( ! thnk_qv_modal.hasClass( 'loading' ) ) {
					thnk_qv_modal.addClass('loading');
				}

				if ( ! thnk_quick_view_bg.hasClass( 'thnk-quick-view-bg-ready' ) ){
					thnk_quick_view_bg.addClass( 'thnk-quick-view-bg-ready' );
				}

				// stop loader
				$(document).trigger( 'thnk_quick_view_loading' );
	

			thnk_qv_ajax_call( $this, product_id );
		});
	};

	var thnk_qv_ajax_call = function( t, product_id ){
		$.ajax({
            url:openshopqv.ajaxurl,
			data: {
				action: 'thnk_load_product_quick_view',
				product_id: product_id
			},
			dataType: 'html',
			type: 'POST',
			success: function (data){
				thnk_qv_content.html(data);
				thnk_qv_content_height();

				jQuery(document).ready(function($){ 
              
            $('form.cart').on( 'click', 'button.plus, button.minus', function(){
               
                // Get current quantity values
                var qty = $( this ).siblings('.quantity').find( '.qty' );
                var val = parseFloat(qty.val()) ? parseFloat(qty.val()) : '0';
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));
 
                // Change the value if plus or minus
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    } else {
                        qty.val( val + step );
                    }
                } else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    } else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }
                 
            });
             
        });
			     }
			});
	};
	var thnk_qv_content_height = function(){
		// Variation Form
		var form_variation = thnk_qv_content.find('.variations_form');

		form_variation.trigger( 'check_variations' );
		form_variation.trigger( 'reset_image' );

		if (!thnk_qv_modal.hasClass('open')) {
			
			thnk_qv_modal.removeClass('loading').addClass('open');

			var modal_height = thnk_qv_modal.find( '#thnk-quick-view-content' ).outerHeight();
			var window_height = $(window).height();
			var scrollbar_width = thnk_get_scrollbar_width();
			var $html = $('html');

			if( modal_height > window_height ) {
				$html.css( 'margin-right', scrollbar_width );
			} else {
				$html.css( 'margin-right', '' );
				
			}

			$html.addClass('thnk-quick-view-is-open');
		}

		var var_form = thnk_qv_modal.find('.variations_form');

		if ( var_form.length > 0 ) {
			var_form.wc_variation_form();
			var_form.find('select').change();
		}

			var image_slider_wrap = thnk_qv_modal.find('.thnk-qv-image-slider');

			if ( image_slider_wrap.find('li').length > 1 ) {
				image_slider_wrap.flexslider({
				animation: "slide"
				});
			}

			setTimeout(function() {
				thnk_update_summary_height();
			}, 100);
		// stop loader
		$(document).trigger('thnk_quick_view_loader_stop');
	};

	var thnk_qv_close_modal = function() {

		// Close box by click overlay
		$('.thnk-content-main-wrapper').on( 'click', function(e){
			
			if ( this === e.target ) {
				thnk_qv_close();
			} 
		});
        
		// Close box with esc key
		$(document).keyup(function(e){
			if( e.keyCode === 27 ) {
				thnk_qv_close();
			}
		});

		// Close box by click close button
		thnk_qv_close_btn.on( 'click', function(e) {
			e.preventDefault();
			thnk_qv_close();
		});

		var thnk_qv_close = function() {
			thnk_quick_view_bg.removeClass( 'thnk-quick-view-bg-ready' );
			thnk_qv_modal.removeClass('open').removeClass('loading');
			$('html').removeClass('thnk-quick-view-is-open');
			$('html').css( 'margin-right', '' );

			setTimeout(function () {
				thnk_qv_content.html('');
			},1000);
		}
	};

	var thnk_get_scrollbar_width = function (){ 
		
		var div = $('<div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"><div style="height:100px;"></div>'); 
		// Append our div, do our calculation and then remove it 
		$('body').append(div); 
		var w1 = $('div', div).innerWidth(); 
		div.css('overflow-y', 'scroll'); 
		var w2 = $('div', div).innerWidth(); 
		$(div).remove();

		return (w1 - w2); 
	}

	window.addEventListener("resize", function(event){
		thnk_update_summary_height();
	});
	// START
	thnk_qv_btn();
	thnk_qv_close_modal();
	thnk_update_summary_height();

});
