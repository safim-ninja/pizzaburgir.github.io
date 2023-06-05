<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pizza Burgir</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="unn4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;600;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="header">
        <nav>
            <div class="text-box">
                <h1>PizzaBurgir</h1>
            </div>
            <div class="navigation">
                <ul>

                    <li><a href="">Menu</a></li>
                    <?php if (isset($user)): ?>
                        <li><a href="">Burger</a></li>
                        <li><a href="">Pizza</a></li>
                        <li><a href="">Drinks</a></li>
                        <li><a href="">Set-Meal</a></li>
                        <li><a href="logout.php">Log out</a></li>
                        <?php else: ?>    
                            <li><a href="login.php">Log in</a></li>
                        <li><a href="signup.html">sign up</a></li>
                        <?php endif; ?>
                    </ul>
            </div>
        </nav>
    </div>
    <?php if (isset($user)): ?>
    
    <section class="items">
        <h1>Items available</h1>
        <div class="row">
            <div class="item-col">
                <h3>Burger</h3>
                <ul>
                    <li>
                        Chichen Burger

                    </li>
                </ul>
            </div>
            <div class="item-col">
                <h3>pizza</h3>
                <p>adsdasdasda</p>
            </div>
            <div class="item-col">
                <h3>set-menu</h3>
                <p>adsdasdasda</p>
            </div>
        </div>
    </section>

    
    
    



    <?php else: ?>    
        <div class="text">
            <h1>Best Pizza and Burger</h1>
            <a href="signup.html">Order now</a>
        </div>
    <?php endif; ?>
    
</body>
</html>