<!DOCTYPE html>
<html>
<head>
<title>Top-Up Store</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #fff8da;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 700px;
        background: #fff;
        margin: auto;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    h1 {
        color: #d9a300;
        text-align: center;
    }
    button {
        background: #d9a300;
        color: white;
        padding: 10px 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 10px;
    }
    .result {
        margin-top: 15px;
        background: #ffefb0;
        padding: 15px;
        border-radius: 10px;
    }
</style>
</head>

<body>

<div class="container">

    <?php include "header.php"; ?>

    <form method="POST">
        <label>Select a Game:</label><br>
        <select name="game">
            <option value="Mobile Legends">Mobile Legends</option>
            <option value="CODM">Call of Duty Mobile</option>
            <option value="Valorant">Valorant</option>
        </select><br><br>

        <label>Amount of Diamonds/Points:</label>
        <input type="number" name="amount" min="10" required><br><br>

        <button type="submit">Top Up Now</button>
    </form>

    <?php
    require "config.php";

    if ($_POST) {
        $game = $_POST["game"];
        $amount = $_POST["amount"];

        // Fixed rate per game
        if ($game == "Mobile Legends") $rate = 1;
        if ($game == "CODM") $rate = 0.9;
        if ($game == "Valorant") $rate = 0.5;

        $total = ($amount * $rate) + $fee;

        echo "<div class='result'>";
        echo "<strong>Top-Up Summary</strong><br>";
        echo "Game: $game<br>";
        echo "Amount: $amount<br>";
        echo "Processing Fee: ₱$fee<br>";
        echo "Total Cost: ₱$total<br><br>";

        require "message.php";
        echo "</div>";
    }
    
    include "footer.php";
    ?>

</div>

</body>
</html>
