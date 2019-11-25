<?php /* Template Name: Contact */ ?>
<?php get_header();?>

<!-- <?php //echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?> -->
<?php echo do_shortcode('[mailform]')

 ?>


<!-- <?php ?>
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
    $mail=mail($to,$subject,$message,$headers);{
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    	if($mail){
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	}else{
		echo "Sorry its not working right now !!";
	}
    // You can also use header('Location: thank_you.php'); to redirect to another page.
	}

    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>  -->


<?php get_footer(); ?>