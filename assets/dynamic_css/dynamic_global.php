<style type="text/css">
<?php

if ( isset( $max_width ) && $max_width) {
print ".um-$form_id.um {
	max-width: $max_width;
}";
}

if ( $active_color ) {
print "

.um-$form_id.um .um-tip:hover,
.um-$form_id.um .um-field-radio.active i,
.um-$form_id.um .um-field-checkbox.active i 
{
	color: $active_color;
}

.um-$form_id.um .um-field-group-head,
.picker__box,
.picker__nav--prev:hover,
.picker__nav--next:hover
{
	background: $active_color;
}

";
}

if ( $secondary_color ) {
print "

.um-$form_id.um .um-field-group-head:hover,
.picker__footer,
.picker__header,
.picker__day--infocus:hover,
.picker__day--outfocus:hover,
.picker__day--highlighted:hover,
.picker--focused .picker__day--highlighted,
.picker__list-item:hover,
.picker__list-item--highlighted:hover,
.picker--focused .picker__list-item--highlighted,
.picker__list-item--selected,
.picker__list-item--selected:hover,
.picker--focused .picker__list-item--selected {
	background: $secondary_color;
}

";
}

if ( isset( $align ) && $align == 'center') {
print ".um-$form_id.um {
	margin-left: auto!important;
	margin-right: auto!important;
}";
} else if ( isset( $align ) &&  $align ) {
print ".um-$form_id.um {
	float: $align;
}";
}

if ( $primary_btn_color ) {
print ".um-$form_id.um input[type=submit]:disabled:hover {
	background: $primary_btn_color;
}";
print ".um-$form_id.um input[type=submit].um-button,
.um-$form_id.um input[type=submit].um-button:focus,
.um-$form_id.um a.um-button {
	background: $primary_btn_color;
}";
}

if ( $primary_btn_hover ) {
print ".um-$form_id.um input[type=submit].um-button:hover,
.um-$form_id.um a.um-button:hover {
	background-color: $primary_btn_hover;
}";
}

if ( $primary_btn_text ) {
print ".um-$form_id.um .um-button {
	color: $primary_btn_text;
}";
}

if ( $secondary_btn_color ) {
print ".um-$form_id.um .um-button.um-alt,
.um-$form_id.um input[type=submit].um-button.um-alt {
	background: $secondary_btn_color;
}";
}

if ( $secondary_btn_hover ) {
print ".um-$form_id.um .um-button.um-alt:hover,
.um-$form_id.um input[type=submit].um-button.um-alt:hover{
	background: $secondary_btn_hover;
}";
}

if ( $secondary_btn_text ) {
print ".um-$form_id.um .um-button.um-alt,
.um-$form_id.um input[type=submit].um-button.um-alt {
	color: $secondary_btn_text;
}";
}

if ( $form_border ) {
print "
.um-$form_id.um .um-form input[type=text],
.um-$form_id.um .um-form input[type=password],
.um-$form_id.um .um-form textarea,
.um-$form_id.um .upload-progress,
.select2-container .select2-choice,
.select2-drop,
.select2-container-multi .select2-choices,
.select2-drop-active,
.select2-drop.select2-drop-above
{
	border: $form_border !important;
}

.um-$form_id.um .um-form .select2-container-multi .select2-choices .select2-search-field input[type=text] {border: none !important}

";
}

if ( $form_bg_color ) {
print "
.um-$form_id.um .um-form input[type=text],
.um-$form_id.um .um-form input[type=password],
.um-$form_id.um .um-form textarea,
.select2-container .select2-choice,
.select2-container-multi .select2-choices
{
	background-color: $form_bg_color;
}
";
}

if ( $form_placeholder ) {
print "

.um-$form_id.um .um-form ::-webkit-input-placeholder
{
	color:  $form_placeholder;
	opacity: 1 !important;
}

.um-$form_id.um .um-form ::-moz-placeholder
{
	color:  $form_placeholder;
	opacity: 1 !important;
}

.um-$form_id.um .um-form ::-moz-placeholder
{
	color:  $form_placeholder;
	opacity: 1 !important;
}

.um-$form_id.um .um-form ::-ms-input-placeholder
{
	color:  $form_placeholder;
	opacity: 1 !important;
}

.select2-default,
.select2-default *,
.select2-container-multi .select2-choices .select2-search-field input
{
	color:  $form_placeholder;
}

";
}

if ( $form_icon_color ) {
print "
.um-$form_id.um .um-field-icon i,
.select2-container .select2-choice .select2-arrow:before,
.select2-search:before,
.select2-search-choice-close:before
{
	color: $form_icon_color;
}
";
}

if ( $form_asterisk_color ) {
print "
.um-$form_id.um span.um-req
{
	color: $form_asterisk_color;
}
";
}

if ( $form_field_label ) {
print "
.um-$form_id.um .um-field-label {
	color: $form_field_label;
}
";
}

if ( $form_text_color ) {
print "

.um-$form_id.um .um-form input[type=text],
.um-$form_id.um .um-form input[type=password],
.um-$form_id.um .um-form textarea
{
	color: $form_text_color;
}

.um-$form_id.um .um-form input:-webkit-autofill {
    -webkit-box-shadow:0 0 0 50px white inset; /* Change the color to your own background color */
    -webkit-text-fill-color: $form_text_color;
}

.um-$form_id.um .um-form input:-webkit-autofill:focus {
    -webkit-box-shadow: none,0 0 0 50px white inset;
    -webkit-text-fill-color: $form_text_color;
}

";
}

if ( $help_tip_color ) {
print "
.um-$form_id.um .um-tip {
	color: $help_tip_color;
}
";
}

?>
</style>