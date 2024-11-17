<?php
require "vendor/mailer.php";

if (isset($_POST['SEND_CONTACT_FORM'])) {
    $FULL_NAME = $_POST['FULL_NAME'];
    $EMAIL_ID = $_POST['EMAIL_ID'];
    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];
    $MESSAGE = $_POST['MESSAGE'];
    $ENQUIRY_DATE = date("Y-m-d H:i:s");

    //mail variables
    $SENT_TO = "ecotechhomesgurgaon@gmail.com";
    $SUBJECT = "CONTACT US REQUEST VIA WEBSITE #" . $ENQUIRY_DATE . " (" . $FULL_NAME . " @" . $PHONE_NUMBER . ")";
    $EMAIL_MSG = "<h3>Dear Team,</h3>";
    $EMAIL_MSG .= "<p>A new contact request has been received from ecotechhomes.in (website) contact us form.</p>";
    $EMAIL_MSG .= "<p><b>Enquiry Date: </b>" . DATE("d M, Y h:i A", strtotime($ENQUIRY_DATE)) . "</p>";
    $EMAIL_MSG .= "<p><b>Full Name: </b>" . $FULL_NAME . "</p>";
    $EMAIL_MSG .= "<p><b>Email Id: </b>" . $EMAIL_ID . "</p>";
    $EMAIL_MSG .= "<p><b>Phone Number: </b>" . $PHONE_NUMBER . "</p>";
    $EMAIL_MSG .= "<p><b>Message: </b>" . $MESSAGE . "</p>";
    $EMAIL_MSG .= "<p><br><br></p>";
    $EMAIL_MSG .= "<p>Regards,</p>";
    $EMAIL_MSG .= "<p>ecotechhomes.in</p>";
    $EMAIL_MSG .= "<p>This is a system generated email. Please do not reply to this email.</p>";


    //create mail message

    $Response = sendmail($SENT_TO, $SUBJECT, $EMAIL_MSG);

    if ($Response == true) {
        header("location: ../index.php?msg=true");
    } else {
        header("location: ../index.php?msg=false");
    }
}
