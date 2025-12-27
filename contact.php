<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

/* ==============================
   SOLO PERMITIR POST
================================ */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Acceso no permitido'
    ]);
    exit;
}

/* ==============================
   VALIDAR reCAPTCHA
================================ */
$secretKey = '6Ld4BjQsAAAAAE8J2WnzGjmZd3_g98EHTVSKi60J';

if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
    echo json_encode([
        'status' => 'warning',
        'message' => 'Por favor confirma que no eres un robot.'
    ]);
    exit;
}

$captchaResponse = $_POST['g-recaptcha-response'];

$verifyResponse = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}"
);

$responseData = json_decode($verifyResponse);

if (!$responseData || !$responseData->success) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Captcha inválido. Intenta nuevamente.'
    ]);
    exit;
}

/* ==============================
   VALIDAR CAMPOS
================================ */
$name = strip_tags(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    http_response_code(400);
    echo json_encode([
        'status' => 'warning',
        'message' => 'Por favor completa todos los campos.'
    ]);
    exit;
}

/* ==============================
   ENVIAR CORREO
================================ */
$mail = new PHPMailer(true);

try {
    // SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gonzagaantonio012@gmail.com';
    $mail->Password   = 'ffui dmke uurr yxev'; // ⚠️ luego te recomiendo moverlo a .env
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Correo
    $mail->setFrom('gonzagaantonio012@gmail.com', 'Portafolio Web');
    $mail->addAddress('gonzagaantonio012@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde tu portafolio';

    $mail->Body = "
        <h3>Nuevo mensaje recibido</h3>
        <p><strong>Nombre:</strong> {$name}</p>
        <p><strong>Correo:</strong> {$email}</p>
        <p><strong>Mensaje:</strong><br>{$message}</p>
    ";

    $mail->AltBody = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";

    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Gracias por contactarme. Te responderé pronto.'
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Error al enviar el mensaje. Intenta más tarde.'
    ]);
}
