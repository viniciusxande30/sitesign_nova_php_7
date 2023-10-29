<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $mensagem = $_POST["message"];

    // Configurar destinatário e assunto
    $destinatario = "vinicius.xande30@gmail.com";
    $assunto = "Nova mensagem do formulário de contato";

    // Montar corpo do e-mail
    $corpo_email = "Nome: $name\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Telefone: $phone\n";
    $corpo_email .= "Mensagem:\n$message";

    // Enviar e-mail
    mail($destinatario, $assunto, $corpo_email);

    // Redirecionar após o envio
    header("Location: obrigado");
} else {
    // Se não for uma requisição POST, redirecionar para o formulário
    header("Location: obrigado");
}

// if (isset($_GET['segment2']) AND $_GET['segment2'] == 'enviar') {
//     require_once(MODEL .'phpmailer/class.phpmailer.php');

//     $mail = new PHPMailer();
//     $mail->IsSMTP();
//     $mail->IsHTML(true);
//     $mail->Host       = "br40-cp.valueserver.com.br";
//     $mail->Username   = 'envios@evoclick.com.br';
//     $mail->Password   = 'qR1#gEQt_F.^';
//     $mail->SMTPAuth   = true;
//     $mail->SMTPSecure = "ssl";
//     $mail->Port       = 465;
//     // $mail->SMTPDebug  = 1;
//     $mail->CharSet    = 'utf-8';
//     $mail->From       = $_POST['email'];
//     $mail->FromName   = $_POST['nome'];

//     $mail->Subject    = $_POST['func'] == '0' ? 'Contato do site ('. URL .')' : 'Cotação do site ('. URL .')';
//     $mail->Body       = $_POST['func'] == '0' ? bodyContact($_POST) : bodyQuotation($_POST);

//     $mail->AddAddress(TEXT_EMAIL);
//     $mail->AddBCC('lucas.alves@evoclick.com.br');
//     $mail->addReplyTo($_POST['email'], $_POST['nome']);

//     $enviado = $mail->Send();

//     // Limpa os destinatários e os anexos
//     $mail->ClearAllRecipients();
//     $mail->ClearAttachments();

//     echo ($enviado) ? "<script>alert('E-mail enviado com sucesso!');</script>" : "<script>alert('Erro ao enviar seu e-mail');</script><b>Informações do erro:</b> " . $mail->ErrorInfo;
// }

// echo '<script>location.href="'. ROOT.$_POST['location'] .'";</script>';

// function bodyContact($post) {
//     $body = '<!doctype html><html><head><meta name="viewport" content="width=device-width" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Nova cotação do site</title><style>img {border: none;-ms-interpolation-mode: bicubic;max-width: 100%;}body {background-color: #F8F8F8;font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}table {border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;}table td {font-family: sans-serif;font-size: 14px;vertical-align: top;}.body {background-color: #F8F8F8;width: 100%;}.container {display: block;margin: 0 auto !important;max-width: 580px;padding: 10px;width: 580px;}.content {box-sizing: border-box;display: block;margin: 0 auto;max-width: 580px;padding: 10px;}.main {background: #ffffff;border-radius: 3px;width: 100%;}.wrapper {box-sizing: border-box;padding: 20px;}.content-block {padding-bottom: 10px;padding-top: 10px;}.footer {clear: both;margin-top: 10px;text-align: center;width: 100%;}.footer td, .footer p, .footer span, .footer a {color: #999999;font-size: 12px;text-align: center;}h1, h2, h3, h4 {color: #000000;font-family: sans-serif;font-weight: 400;line-height: 1.4;margin: 0;margin-bottom: 30px;}h1 {font-size: 35px;font-weight: 300;text-align: center;text-transform: capitalize;}p, ul, ol {font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;color: #0b0b0b;}p li, ul li, ol li {list-style-position: inside;margin-left: 5px;}a {color: #1e73be;text-decoration: underline;}.btn {box-sizing: border-box;width: 100%;}.btn>tbody>tr>td {padding-bottom: 15px;}.btn table {width: auto;}.btn table td {background-color: #ffffff;border-radius: 5px;text-align: center;}.btn a {background-color: #ffffff;border: solid 1px #1e73be;border-radius: 5px;box-sizing: border-box;color: #1e73be;cursor: pointer;display: inline-block;font-size: 14px;font-weight: bold;margin: 0;padding: 12px 25px;text-decoration: none;text-transform: capitalize;}.btn-primary table td {background-color: #1e73be;}.btn-primary a {background-color: #1e73be;border-color: #1e73be;color: #ffffff;}.last {margin-bottom: 0;}.first {margin-top: 0;}.align-center {text-align: center;}.align-right {text-align: right;}.align-left {text-align: left;}.clear {clear: both;}.mt0 {margin-top: 0;}.mb0 {margin-bottom: 0;}.preheader {color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;mso-hide: all;visibility: hidden;width: 0;}.powered-by a {text-decoration: none;}hr {border: 0;border-bottom: 1px solid #f6f6f6;Margin: 20px 0;}@media only screen and (max-width: 620px) {table[class=body] h1 {font-size: 28px !important;margin-bottom: 10px !important;}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a {font-size: 16px !important;}table[class=body] .wrapper, table[class=body] .article {padding: 10px !important;}table[class=body] .content {padding: 0 !important;}table[class=body] .container {padding: 0 !important;width: 100% !important;}table[class=body] .main {border-left-width: 0 !important;border-radius: 0 !important;border-right-width: 0 !important;}table[class=body] .btn table {width: 100% !important;}table[class=body] .btn a {width: 100% !important;}table[class=body] .img-responsive {height: auto !important;max-width: 100% !important;width: auto !important;}}@media all {.ExternalClass {width: 100%;}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}.apple-link a {color: inherit !important;font-family: inherit !important;font-size: inherit !important;font-weight: inherit !important;line-height: inherit !important;text-decoration: none !important;}.btn-primary table td:hover {background-color: #34495e !important;}.btn-primary a:hover {background-color: #34495e !important;border-color: #34495e !important;}}</style></head><body class=""><table border="0" cellpadding="0" cellspacing="0" class="body"><tr><td>&nbsp;</td><td class="container"><div class="content"><span class="preheader">Nova cotação solicitada via formulário do site.</span><table class="main"><tr><td class="wrapper"><table border="0" cellpadding="0" cellspacing="0"><tr><td>';

//     $body .= '<p>Olá '. COMPANY_NAME .':</p>';
//     if (isset($post['observacoes']) AND $post['observacoes'] != '') $body .= '<p style="margin:0"><b>Observações:</b></p><p>'. nl2br($post['observacoes']) .'</p>';
//     $body .= '<p style="margin:0">Atenciosamente, <br> '. $post['nome'] .' (<a href="mailto:'. $post['email'] .'">'. $post['email'] .'</a>) <br>';
//     if (isset($post['telefone']) AND $post['telefone'] != '') $body .= '<a href="tel:55'. str_replace(['(', ')', '-', ' ', '.'], '', $post['telefone']) .'">'. $post['telefone'] .'</a>';
//     $body .= '</p>';
//     $body .= '</td></tr></table></td></tr></table><div class="footer"><table border="0" cellpadding="0" cellspacing="0"><tr><td class="content-block"><span class="apple-link">'. date('Y') .' © '. COMPANY_NAME .' '. COMPANY_CNPJ .'</span></td></tr><tr><td class="content-block"><span class="apple-link"><a href="'. LINK_EMAIL .'">'. TEXT_EMAIL .'</a><br><a href="'. LINK_PHONE .'">'. TEXT_PHONE .'</a> | <a href="'. LINK_WHATSAPP .'">'. TEXT_WHATSAPP .'</a></span></td></tr></table></div></div></td><td>&nbsp;</td></tr></table></body></html>';

//     return $body;
// }

// function bodyQuotation($post) {
//     $body = '<!doctype html><html><head><meta name="viewport" content="width=device-width" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Nova cotação do site</title><style>img {border: none;-ms-interpolation-mode: bicubic;max-width: 100%;}body {background-color: #F8F8F8;font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}table {border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;}table td {font-family: sans-serif;font-size: 14px;vertical-align: top;}.body {background-color: #F8F8F8;width: 100%;}.container {display: block;margin: 0 auto !important;max-width: 580px;padding: 10px;width: 580px;}.content {box-sizing: border-box;display: block;margin: 0 auto;max-width: 580px;padding: 10px;}.main {background: #ffffff;border-radius: 3px;width: 100%;}.wrapper {box-sizing: border-box;padding: 20px;}.content-block {padding-bottom: 10px;padding-top: 10px;}.footer {clear: both;margin-top: 10px;text-align: center;width: 100%;}.footer td, .footer p, .footer span, .footer a {color: #999999;font-size: 12px;text-align: center;}h1, h2, h3, h4 {color: #000000;font-family: sans-serif;font-weight: 400;line-height: 1.4;margin: 0;margin-bottom: 30px;}h1 {font-size: 35px;font-weight: 300;text-align: center;text-transform: capitalize;}p, ul, ol {font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;color: #0b0b0b;}p li, ul li, ol li {list-style-position: inside;margin-left: 5px;}a {color: #1e73be;text-decoration: underline;}.btn {box-sizing: border-box;width: 100%;}.btn>tbody>tr>td {padding-bottom: 15px;}.btn table {width: auto;}.btn table td {background-color: #ffffff;border-radius: 5px;text-align: center;}.btn a {background-color: #ffffff;border: solid 1px #1e73be;border-radius: 5px;box-sizing: border-box;color: #1e73be;cursor: pointer;display: inline-block;font-size: 14px;font-weight: bold;margin: 0;padding: 12px 25px;text-decoration: none;text-transform: capitalize;}.btn-primary table td {background-color: #1e73be;}.btn-primary a {background-color: #1e73be;border-color: #1e73be;color: #ffffff;}.last {margin-bottom: 0;}.first {margin-top: 0;}.align-center {text-align: center;}.align-right {text-align: right;}.align-left {text-align: left;}.clear {clear: both;}.mt0 {margin-top: 0;}.mb0 {margin-bottom: 0;}.preheader {color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;mso-hide: all;visibility: hidden;width: 0;}.powered-by a {text-decoration: none;}hr {border: 0;border-bottom: 1px solid #f6f6f6;Margin: 20px 0;}@media only screen and (max-width: 620px) {table[class=body] h1 {font-size: 28px !important;margin-bottom: 10px !important;}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a {font-size: 16px !important;}table[class=body] .wrapper, table[class=body] .article {padding: 10px !important;}table[class=body] .content {padding: 0 !important;}table[class=body] .container {padding: 0 !important;width: 100% !important;}table[class=body] .main {border-left-width: 0 !important;border-radius: 0 !important;border-right-width: 0 !important;}table[class=body] .btn table {width: 100% !important;}table[class=body] .btn a {width: 100% !important;}table[class=body] .img-responsive {height: auto !important;max-width: 100% !important;width: auto !important;}}@media all {.ExternalClass {width: 100%;}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}.apple-link a {color: inherit !important;font-family: inherit !important;font-size: inherit !important;font-weight: inherit !important;line-height: inherit !important;text-decoration: none !important;}.btn-primary table td:hover {background-color: #34495e !important;}.btn-primary a:hover {background-color: #34495e !important;border-color: #34495e !important;}}</style></head><body class=""><table border="0" cellpadding="0" cellspacing="0" class="body"><tr><td>&nbsp;</td><td class="container"><div class="content"><span class="preheader">Nova cotação solicitada via formulário do site.</span><table class="main"><tr><td class="wrapper"><table border="0" cellpadding="0" cellspacing="0"><tr><td>';

//     $body .= '<p>Olá '. COMPANY_NAME .', gostaria de uma cotação:</p>';
//     if (isset($post['origem']) AND $post['origem'] != '') $body .= '<p style="margin:0"><b>Origem:</b> '. $post['origem'] .'</p>';
//     if (isset($post['destino']) AND $post['destino'] != '') $body .= '<p style="margin:0"><b>Destino:</b> '. $post['destino'] .'</p>';
//     if (isset($post['valor_nf']) AND $post['valor_nf'] != '') $body .= '<p style="margin:0"><b>Valor da nota fiscal:</b> '. $post['valor_nf'] .'</p>';
//     if (isset($post['n_volumes']) AND $post['n_volumes'] != '') $body .= '<p style="margin:0"><b>Nº de volumes:</b> '. $post['n_volumes'] .'</p>';
//     if (isset($post['peso']) AND $post['peso'] != '') $body .= '<p style="margin:0"><b>Peso da carga:</b> '. $post['peso'] .'</p>';
//     if (isset($post['observacoes']) AND $post['observacoes'] != '') $body .= '<p style="margin:0"><b>Observações:</b></p><p>'. nl2br($post['observacoes']) .'</p>';


//     $body .= '<p style="margin:0">Atenciosamente, <br> '. $post['nome'] .' (<a href="mailto:'. $post['email'] .'">'. $post['email'] .'</a>) <br>';
//     if (isset($post['telefone']) AND $post['telefone'] != '') $body .= '<a href="tel:55'. str_replace(['(', ')', '-', ' ', '.'], '', $post['telefone']) .'">'. $post['telefone'] .'</a>';
//     $body .= '</p>';

//     $body .= '</td></tr></table></td></tr></table><div class="footer"><table border="0" cellpadding="0" cellspacing="0"><tr><td class="content-block"><span class="apple-link">'. date('Y') .' © '. COMPANY_NAME .' '. COMPANY_CNPJ .'</span></td></tr><tr><td class="content-block"><span class="apple-link"><a href="'. LINK_EMAIL .'">'. TEXT_EMAIL .'</a><br><a href="'. LINK_PHONE .'">'. TEXT_PHONE .'</a> | <a href="'. LINK_WHATSAPP .'">'. TEXT_WHATSAPP .'</a></span></td></tr></table></div></div></td><td>&nbsp;</td></tr></table></body></html>';

//     return $body;
// }
