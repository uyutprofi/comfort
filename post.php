<?php
if (isset($_POST['phone'])) {
//set admin emails 

    $admin_email = array(
        'evgeniyyzhaninov@gmail.com',
        'maxiskosenko@gmail.com'
    );

//get data from post
    $message = isset($_POST['name']) && $_POST['name'] !== '' ? 'Client name => ' . $_POST['name'] . "\r\n" : '';
    $subject = isset($_POST['form']) && $_POST['form'] !== '' ? 'Form: ' . $_POST['form'] : '';
    $message .= isset($_POST['subject']) && $_POST['subject'] !== '' ? 'Subject: ' . $_POST['subject'] . "\r\n" : '';
    $message .= isset($_POST['phone']) && $_POST['phone'] !== '' ? 'Phone => ' . $_POST['phone'] . "\r\n" : '';
    $message .= isset($_POST['message']) && $_POST['message'] !== '' ? 'Message => ' . $_POST['message'] . "\r\n" : '';
    $message .= isset($_POST['device']) && $_POST['device'] !== '' ? 'Device => ' . $_POST['device'] . "\r\n" : '';
//
    $headers = 'From: Okna Remont<oknaremont@oknaremont.kiev.ua>';

    foreach ($admin_email as $admin_emails) {
        mail($admin_emails, $subject, $message, $headers);
    }


}
