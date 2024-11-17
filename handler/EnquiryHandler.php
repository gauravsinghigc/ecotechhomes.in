<?php
require "vendor/mailer.php";

if (isset($_POST['SEND_ENQUIRY'])) {
    $ENQUIRY_FOR = $_POST['ENQUIRY_FOR'];
    $PROPERTY_AREA = $_POST['PROPERTY_AREA'];
    $PROPERTY_SIZE = $_POST['PROPERTY_SIZE'];
    $APPROX_BUDGET_TYPE = $_POST['APPROX_BUDGET_TYPE'];
    $FULL_NAME = $_POST['FULL_NAME'];
    $EMAIL_ID = $_POST['EMAIL_ID'];
    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];
    $MESSAGE = $_POST['MESSAGE'];
    $ENQUIRY_DATE = date("Y-m-d H:i:s");

    //mail variables
    $SENT_TO = "ecotechhomesgurgaon@gmail.com";
    $SUBJECT = "WEBSITE ENQUIRY #" . $ENQUIRY_DATE . " (" . $FULL_NAME . " @" . $PHONE_NUMBER . ")";
    $EMAIL_MSG = "<h3>Dear Team,</h3>";
    $EMAIL_MSG .= "<p>A new enquiry has been received from ecotechhomes.in (website)</p>";
    $EMAIL_MSG .= "<p><b>Enquiry Date: </b>" . DATE("d M, Y h:i A", strtotime($ENQUIRY_DATE)) . "</p>";
    $EMAIL_MSG .= "<p><b>Full Name: </b>" . $FULL_NAME . "</p>";
    $EMAIL_MSG .= "<p><b>Email Id: </b>" . $EMAIL_ID . "</p>";
    $EMAIL_MSG .= "<p><b>Phone Number: </b>" . $PHONE_NUMBER . "</p>";
    $EMAIL_MSG .= "<p><b>Enquiry For: </b>" . $ENQUIRY_FOR . "</p>";
    $EMAIL_MSG .= "<p><b>Property Area: </b>" . $PROPERTY_AREA . " " . $PROPERTY_SIZE . "</p>";
    $EMAIL_MSG .= "<p><b>Budget Type: </b>" . $APPROX_BUDGET_TYPE . "</p>";
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
