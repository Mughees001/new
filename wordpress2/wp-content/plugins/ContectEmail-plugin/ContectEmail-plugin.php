<?php 

/*
*	@package 	ContectEmailplugin
*/

/*

Plugin Name: ContectEmail Plugin
Plugin URI:	http://ContectEmail/plugin
Description:	This is my first attempt to create a plugin 
Version:	1.0.0
License:	

*/
// OUR PLUGIN DIRECTORY PATH
define("ContectEmail-plugin", plugin_dir_path(__FILE__));
add_shortcode("SC","shortcode");
// Function to add contect form text to posts and pages
  	function shortcode() {
    return"Halow World  this is a first plugin post!!";
	}
// add_shortcode("SCone","shortcodes");
// function shortcodes($attr){
// 	//print_r($attr);
// 	echo "this is working";
// }


	function bartag_func( $atts ) {
	$a = shortcode_atts( array(
		'title' => ' my_title '
		//'foo' => ' Name ',
		//'bar' => ' Email ',
	), $atts );

	return $a['title'].$a['foo'].$a['bar'];
}
add_shortcode( 'bartag', 'bartag_func' );


add_shortcode( 'addform', 'input_fields' ); 
function input_fields( $atts ) {
    if ( isset( $_POST['gg'] ) ) {
        $post = array(
            'post_content' => $_POST['content'], 
            'post_title'   => $_POST['title']
        );
        $id = wp_insert_post( $post, $wp_error );
    }
    ?> 
    <form method = "post">
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit" name="gg">
    </form>
    <?php
}




//Contect form plugin function

add_shortcode( 'contectform', 'contect_form' ); 
function contect_form( $atts ) {
    // if ( isset( $_POST['submit'] ) ) {
    //     $post = array(
    //         'post_name'	=> $_POST['name'], 
    //         'post_email'	=> $_POST['email'],
    //         'post_message'	=>	$POST['message'],
    //         'post_checkout'	=>	$POST['checkme']
    //      );
    //     $id = wp_insert_post( $post, $wp_error );
    // }

    if(isset($_POST['submit'])){
    $to = "mugheesarshad001@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $first_name . " " .  " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $mail=mail($to,$subject,$message,$headers);{
    	if($mail){
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	}else{
		echo "Sorry its not working right now !!";
	}//end of else
    // You can also use header('Location: thank_you.php'); to redirect to another page.
	}//end of $mail
    }//end of submit
    ?>
  <div class="conainer" style="margin: 100px";> 
   <form method="post" action="" >
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Message here !!" name="message">
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkme">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
  <input type="submit" name="submit" value="Submit">

</form>
</div>
    <?php
}

// simple mail form

add_shortcode( 'mailform', 'mail_form' ); 
function mail_form( $atts ){ 
if(isset($_POST['submit'])){
    $to = "mugheesarshad001@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $mail=mail($to,$subject,$message,$headers);{	?>
    <div style="margin-top: 100px; text-align: center;">
  		<?php 
  		 if($mail){	?>
    	<h2><?php print_r("Mail Sent. Thank you " . $first_name . ", we will contact you shortly.");?></h2><?php 
	}else{
		print_r("Sorry its not working right now !!");
	}?>
  	</div>
   <?php 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
	}// end of mail

    }//end of submit


	?>
	<!DOCTYPE html>
	<head>
		<title>Form submission</title>
	</head>
	<body>

 	<div class="conainer" style="margin: 100px";> 
   		<form method="post" action="" >
  	<div class="form-group">
    	<label for="exampleInputEmail1">First Name:</label>
    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="first_name">
  	</div>
   	<div class="form-group">
    	<label for="exampleInputEmail1">Last Name:</label>
    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="last_name">
  	</div>
  	<div class="form-group">
    	<label for="exampleInputEmail1">Email:</label>
    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  	</div>
  	<div class="form-group">
    	<label for="exampleInputPassword1">Message:</label>
    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Message here !!" name="message">
  	</div>
  		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>

</body>
</html>

	<?php 
}
















// Absolute path to wordpress directory
// defined( 'ABSPATH' ) or die( 'Hey you cant acces this file !!' );

// class ContectEmail{

// 	// function __construct(){
// 	// 	add_action( 'init' , array ( $this , 'custom_post_type' ) );
// 	// }

// 	// function __construct(){

// 	// 	add_action( 'init', array ($this , 'shortcode_contect_form' ) );
// 	// }


// 	function activate(){

// 		// generated a CPT
// 		// flush rewrite rules
// 	}

// 	function deactivate(){

// 		// flush rewrite rules
// 	}

// 	function uninstall(){

// 		//	delete CPT
// 	}

// 	// function custom_post_type(){

// 	// 	register_post_type('book',['public' => true, 'label' => 'Books' ] );
// 	// }

 

	
// }















// if (class_exists('ContectEmail')) {
	
// 	$ContectEmail = new ContectEmail();
// }



// //activate plugin

// register_activation_hook(__FILE__,array($ContectEmail,'activate'));

// //deactivate plugin

// register_deactivation_hook(__FILE__,array($ContectEmail,'deactivate'));

// //uninstall plugin




