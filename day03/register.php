<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="userName content">
            <label for="userName">Họ và tên</label>
            <input type="text" id="userName" name="tendangnhap" value="">
        </div>
        <div class="gender content">
            <label for="gender">Giới tính</label>
                <?php 
                    $pages_array = array(
                        array(
                            "index"=> "0",
                            "name"=> "Nam",
                        ),
                
                        array(
                            "index"=>  "1",
                            "name"=>  "Nữ",
                        )
                );                 
                    for ($i=0; $i < count($pages_array) ; $i++) {   
                ?>
                            <input class="check" type="radio" id="<?= $pages_array[$i]["name"]?>" name="fav_language" value="<?= $pages_array[$i]["name"]?>">
                            <p class="check" for="<?= $pages_array[$i]["name"]?>"><?= $pages_array[$i]["name"]?></p><br>
                            <?php
                    }           
                ?>
        </div>
        <div class="select content">
            <label for="select">Phân khoa</label>
            <select name="" id="choose">
            <?php 
                 $khoa = array(
                    array(
                        "index"=>  "",
                        "name"=>  "",
                    ),
                    array(
                        "index"=> "MAT",
                        "name"=> "kHOA HỌC MÁY TÍNH",
                    ),
               
                    array(
                        "index"=>  "KDL",
                        "name"=>  "KHOA HỌC VẬT LIỆU",
                    )
               );          
                    foreach($khoa as $key=>$value){
                       ?>
                        <option value="<?= $value['index'] ?>"><?=  $value['name'] ?></option>
                        <?php
                    }
                    ?>
                    
                   
            </select>
        </div>
        <div class="register content">
            <button>Đăng ký</button>
        </div>
    </div>
</body>
</html>