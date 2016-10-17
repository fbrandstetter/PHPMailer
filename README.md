# PHPMailer

This is a short PHP class to send emails without any hassle.

## Usage

The basic usage of PHPMailer is pretty easy. An example to send an email looks like this:

    require_once('phpmailer.php');
    $email = new PHPMailer();
    $email->setRecipent("john@doe.com");
    $email->setSender("example@company.com");
    $email->setMessage("Example Message");
    $email->setSubject("Example Subject");
    $email->setHeaders("html");
    if(!$email->send()) {
      echo "Oops. Something went wrong.";
    }
    
## Headers

You can either use one of these headers to fit the type of your message:

* html ( for E-Mails with HTML content )
* plain ( for E-Mails with plain text only )

## Priority

You may want to send emails with different priorities for different purposes. The `setPriority` function allows you to set the priority which is set for the email. The following priorities are available:

    1 - Highest
    2 - High
    3 - Middle
    4 - Low
    5 - Lowest

The default priority set for all emails is `3`. The argument thus is optional and not required.
