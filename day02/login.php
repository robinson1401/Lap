<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
     function show()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('H:i d/m/Y');
        
        $str = '
        <div style=" max-width:500px;margin:0 auto;border:2px solid #0b5ba6"> 
        <div style="max-width:400px;margin:0 auto;">
            <p style="background:#A9A9A9" >Bây giờ là: '.$date.'</p> 
        <form action="" method="">
            <label style="background:#5b9bd5;padding:8px;color:white; border: 1px solid #0b5ba6" for="username">Tên đăng nhập:</label>  <input  style="padding:8px;width:49%;border: 1px solid #0b5ba6" id="username" type="text" name="tendangnhap" value=""></p>
            <p><label style="background:#5b9bd5;padding:8px;color:white; border: 1px solid #0b5ba6" for="username">Mật khẩu:</label>  <input style="padding:8px;width:49%;border: 1px solid #0b5ba6" type="password" name="password" value=""></p>
        <div style="max-width:100px;margin:0 auto;margin-bottom:30px;">
        <button style="background:#5b9bd5;padding:8px;color:white; border: 1px solid #0b5ba6; border-radius: 5px" type="submit">Đăng nhập</button></div>
        </form></div></div>';
        echo  $str;
    }
        show()
        ?>
 <style>
    label {
        width:40%;
        display: inline-block;
    }
 </style>
</body>
</html>