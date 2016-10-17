<?php
class PHPMAiler {
  private $to;
  private $from;
  private $message;
  private $subject;
  private $headers;
  private $priority;
  public function setRecipent($data) {
    $this->to = $data;
  }
  public function setSender($data) {
    $this->from = $data;
  }
  public function setMessage($data) {
    $this->message = $data;
  }
  public function setSubject($data) {
    $this->subject = $data;
  }
  public function setPriority($data) {
    $this->priority = $data;
  }
  public function setHeaders($data) {
    $this->headers = "From: " . strip_tags($this->from) . "\r\n";
    $this->headers .= "MIME-Version: 1.0\r\n";
    if($this->priority) {
      $this->headers .= "X-Priority: " . $this->priority . "\r\n";
    }
    else
    {
      $this->headers .= "X-Priority: 3\r\n";
    }
    if($data == "html") {
      $this->headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    }
    else if($data == "text") {
      $this->headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    }
  }
  public function send() {
    if(empty($this->to) || empty($this->from) || empty($this->message)) {
      return false;
      exit;
    }
    if(mail($this->to, $this->subject, $this->message, $this->headers)) {
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>
