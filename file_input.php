<?php 

if(isset($_FILES)){
    /** @var array $attachment: pegando o arquivo (vai estar com o nome diferente do enviado)  */
    $attachment = (isset($_FILES['input-file-name']['tmp_name'])) ? $_FILES['input-file-name']['tmp_name'] : 'sem anexo';
    /** @var array $att_name: pegando nome do arquivo (o nome que foi enviado)*/
    $att_name = (isset($_FILES['input-file-name']['name'])) ? $_FILES['input-file-name']['name'] : 'sem anexo';
    
    /** aqui pega todos os anexos que tiver no form */
    foreach ($_FILES as $key => $file) {
        $attachment = (isset($_FILES[$key]['tmp_name'])) ? $_FILES[$key]['tmp_name'] : 'sem anexo';
        $att_name = (isset($_FILES[$key]['name'])) ? $_FILES[$key]['name'] : 'sem anexo';
        $mail->addAttachment($attachment, $att_name);  /** utilizei o PHPMail para envio de email*/ 
    }
}
