<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Report all PHP errors
        error_reporting(E_ALL);

        // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        
        include 'action/connect.php';
    
        // เลือกทั้งหมดจากตาราง games
        $sql = "SELECT * FROM games";
        
        $result = mysqli_query($con, $sql);
    ?>

    <table border="1" cellpadding="8" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>type_id</th>
                <th>type_name</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($result as $game) {
                ?>
                <tr>
                    <td><?= $game["type_id"] ?></td>
                    <td>
                        <?php 
                        // เปลี่ยนตัวเลข type_id ให้กลายเป็นข้อความชื่อประเภทเกมที่คุณต้องการ
                        switch($game["type_id"]) {
                            case 1:
                                echo "openwold";
                                break;
                            case 2:
                                echo "แอ็คชั่น";
                                break;
                            case 3:
                                echo "อีสปอร์ต";
                                break;
                                
                            case 4:
                                echo "fps";
                                break;
                            case 5;
                                echo "rpg";
                                break;
                            default:
                                echo "ไม่ระบุประเภท (รหัส: " . $game["type_id"] . ")";
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>

    <br>
    <div style="text-align:  ; margin-top: 20px;">
        <a href="index.php" class="btn-link" style="color: #000000; font-family: sans-serif; text-decoration: none; font-weight: bold;">กลับหน้าหลัก</a>
    </div>

</body>
</html>