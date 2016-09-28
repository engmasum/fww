<?php
if($page=="url_page_value"){
	include("themes/url_page_file.php");
}elseif($page==""){
	include("themes/static_home.php");
}elseif($page=="home"){ 
	include("themes/static_home.php");
}elseif($page=="about") {
	include("themes/about.php");
}elseif($page=="dashboard") {
	include("themes/admin-dashboard.php") ;
}elseif($page=="contact") {
	include("themes/contact.php");
}elseif($page=="terms-conditions") {
	include("themes/terms-conditions.php");
}elseif($page=="login") {
	include("themes/login.php");
}elseif($page=="listing-row"){
	include("themes/listing-row.php");
}elseif($page=="listing-details"){
	include("themes/listing-details.php");
}elseif($page=="admin-forms") {
	include("themes/admin-forms.php");
}elseif($page=="admin-tables") {
	include("themes/admin-tables.php");
}elseif($page=="submission_form") {
	include("common/form/submission_form.php");
	include("themes/submission_form.php");
}elseif($page=="admin-listing-row") {
	include("themes/admin-listing-row.php");
}elseif($page=="listing-update"){
	include("themes/listing_update.php");
}elseif($page=="listing-delete"){
	include("themes/listing_delete.php");
}elseif($page=="logout"){
	include("themes/logout.php");
}elseif($page=="user-registration"){
	include("themes/user_registration.php");
}elseif($page=="user-login"){
	include("themes/user_login.php");
}elseif ($page=="check-in") {
	include("themes/check_in.php");
}elseif($page=="checkin-history"){
	include("themes/checkin_history.php");
}
else {
    echo "page Not Found";
}

?>
