<!DOCTYPE html>
<html>
<head>
<title>Grill Store</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #fdf1e6;
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
        color: #ff6a3d;
        text-align: center;
    }
    .item-box {
        background: #ffe4d4;
        padding: 15px;
        border-radius: 10px;
        margin-top: 10px;
    }
    button {
        background: #ff6a3d;
        color: white;
        padding: 10px 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 10px;
    }
    button:hover {
        background: #e85727;
    }
    .result {
        margin-top: 15px;
        background: #ffede3;
        padding: 15px;
        border-radius: 10px;
    }
</style>
</head>

<body>

<div class="container">
    <h1>🔥 Grill Store</h1>

    <form method="POST">
        <div class="item-box">
            <label>Choose an item:</label><br>
            <select name="item" required>
                <option value="Chicken Skewers">Chicken Skewers - ₱30</option>
                <option value="Pork BBQ">Pork BBQ - ₱45</option>
                <option value="Liempo">Liempo - ₱120</option>
            </select><br><br>

            <label>Quantity:</label>
            <input type="number" name="qty" min="1" required>
        </div>

        <button type="submit">Place Order</button>
    </form>

    <?php
    if ($_POST) {
        $item = $_POST["item"];
        $qty = $_POST["qty"];

        // prices
        if ($item == "Chicken Skewers") $price = 30;
        if ($item == "Pork BBQ") $price = 45;
        if ($item == "Liempo") $price = 120;

        $total = $price * $qty;

        echo "<div class='result'>";
        echo "<strong>Order Summary:</strong><br>";
        echo "Item: $item<br>";
        echo "Quantity: $qty<br>";
        echo "Total: ₱$total<br><br>";

        // IF ELSE PROMO
        if ($total >= 200) {
            echo "🎉 Promo: You get a FREE Iced Tea!";
        } else {
            echo "Spend ₱200 to get a FREE Iced Tea.";
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
