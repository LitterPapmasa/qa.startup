<?
$recMail = 'qastartup@mail.ru';       // Куда высылать письмо
$subject = 'Заявка с сайта';             //Если не указана в коде ниже
$from_user = 'QA Star Up';              // Имя отправителя
$from_mail = 'info@qastartup.com.ua';  // Почта отправителя

function clearData($data){
    $data = trim(strip_tags($data)); 
    return $data;
}
function mail_utf8($to, $from_user , $from_email, $subject = '(No subject)', $message = '')
   { 
      $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
      $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

      $headers = "From: $from_user <$from_email>\r\n". 
             //  "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 

     return mail($to, $subject, $message, $headers); 
}



if (!isset($_POST['name']) or empty($_POST['name'])) {
	$error1 = "Ошибка поля ввода \"Имя\"<br />";
} else {
    $error1 = NULL;
    $name = clearData($_POST['name']);
}
if (!isset($_POST['message']) or empty($_POST['message'])) {
	$error4 = "Ошибка поля ввода \"Сообщение\"<br />";
} else {
    $error4 = NULL; 
    $mes = clearData($_POST['message']);
}

if (isset($_POST['form-name'])) {
    switch ($_POST['form-name']) {
    case 'contact-form': 
            
            if (!isset($_POST['email']) or empty($_POST['email'])) {
                $error2 = "Ошибка поля ввода \"Email\"<br />";                
            } else {
                $error2 = NULL;
                $error3 = NULL;
                $subject = 'Вопрос';
                $email =  clearData($_POST['email']);
                $message.= "<b>Имя:</b> \n <br /> ";
                $message.= $name."\n <br /> \n <br /> ";
                $message.= "<b>Почта:</b> \n <br /> ";
                $message.= $email."\n <br /> \n <br /> ";
                $message.= "<b>Сообщение:</b> \n <br /> ";
                $message.= $mes;
            }
            
            break;
    case 'callback-form':
            if (!isset($_POST['phone']) or empty($_POST['phone'])) {
                $error2 = "Ошибка поля ввода \"Phone\"<br />";
            } else {
                $error2 = NULL; 
                $error3 = NULL;
                $subject = 'Обратный звонок';
                $phone = clearData($_POST['phone']);
                $message.= "<b>Имя:</b> \n <br /> ";
                $message.= $name."\n <br /> \n <br /> ";
                $message.= "<b>Номер телефона:</b> \n <br /> ";
                $message.= $phone."\n <br /> \n <br /> ";
                $message.= "<b>Сообщение:</b> \n <br /> ";
                $message.= $mes;
            }
            break;
    case 'feedback-form':
            if (!isset($_POST['email']) or empty($_POST['email'])) {
                $error2 = "Ошибка поля ввода \"Email\"<br />"; 
            } else {
                $error2 = NULL;
                $email =  clearData($_POST['email']);
                $error3 = NULL; 
                $subject = 'Общая форма'; 
                $message.= "<b>Имя:</b> \n <br /> ";
                $message.= $name."\n <br /> \n <br /> ";
                $message.= "<b>Почта:</b> \n <br /> ";
                $message.= $email."\n <br /> \n <br /> ";
                $message.= "<b>Сообщение:</b> \n <br /> ";
                $message.= $mes;
            }
            break;
    case 'freelesson-form':
            if (!isset($_POST['email']) or empty($_POST['email'])) {
                $error2 = "Ошибка поля ввода \"Email\"<br />"; 
            } else {
                $error2 = NULL;
                $email =  clearData($_POST['email']);
            }
            if (!isset($_POST['phone']) or empty($_POST['phone'])) {
                $error2 = "Ошибка поля ввода \"Phone\"<br />";
            } else {
                $error2 = NULL; 
                $phone = clearData($_POST['phone']);
            }
            if (!isset($_POST['courses']) or empty($_POST['courses'])) {
                $error3 = "Ошибка поля ввода \"Courses\"<br />"; 
            }else {
                $error3 = NULL;
                $error4 = NULL;
                $subject = 'Бесплатное занятие';                
                $courses= clearData($_POST['courses']);
                $message.= "<b>Имя: </b>\n <br /> ";
                $message.= $name."\n <br /> \n <br /> ";
                $message.= "<b>Почта:</b> \n <br /> ";
                $message.= $email."\n <br /> \n <br /> ";
                $message.= "<b>Телефон:</b> \n <br /> ";
                $message.= $phone."\n <br /> \n <br /> ";
                $message.= "<b>Курс:</b>\n <br /> ";
                $message.= $courses."\n <br /> \n <br /> ";
                
            }
            break;
    default : echo '<p class="alert-danger">Сообщение не отправлено. <br /> форма не найдена</p>';        
    }
}else {
    echo '<p class="alert-danger">Сообщение не отправлено. <br /> Имя формы не задано</p>';
}

$messageFull = '
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>'.$subject.'</title>
</head>
<body>
';
$messageFull.= $message;
$messageFull.= '
</body>
</html>';

if (empty($error1) and empty($error2) and empty($error3) and empty($error4)) {

    if (mail_utf8($recMail, $form_user, $from_mail, $subject, $messageFull)) {
            echo '<p class="alert-success animation-fadeIn">Наши специалисты свяжутся с Вами. <br /> Спасибо! </p>';
    } else {
        echo '<p class="alert-danger">Сообщение не отправлено. <br /> Попробуйте еще раз. </p>';
    }
} else {
        echo '<p class="alert-danger">Сообщение не отправлено. <br />'.$error1.$error2.$error3.$error4.'</p>';
}

?>