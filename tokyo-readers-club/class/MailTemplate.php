<?php 

class MailTemplate {
    // 
    static public function generate(string $message, string $sender) {
        // 
        $generatedMessage = "
        Message received from : <strong>$sender</strong>. <br>
        <br>
        $message
        ";
        // 
        return $generatedMessage;
    }
}

?>