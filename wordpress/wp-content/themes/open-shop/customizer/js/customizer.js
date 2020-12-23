jQuery(document).ready(function(){
//redirect
//above-header
jQuery( '.focus-customizer-menu-redirect-col1,.focus-customizer-menu-redirect-col2,.focus-customizer-menu-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel('nav_menus').focus();
} );
jQuery( '.focus-customizer-widget-redirect-col1,.focus-customizer-widget-redirect-col2,.focus-customizer-widget-redirect-col3,.focus-customizer-widget-redirect' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel( 'widgets' ).focus();
} );
jQuery( '.focus-customizer-social_media-redirect-col1,.focus-customizer-social_media-redirect-col2,.focus-customizer-social_media-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.section( 'open-shop-social-icon' ).focus();
} ); 

/* === Checkbox Multiple Control === */
    jQuery( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on(
        'change',
        function() {
   // alert('');
            checkbox_values = jQuery( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
                function() {
                    return this.value;
                }
            ).get().join( ',' );

            jQuery( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        }
    );

// section sorting
      jQuery( "#sortable" ).sortable({
        placeholder: "ui-sortable-placeholder", 
        cursor: 'move',
        opacity: 0.65,
        stop: function ( event, ui){
        var data = jQuery(this).sortable('toArray');
            //  console.log(data); // This should print array of IDs, but returns empty string/array      
            jQuery( this ).parents( '.customize-control').find( 'input[type="hidden"]' ).val( data ).trigger( 'change' );
        }
    });
//Disable Hrader Layout
jQuery('input[id=open_shop_main_header_layout-mhdrone], input[id=open_shop_main_header_layout-mhdrtwo], input[id=open_shop_main_header_layout-mhdrthree], input[id=open_shop_top_slide_layout-slide-layout-2], input[id=open_shop_top_slide_layout-slide-layout-3], input[id=open_shop_top_slide_layout-slide-layout-4], input[id=open_shop_cat_slide_layout-cat-layout-2], input[id=open_shop_cat_slide_layout-cat-layout-3],input[id=open_shop_banner_layout-bnr-two],input[id=open_shop_banner_layout-bnr-four],input[id=open_shop_banner_layout-bnr-five],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-one],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-two],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-three],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-five],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-six],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-seven],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-eight]').attr("disabled",true);
//Disable select option
jQuery('#_customize-input-open_shop_category_optn option[value="featured"],#_customize-input-open_shop_category_optn option[value="random"],#_customize-input-open_shop_woo_product_animation option[value="swap"],#_customize-input-open_shop_pagination option[value="scroll"],#_customize-input-open_shop_pagination option[value="click"],#_customize-input-open_shop_main_header_option option[value="button"],#_customize-input-open_shop_main_header_option option[value="widget"], #_customize-input-open_shop_blog_post_pagination option[value="click"], #_customize-input-open_shop_blog_post_pagination option[value="scroll"]').attr("disabled", true);

});


