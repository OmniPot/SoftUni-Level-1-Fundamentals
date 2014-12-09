<?php

$list = $_GET['priceList'];

//$list = '<table class="priceListTable">  <tr>   <th>Product</th>    <th>Category</th>    <th>Price</th>   <th>Currency</th></tr><tr> <td>8GB DDR3L 1600 KINGSTON SODIMM</td><td>RAM</td><td>87.00</td>  <td>  USD</td></tr> <tr> <td>500GB Toshiba, SATA 6Gb/s, 7200rpm, 32MB</td> <td>HDD</td> <td>88.41</td> <td>BGN </td>
//</tr><tr><td>AMD A10-5800K X4 3.8GHz, 4MB Cache</td><td>CPU</td>   <td> 186.00</td> <td>BGN</td></tr> <tr> <td> SSD 2.5&quot;, 120GB, Corsair F120 LS, SATA3</td> <td> HDD</td> <td> 180.50</td> <td> BGN </td>  </tr>  <tr>     <td>ASRock B75M-GL R2.0</td><td>motherboard</td> <td>  47.55</td> <td>EUR</td>  </tr> <tr> <td>1TB Toshiba, SATA 6Gb/s, 7200rpm, 32MB</td> <td>HDD</td><td> 52.82 </td> <td>EUR</td></tr><tr><td>16GB Micro SDHC, A-Data, Class10</td><td>RAM
//</td><td>15.03</td><td>BGN</td></tr></table>
//';

$pattern = "/\s*<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>\s*/";
preg_match_all($pattern, $list, $matches);

$products = [];

for ($i = 0; $i < count($matches[0]); $i += 1) {
    $category = html_entity_decode($matches[2][$i]);
    $product = [
        'product' => html_entity_decode($matches[1][$i]),
        'price' => html_entity_decode($matches[3][$i]),
        'currency' => html_entity_decode($matches[4][$i]),
    ];
    if (!isset($products[$category])) {
        $products[$category] = [];
    }
    array_push($products[$category], $product);
}
ksort($products);

foreach ($products as $cat => $prod) {
    usort($prod, function ($a, $b) {
        return strcmp($a['product'], $b['product']);
    });
    $products[$cat] = $prod;
}
echo json_encode($products);

?>