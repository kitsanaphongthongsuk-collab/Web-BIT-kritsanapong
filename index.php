<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    //แสดง error
        // Report all PHP errors
        error_reporting(E_ALL);

    // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
            include 'action/connect.php';

        // if(!$con){
        //     echo 'Can Not Connect DB.';
        // }else{
        //     echo 'Connect Success .';
        // }
    
    //            เลือกทั้งหมดจากตาราง games
    $sql = "SELECT * FROM games";
    $result = mysqli_query($con, $sql);
     // test

     var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสเกม</th>
            <th>ชื่อเกม</th>
            <th>ราคา</th>
            <th>ภาพปก</th>
            <th>ประเภท</th>
        </thead>
    

    <?php
        foreach($result as $game) {
            ?>
            <tr>
                <td> <?= $game["game_id"] ?></td>
                <td> <?= $game["game_name"] ?></td>
                <td> <?= $game["game_price"] ?></td>
                <td> <img 
                        src="<?= $game ["game_cover"] ?>"
                        style="width:200px"
                    ></td>
                <td><?= $game["type_id"] ?></td>
                    
            </tr>
            <?php
        }
        ?>
    </table>

    <br>
    <div style="text-align: center; margin-top: 10px;">
    <a href="game_type.php" class="btn-link" style="color: #000000;">ไปหน้า2</a>
    </div>

</body>
</html>