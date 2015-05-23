<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body ="";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message;
echo $email_body;

// TODO: Send Email
header("Location: contact.php?status=thanks");
exit;

}

?>
<?php
$pageTitle = "Conact Errin";
$section = "contact";
include("inc/head.php");
include("inc/header.php"); ?>
<div class="section page">
    <div class="panel row">
            <?php if(isset($_GET["status"]) and $_GET["status"] == "thanks"){ ?>
            <h1>Contacting... Errin</h1>
            <p>Thanks for the email! I&rsquo;ll be in touch shortly.
            <?php } else { ?>
                <h1>Contact Errin!</h1>
                <p>I&rsquo;d love to hear from your! Complete the form to send me an email.</p>
                <form method="post" action="contact.php">
                  <table>
                      <tr>
                          <th><label for="name">Name</label></th>
                          <td><input type="text" name="name" id="name"></td>
                      </tr>
                      <tr>
                          <th><label for="email">Email</label></th>
                          <td><input type="text" name="email" id="email"></td>
                      </tr>
                      <tr>
                          <th><label for="message">Message</label></th>
                          <td><textarea name="message" id="message"/></textarea></td>
                      </tr>
                  </table>
                  <select>
                       <optgroup label="Group 1">
                            <option>Option 1.1</option>
                      </optgroup>
                      <optgroup label="Group 2">
                            <option>Option 2.1</option>
                            <option>Option 2.2</option>
                      </optgroup>
                      <optgroup label="Group 3" disabled>
                            <option>Option 3.1</option>
                            <option>Option 3.2</option>
                            <option>Option 3.3</option>
                          </optgroup>
                </select>
               <input type="submit" value="send">
                </form>
                <?php } ?>
            </div>
        </div>
<?php include('inc/footer.php'); ?>
<?php include('inc/script.php'); ?>
//#33053744815471 Asana Tag#

