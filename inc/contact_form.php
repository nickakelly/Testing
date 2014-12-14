
<?php

if (@$_POST['check'] == 'go') {

$name = $_POST['name'];
$emailAddress = $_POST['email'];
$phoneNumber = $_POST['phone'];


$debug = "nicka.kelly@gmail.com";
$to = "nick@creativekilter.com";




if ($name == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your name. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else if ($emailAddress == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your email address. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else if ($phoneNumber == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your phone number. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else {

$message = "Name: " . $name . "\nEmail: " . $emailAddress . "\nPhone Number: " . $phoneNumber . "\nCity: " . $city . "\nDate of event: " . $date . "\nEvent start time: " . $start . "\nType of event: " . $type . "\nCaricature Type: " . $c_type;

mail($to, 'Quote Requested - Creative Kilter', $message, 'From: ' . $emailAddress);

header("Location: form-sent.php");

echo' <script type="text/javascript">
            window.location = \'form-sent.php\';
      </script>
';
}

}//end isset if

else { //<div style="width: 475px;">Due to technical difficulties, the contact form has been taken down. If you want to request a quote, please email me at julia@jkexpressions.com.</div>
echo '




            <table>
                   <tr><td width="150px;">Name:</td><td><input type="text" name="name" value="" class="right"></td></tr>
                   <tr><td width="150px;">Email:</td><td><input type="text" name="email" value="" class="right"></td></tr>
                   <tr><td width="150px;">Phone number:</td><td><input type="text" name="phone" value="" class="right"></td></tr>
                   <tr><td width="150px;">Project Description:</td><td><textarea id="project"></textarea></td></tr>
                   
                   
 
            </table>
            <br /><br />
            <input type="hidden" name="check" value="go">
            <input type="image" src="images/submit.jpg" name="submit" value="">

';
}
?>