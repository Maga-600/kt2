<?php


session_start();

   $cislo_1 = rand(0, 9);
   $cislo_2 = rand(0, 9);

if($_POST['submit']) {
     if(is_numeric($_POST['captcha'])){
        if($_SESSION['result'] == $_POST['captcha']){
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        
        
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
          }else{
             echo 'Неверный ответ!';
          }
     }else{
        echo 'Введите число!';
     }
     
     }
   

   $_SESSION['result'] = $cislo_1 + $cislo_2;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha на PHP</title>
    <style>
        input[name=submit]{
            background: #39b5cc;
            color: #fff;
            border-radius: 3px;
            border: none;
            padding: 6px 10px;
            margin: 10px 0px 10px 0px;
        }

    </style>
</head>
<body>
     <form method="post" action="">
         <input type="text" name="name_text"><br>
         <span><?php echo "$cislo_1 + $cislo_2 ="; ?></span><br>
         <input type="text" name="captcha" placeholder="Введите ответ!"><br>
         <input type="submit" name="submit" value="Отправить"><br>

     </form>
</body> 
</html>