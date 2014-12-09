<?php

$list = $_GET['list'];
$minPrice = floatval($_GET['minPrice']);
$maxPrice = floatval($_GET['maxPrice']);
$filter = $_GET['filter'];
$order = $_GET['order'];

//$list = 'SONY VAIO SVF13N1X2ES | laptop | INTEL CORE i5-4260U, 4 GB RAM, INTEL HD GRAPHICS 5000 | 2399.00
//PACKARD BELL IMEDIA S2185 (SFF) | desktop | INTEL CELERON N2815 Dual Core, 4 GB RAM, INTEL HD GRAPHICS | 369.00
//ACER ASPIRE Z3-600 | desktop | AMD QUAD-CORE A4-5000 1.50 GHz, 4 GB RAM, AMD RADEON HD 8330 | 1399.00
//APPLE iMAC Z0MQ00071/BG | desktop | INTEL CORE i7-4770T, 16 GB RAM, NVIDIA GEFORCE GT 750M | 2949.00
//ACER ASPIRE V5-123-12104G50NSS | laptop | | INTEL CELERON 1007U, 2 GB RAM, INTEL HD GRAPHICS | 489.00
//ACER ASPIRE XC-605 | desktop | INTEL PENTIUM 2117U, 4 GB RAM, INTEL HD GRAPHICS | 749.99
//DELL INSPIRON 3847/476756/477784 | laptop | Intel Core i5-4510U, 6 GB RAM, NVIDIA GeForce 9800GT | 1049.49
//';
//$minPrice = 590.00;
//$maxPrice = 1600.00;
//$filter = 'desktop';
//$order = 'ascending';

$pattern = '/(.*)\s(laptop|desktop)\s(.*)\s(\d+\.*\d*)/';
$list = preg_replace("/\|/", " ", $list);
preg_match_all($pattern, $list, $pcs);

$computers = [];
$ids = 1;

for ($i = 0; $i < count($pcs[0]); $i += 1) {
    $pc = new stdClass();
    $pc->id = $ids;
    $pc->name = trim($pcs[1][$i]);
    $pc->type = trim($pcs[2][$i]);
    $pc->components = explode(", ", trim($pcs[3][$i]));
    $pc->price = trim($pcs[4][$i]);
    $ids++;

    if ($pc->price >= $minPrice && $pc->price <= $maxPrice) {
        $computers[] = $pc;
    }
}

$computers = array_filter($computers, function($comp) use ($filter) {
    return $filter == $comp->type ? true : ($filter == "all" ? true : false);
});

usort($computers, function ($a, $b) {
    global $order;
    if ($order == 'ascending') {
        if (floatval($a->price) == floatval($b->price)) {
            return $a->id < $b->id ? -1 : 1;
        }
        return floatval($a->price) < floatval($b->price) ? -1 : 1;
    } else {
        if (floatval($a->price) == floatval($b->price)) {
            return $a->id < $b->id ? -1 : 1;
        }
        return floatval($a->price) > floatval($b->price) ? -1 : 1;
    }
});

foreach ($computers as $comp) {
    echo '<div class="product" id="product' . htmlspecialchars($comp->id) . '">';
    echo '<h2>' . htmlspecialchars($comp->name) . '</h2>';
    echo '<ul>';
    foreach ($comp->components as $cmp) {
        echo '<li class="component">' . htmlspecialchars($cmp) . '</li>';
    }
    echo '</ul>';
    echo '<span class="price">' . htmlspecialchars($comp->price) . '</span>';
    echo '</div>';
}
?>