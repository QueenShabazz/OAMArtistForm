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

		<label><input type="checkbox" value=""/>Live in Oakland (please provide address, note this is for internal use and will not be published)</label><textarea rows="1" cols="20" style="resize:none;" name="liveaffil"></textarea>
		<label><input type="checkbox" value=""/>Work or have a studio in Oakland (please provide address, note this is for internal use and will not be published) </label><textarea rows="1" cols="20" style="resize:none;" name="workaffil"></textarea>
        <label for="social">Please list links to artists web site, Facebook page, Instagram account, Pinterest or other digital presence, separated by commas.</label> 
        <textarea name="social" id="social"></textarea>
        <label for="message">Your Message</label>
        <textarea name="message" id="message"></textarea>
        <label for="img">Please upload 1-8 jpegs showing your work </label>
        <input type="file" name="img" accept="image/png, image/jpeg" multiple>

       <label> Is your work (check all that apply)</label>
       <label for="2d"> 2D made to hang on a wall</label>
       <input type="checkbox" name="2dmural">
       <label for="2dmural"> 2D mural painted directly on a wall </label>
       <input type="checkbox" name="2d">
       <label for="3d"> 3D made to hang on a wall</label>
       <input type="checkbox" name="3d">
       <label for="3dceil"> 3D meant to hang from the ceiling</label>
       <input type="checkbox" name="3dceil">
       <label for="3dex"> 3D meant to be experienced in the round</label>
       <input type="checkbox" name="3dex">
       <label for="install"> Installation-based</label>
       <input type="checkbox" name="install">
       <label for="misc"> Light, digital, or other media</label>
       <input type="checkbox" name="misc">
       <label for="other"> other</label>
       <input type="checkbox" name="other"><input type="text" id="otherValue" name="other">

       <label> Is your work made primarily from (check all that apply) </label>
       <label for="paint"> Paint</label>
       <input type="checkbox" name="paint">
       <label for="Photography">Photography</label>
       <input type="checkbox" name="Photography">
       <label for="Fiber"> Fiber or textile</label>
       <input type="checkbox" name="Fiber">
       <label for="Wood"> Wood</label>
       <input type="checkbox" name="Wood">
       <label for="Metal"> Metal</label>
       <input type="checkbox" name="Metal">
       <label for="Glass"> Glass</label>
       <input type="checkbox" name="Glass">
       <label for="Ceramic"> Ceramic</label>
       <input type="checkbox" name="Ceramic">
       <label for="otherMedia"> Mixed media or other</label>
       <input type="checkbox" name="otherMedia"><input type="text" id="otherMedia" name="otherMedia">

       <label> Some people are looking to support diversity by supporting artists who are aligned with certain social groups. If you would like to be identified with one of the following groups, please check as many as apply: </label>
       <label for="Black"> Black</label>
       <input type="checkbox" name="Black">
       <label for="Asian"> Asian</label>
       <input type="checkbox" name="Asian">
       <label for="Pacific"> Pacific Islander</label>
       <input type="checkbox" name="Pacific">
       <label for="Native"> Native American</label>
       <input type="checkbox" name="Native">
       <label for="LatinX"> LatinX</label>
       <input type="checkbox" name="LatinX">
       <label for="South-East"> South-East Asian</label>
       <input type="checkbox" name="South-East">
       <label for="Euro"> Euro-Caucasian</label>
       <input type="checkbox" name="Euro">
       <label for="LGTBQ"> LGTBQ</label>
       <input type="checkbox" name="LGTBQ">
       <label for="Disabled"> Disabled</label>
       <input type="checkbox" name="Disabled">
       <label for="OtherRace"> Other</label>
       <input type="checkbox" name="OtherRace"><input type="text" id="OtherRace" name="OtherRace">
       <label for="size">Some people are looking to purchase or show work of a certain size. Would you say the work you have to offer is typically:</label>
       <select name="size" id="size">
            <option value="small">Small (under 24 inches wide)</option>
            <option value="medium">Medium (24-48 inches wide) </option>
            <option value="large">Large (48-84 inches wide)</option>
            <option value="extra">Extra-large (7-12 ft wide) </option>
            <option value="monumental">Monumental (12-80 ft wide)</option>
       </select>
	
       <label> Some people are looking to purchase or show work of a certain price-point. Would you say the work you have to offer is typically sold for: (check all that apply?) </label>
       <label for="100"> Under $100</label>
       <input type="checkbox" name="100">
       <label for="500"> $100-$500</label>
       <input type="checkbox" name="500">
       <label for="1500"> $500-1500</label>
       <input type="checkbox" name="1500">
       <label for="5000"> $1500-5,000</label>
       <input type="checkbox" name="5000">
       <label for="15000"> $5,000-15,000</label>
       <input type="checkbox" name="15000">
       <label for="30000"> $15,000-30,000</label>
       <input type="checkbox" name="30000">
       <label for="Over"> Over $30,000</label>
       <input type="checkbox" name="Over">
       
       <label> What kinds of opportunities are you seeking? (check all that apply)  </label>
       <label for="Sales"> Sales to private collectors</label>
       <input type="checkbox" name="Sales">
       <label for="corp"> Sales to corporate and commercial clients</label>
       <input type="checkbox" name="corp">
       <label for="rels"> Relationships with consultants, designers, architects</label>
       <input type="checkbox" name="rels">
       <label for="Commissions"> Commissions</label>
       <input type="checkbox" name="Commissions">
       <label for="Exhibitions"> Exhibitions</label>
       <input type="checkbox" name="Exhibitions">
       <label for="gall"> Relationships with galleries</label>
       <input type="checkbox" name="gall">
       <label for="pub">Public Art opportunities</label>
       <input type="checkbox" name="pub">
       <label for="media">Media publicity</label>
       <input type="checkbox" name="media">
       <label for="OtherMedia"> Other</label>
       <input type="checkbox" name="OtherMedia"><input type="text" id="OtherMedia" name="OtherMedia">


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