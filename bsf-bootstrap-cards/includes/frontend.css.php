/* Background Property */
<?php if(!empty($settings->bg_color)) : ?>
.fl-node-<?php echo $id; ?> .bb_boot_card_container { 
	background-color: #<?php echo $settings->bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($settings->bg_color)) ?>, <?php echo ( $settings->bg_color_opc != '' ) ? $settings->bg_color_opc/100 : 100; ?>);
}
<?php endif; ?>

/* BCard Heading Typography */
<?php if( !empty($settings->heading_font) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title *{
	<?php FLBuilderFonts::font_css( $settings->heading_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title * {
<?php if(!empty($settings->color)) : ?>
	color: #<?php echo $settings->color; ?>;
<?php endif; ?>

<?php if($settings->title_size == 'custom') : ?>
	font-size: <?php echo $settings->title_custom_size; ?>px;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title {
margin-top: <?php echo ( trim($settings->title_margin_top) != '' ) ? $settings->title_margin_top : '0'; ?>px;
margin-bottom: <?php echo ( trim($settings->title_margin_bottom) != '' ) ? $settings->title_margin_bottom : '0'; ?>px;
<?php if ( $settings->title_margin_top != '' || $settings->title_margin_bottom != '' ) { ?>
display:block;
<?php } ?>
}

/* BCard's Link color */

<?php if( !empty($settings->link_text_font_family) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb_boot_card_link, .fl-node-<?php echo $id; ?> .bb_boot_card_link:visited{
	<?php FLBuilderFonts::font_css( $settings->link_text_font_family ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb_boot_card_link, .fl-node-<?php echo $id; ?> .bb_boot_card_link:visited {
<?php if(!empty($settings->link_color)) : ?>
	color: #<?php echo $settings->link_color; ?>;
<?php endif; ?>

<?php if($settings->link_font_size == 'custom') : ?>
	font-size: <?php echo $settings->link_custom_size; ?>px;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb_boot_card_link:hover {
<?php if(!empty($settings->link_hover_color)) : ?>
	color: #<?php echo $settings->link_hover_color; ?>;
<?php endif; ?>
}

<?php if( $settings->card_btn_type == 'link' ) { ?>
/* Link Text Margin */
.fl-node-<?php echo $id; ?> .bb_boot_card_link {
margin-top: <?php echo ( trim($settings->link_margin_top) != '' ) ? $settings->link_margin_top : '0'; ?>px;
margin-bottom: <?php echo ( trim($settings->link_margin_bottom) != '' ) ? $settings->link_margin_bottom : '0'; ?>px;
<?php if ( $settings->link_margin_top != '' || $settings->link_margin_bottom != '' ) { ?>
display:block;
<?php } ?>
}
<?php } ?>


/* BCard's Description Typography */

<?php if( !empty($settings->desc_font_family) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb_boot_card_block .bb_boot_card_text{
	<?php FLBuilderFonts::font_css( $settings->desc_font_family ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb_boot_card_block .bb_boot_card_text,
.fl-node-<?php echo $id; ?> .bb_boot_card_block .bb_boot_card_text * {
<?php if(!empty($settings->desc_color)) : ?>
	color: #<?php echo $settings->desc_color; ?>;
<?php endif; ?>

<?php if($settings->desc_font_size == 'custom') : ?>
	font-size: <?php echo $settings->desc_custom_size; ?>px;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb_boot_card_block .bb_boot_card_text {
margin-top: <?php echo ( trim($settings->desc_margin_top) != '' ) ? $settings->desc_margin_top : '0'; ?>px;
margin-bottom: <?php echo ( trim($settings->desc_margin_bottom) != '' ) ? $settings->desc_margin_bottom : '0'; ?>px;
<?php if ( $settings->desc_margin_top != '' || $settings->desc_margin_bottom != '' ) { ?>
display:block;
<?php } ?>
}


/* BCard's Button Link */
<?php if( !empty($settings->btn_font_family) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb_boot_card_link_button .bb_boot_button{
	<?php FLBuilderFonts::font_css( $settings->btn_font_family ); ?>
}
<?php endif; ?>
.fl-node-<?php echo $id; ?> .bb_boot_card_link_button .bb_boot_button {
<?php if(!empty($settings->btn_text_color)) : ?>
	color: #<?php echo $settings->btn_text_color; ?>;
<?php endif; ?>
<?php if($settings->btn_font_size == 'custom') : ?>
	font-size: <?php echo $settings->btn_custom_size; ?>px;
<?php endif; ?>
<?php if(!empty($settings->btn_line_height)) : ?>
	line-height: <?php echo $settings->btn_line_height; ?>px;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb_boot_card_link_button:hover .bb_boot_button {
<?php if(!empty($settings->btn_text_hover_color)) : ?>
	color: #<?php echo $settings->btn_text_hover_color; ?>;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb_boot_card_link_button {
<?php if(!empty($settings->btn_bg_color)) : ?>
	background-color: #<?php echo $settings->btn_bg_color; ?>;
<?php endif; ?>	
	padding: 8px 16px;
	text-decoration: none;
<?php if(!empty($settings->btn_border_radius)) : ?>	
	border-radius: <?php echo $settings->btn_border_radius; ?>px;
	-moz-border-radius: <?php echo $settings->btn_border_radius; ?>px;
	-webkit-border-radius: <?php echo $settings->btn_border_radius; ?>px;
<?php endif; ?>	
}


.fl-node-<?php echo $id; ?> .bb_boot_card_link_button:hover {
<?php if(!empty($settings->btn_bg_hover_color)) : ?>
	background-color: #<?php echo $settings->btn_bg_hover_color; ?>;
<?php endif; ?>
}

