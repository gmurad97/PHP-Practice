<?php

$response = array(
    "brand" => "Mercedes-Benz",
    "model" => "S680 Mansory",
    "engine" => "V12 6.0 Petrol | Plugin Hybrid",
    "hp" => "1000+",
    "year" => "2023",
    "price" => "335000 EUR"
);

$enc_json_response = json_encode($response); //response application/json;charset=UTF-8
$dec_json_response = json_decode($enc_json_response, true); //if true return assoc array else stdobject
?>



<table>
    <thead>
        <tr>
            <th style="text-align: left;">KEY</th>
            <th style="text-align: left;">VALUE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dec_json_response as $json_key => $json_value) : ?>
            <tr>
                <td><?= $json_key ?></td>
                <td><?= $json_value ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
/* print_r("<pre>");
print_r($dec_json_response); */
