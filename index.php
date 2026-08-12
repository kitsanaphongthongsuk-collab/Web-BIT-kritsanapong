<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    }

    body {
        background-color: #1b2838;
        color: #c6d4df;
        padding: 40px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    table {
        width: 100%;
        max-width: 940px;
        border-collapse: separate;
        border-spacing: 0 10px;
        border: none;
    }

    thead {
        background-color: #101822;
    }

    th {
        padding: 14px 16px;
        color: #8f98a0;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: left;
        border: none;
    }

    th:nth-child(1),
    th:nth-child(3),
    th:nth-child(5) {
        text-align: center;
    }

    tbody tr {
        background: rgba(0, 0, 0, 0.2);
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    tbody tr:hover {
        background: rgba(255, 255, 255, 0.08);
    }

    td {
        padding: 12px 16px;
        border: none;
        vertical-align: middle;
        font-size: 15px;
        color: #acb2b8;
    }

    td:nth-child(1) {
        text-align: center;
        font-size: 12px;
        color: #626366;
        font-weight: bold;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    td:nth-child(2) {
        font-size: 16px;
        font-weight: 600;
        color: #ffffff;
    }

    td:nth-child(3) {
        text-align: center;
        font-weight: bold;
        color: #beee11;
        font-size: 15px;
    }

    td:nth-child(4) {
        width: 220px;
    }

    td:nth-child(4) img {
        width: 200px;
        height: 95px;
        object-fit: cover;
        border-radius: 4px;
        display: block;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
    }

    td:nth-child(5) {
        text-align: center;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    td:nth-child(5) span{
        color: #67c1f5;
        background: rgba(103, 193, 245, 0.1);
        display: inline-block;
        margin-top: auto;
        padding: 4px 12px;
        border-radius: 3px;
        font-size: 12px;
    }

    .btn-link {
        display: inline-block;
        padding: 12px 32px;
        background: linear-gradient(90deg, #47bfff 0%, #1a44c2 100%);
        color: #ffffff ;
        text-decoration: none;
        border-radius: 3px;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        transition: all 0.2s ease;
    }

    .btn-link:hover {
        background: linear-gradient(90deg, #66cbff 0%, #2251e3 100%);
        box-shadow: 0 6px 20px rgba(71, 191, 255, 0.4);
    }

    .footer {
        width: 100%;
        background: #222;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: auto;
    }

</style>

    <?php

    //แสดง error
        // Report all PHP errors
        error_reporting(E_ALL);

    // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        include ('connect.php');

        // if(!$con){
        //     echo 'Can Not Connect DB.';
        // }else{
        //     echo 'Connect Success .';
        // }
    
    //            เลือกทั้งหมดจากตาราง games
    $sql = "SELECT * FROM games";
    $result = mysqli_query($con, $sql);
     // test

    ?>

<nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">🎮 Big Game Shops</a>
            <div class="nav-links">
                <a href="index.php">หน้าแรก</a>
                <a href="game_type.php">ประเภทเกม</a>
                <a href="manage_game.php" class="btn-manage">⚙️ จัดการข้อมูลเกม</a>
            </div>
        </div>
    </nav>

    <main class="main-container">
        <h2>🛒 รายการเกมทั้งหมด</h2>
    </main>

    <div class="table-responsive">

    <table border="1">
        <thead>
            <tr>
                <th>รหัสเกม</th>
                <th>ชื่อเกม</th>
                <th>ราคา</th>
                <th>ภาพปก</th>
                <th>ประเภท</th>
            </tr>
        </thead>
    
 <tbody>
    <?php
        foreach($result as $game) {
            ?>
            <tr>
                <td> <?= $game["game_id"] ?></td>
                <td> <?= $game["game_name"] ?></td>
                <td> <?= $game["game_price"] ?></td>

                <td> 
                    <img 
                        src="<?= $game ["game_cover"] ?>"
                        style="width:200px"
                    >
                </td>

                <td>
                    <span><?= $game["type_id"] ?></span>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>

</table>

    <br>
    <div style="text-align: center; margin-top: 15px; margin-bottom: 30px;">
        <a href="game_type.php" class="btn-link">ไปหน้า2</a>
    </div>

<footer class="footer">
    <p>@ Big Game Shops</p>
</footer>

</body>
</html>
