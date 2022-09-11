{% load static %}

<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'no.8602775059@gmail.com'; echo 1

  if( file_exists($php_email_form = '..static/assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form ); echo 2
  } else {
    die( 'Unable to load the "PHP Email Form" Library!'); echo 3
  }


$mg = Mailgun::create('2ede45bf19f1a700da22cc4fbd1ca02d-07a637b8-37973753'); echo 4 // For US servers 

$mg->messages()->send('http://sandboxaf2a025b54044805be532f43d383a4a6.mailgun.org/', [
  'from'    => $_POST['email'],
  'to'      => 'no.8602775059@gmail.com',
  'subject' => $_POST['subject'],
  'text'    => $_POST['message']
]) echo 5