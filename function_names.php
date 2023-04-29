<?php 
    
    class Email
    {
        //Not Good
        public function handle()
        {
            mail($this->to, $this->subject, $this->body);
        }


        //Good
        public function send()
        {
            mail($this->to, $this->subject, $this->body);
        }
    }

    $message = new Email();
    $message->handle();
    // What is this? A handle for the message? Are we writing to a file now?

    
    $message = new Email();
    $message->send();
    // Clear and obvious
?>