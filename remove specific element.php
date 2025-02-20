<?php
$arr = [
    ["name" => "ahmed", "age" => 24],
    ["name" => "aya", "age" => 23],
    ["name" => "romisaa", "age" => 18],
    ["name" => "taha", "age" => 19],
];

foreach ($arr as $key => $value) {
    if ($value["name"] === "aya") {
        unset($arr[$key]);
    }
}

$arr = array_values($arr);

function showData($arr) {
    echo "<tr>";
    foreach (array_keys($arr[0]) as $key) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    foreach ($arr as $values) {
        echo "<tr>";
        foreach ($values as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}

echo "<table border='1' align='center' width='50%' height='50%'>";
showData($arr);
echo "</table>";

?>
