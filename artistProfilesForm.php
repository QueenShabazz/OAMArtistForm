<!-- https://wordpress.org/support/topic/saving-data-from-form-to-database-table/ -->


<?php
/*
 * Template Name: Contact Page
 */

get_header();

if ( ! empty( $_POST ) ) {
    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
}

?>

<div id="content">
<form action="" method="post">
    <label for="fullname">Artist Name</label>
        <input type="text" name="fullname" id="fullname" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
		<label for="phone"> Phone Number</label>
		<input type="tel" id="phone" name="phone"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required>
		<label for="affiliation">
What is your affiliation with Oakland</label>
		<label><input type="checkbox" value=""/>Live in Oakland (please provide address, note this is for internal use and will not be published)</label>
		<label><input type="checkbox" value=""/>Work or have a studio in Oakland (please provide address, note this is for internal use and will not be published) </label>
        <label for="message">Your Message</label>
        <textarea name="message" id="message"></textarea>
        <input type="hidden" name="action" value="contact_form">
        <input type="submit" name="subMit" value="Send My Message">
    </form>
</div>

<?php
get_footer();


/* for Functions.php 
<?php 
if(isset($_POST['subMit'])){
	$data= array(
		'fullname'=>$_POST['fullname']
		'email'=>$_POST['email']
		'message'=>$_POST['message']
	);
	$table_name ='ArtistProfiles';
}
?>

*/