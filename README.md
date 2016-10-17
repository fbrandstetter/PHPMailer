# PHPMailer

This is a short PHP class to send emails without any hassle.

## Usage

The basic usage of PHPMailer is pretty easy. An example to send an email looks like this:

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
