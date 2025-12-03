<?php
declare(strict_types=1);

include 'includes/header.php';
include 'includes/nav.php';

$games = [
    "Call of Duty BO7" => [ "price" => 2990, "stock" => 5 ],
    "Minecraft" => [ "price" => 1990, "stock" => 15 ],
    "Tekken 8" => [ "price" => 3490, "stock" => 8 ],
    "Spider-Man 2" => [ "price" => 3590, "stock" => 20 ],
    "Terraria" => [ "price" => 750, "stock" => 11 ],
    "Guilty Gear Strive" => [ "price" => 2890, "stock" => 6 ],
];

global $tax_rate;
$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
?>

<div class="table-box">
    <h2>Stock Monitoring</h2>

    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Reorder?</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (₱)</th>
        </tr>

        <?php foreach ($games as $game => $data) { ?>
        <tr>
            <td><?= $game ?></td>
            <td><?= $data["stock"] ?></td>
            <td><?= get_reorder_message($data["stock"]) ?></td>
            <td><?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
            <td><?= number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2) ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
