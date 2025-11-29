<!DOCTYPE html>
<html>
<head>
<title>Game Store</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #e6edff;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 750px;
        background: #fff;
        margin: auto;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    h1 {
        color: #4a63ff;
        text-align: center;
    }
    .game-box {
        background: #edf1ff;
        padding: 15px;
        border-radius: 10px;
        margin-top: 10px;
    }
    .rating {
        color: #ffd900;
    }
</style>
</head>

<body>

<div class="container">
    <h1>🎮 Game Store</h1>

    <h2>Available Stock (WHILE Loop)</h2>
    <div class="game-box">
        <?php
        $stockz = 1;
        while ($stockz <= 5) {
            echo "Game Copy #$stockz: In Stock<br>";
            $stockz++;
        }
        ?>
    </div>

    <h2>Game Catalog (FOR Loop)</h2>
    <div class="game box">
        <?php
        $games = [
            "God of war" => 5,
            "Minecraft" => 4,
            "Terraria" => 5,
            "Ghost of yotei" => 3
        ];

        foreach ($games as $game => $stars) {
            echo "<strong>$game</strong><br>";
            echo "<span class='rating'>";
            for ($i = 0; $i < $stars; $i++) echo "★";
            echo "</span><br><br>";
        }
        ?>
    </div>

</div>

</body>
</html>
