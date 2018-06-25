<?php 
    /*
        Template Name: Order Page
    */

    $str_json           = file_get_contents('php://input');
    $response           = json_decode($str_json, true);
    $content            = $response['content'];
    $__from             = $response['email'];
    
    $to = 'info@hairrooms.ru';
    $subject = 'Заявка на франшизу';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail( $to, $subject, $content, $headers, $_from);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> -->
    <?php echo '---- start ----';?>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:200px auto; padding:0; padding: 20px; font-family: Arial, sans-serif;">
    <tr>
    <td height="100%">
    <table border="0" cellpadding="0" cellspacing="0" style="margin: auto; padding:0;">
    <tr>
    <td id="table-container" style="border-radius: 10px; background: linear-gradient(to right, rgba(198, 22, 141, 0.85), rgba(219, 102, 154, 0.9)); width:600px; text-align: left; margin: 0 auto; padding: 50px 60px; box-shadow: 10px 20px 50px -1px rgba(203, 165, 187, 0.59);">
    <div style="position: relative;">
    <header style="text-align: left; margin: 15px 0; display: inline-block;">
    <h1 style="text-align: center; font-weight: 400; display: inline-block; margin: 0; font-size: 28px; letter-spacing: 1.5px; color:#fff;">Hairroom Франшиза</h1>
    <h1 style="color: #fff; font-size: 60px; text-transform: uppercase; margin: 0;text-shadow: 0 0, -6px 7px 0 #8a185a;">Заявка</h1>
    </header>
    <img class="logo" src="./img/hr_logo_think.svg" alt="изображение" style="padding-bottom: 0; text-align: right; float: right; max-width: 100px; margin-top: 0px;background-color: white; padding: 10px; border-radius: 15px;" width="100" height="100" />
    </div>
    <?php echo $content;?> 
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <?php echo '---- end ----'; ?>
</body>
</html> -->