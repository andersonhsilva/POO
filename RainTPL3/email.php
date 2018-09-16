<?php
require_once('vendor/autoload.php');

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => false,
);
Tpl::configure($config);

// esta linha faz necessário para o uso de CSS no template HTML
Tpl::registerPlugin(new Tpl\Plugin\PathReplace());

// passa as variaveis PHP para o template HTML
$tpl = new Tpl;

// seta as variaveis
$variaveis = array(
    "name"  => "Bem vindo ao PHP com RainTPL3!",
    "version"  => PHP_VERSION,
    "safe_variable"  => "<script>console.log('this is safe')</script>",
    "lista"		=> array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"),
    "user"		=> (object) array("name"=>"Rain", "citizen" => "Earth", "race" => "Human" ),
    "numbers"	=> array( 3, 2, 1 ),

);

// chama o template com o metodo draw
$tpl->assign($variaveis);

//$tpl->draw("base");
$html = $tpl->draw("base", true); // o true = retorna o html gerado pelo merge do rain


//----------------------------------------------------------------------------

//Import PHPMailer classes into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "anderson.h.silva@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "A1986h486s";

//Set who the message is to be sent from
$mail->setFrom('anderson.h.silva@gmail.com', 'Anderson Henrique');

//Set an alternative reply-to address
//$mail->addReplyTo('xxxxxxxxxxxxxxxxxxx@gmail.com', 'Anderson Henrique');

//Set who the message is to be sent to
$mail->addAddress('anderson.h.silva@gmail.com', 'Anderson Henrique');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>
