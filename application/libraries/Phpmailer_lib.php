<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PHPMailer Class
 *
 * This class enables SMTP email with PHPMailer
 *
 * @category    Libraries
 * @link        https://www.codexworld.com
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PHPMailer_Lib
{
    public function __construct($config){
        log_message('Debug', 'PHPMailer class is loaded.');
        $this->config = $config;
    }

    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/PHPMailer/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/SMTP.php';
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host     = $this->config["Host"];
        $mail->SMTPAuth = $this->config["SMTPAuth"];
        $mail->Username = $this->config["Username"];
        $mail->Password = $this->config["Password"];
        $mail->SMTPSecure = $this->config["SMTPSecure"];
        $mail->Port     = $this->config["Port"];
        $mail->CharSet     = $this->config["CharSet"];
        // SMTPDebug to get more details on case errors 
        // $mail->SMTPDebug = 4;
        $mail->SMTPOptions = $this->config["SMTPOptions"];
        return $mail;
    }
}