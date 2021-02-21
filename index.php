<link rel='stylesheet' href="style.css" />
<?php

$date = date("Y-m-d");
$mokInfo = [
    1 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("jurgis"),
        3 => strtoupper("jurgaitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    2 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("petras"),
        3 => strtoupper("petraitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    3 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("romas"),
        3 => strtoupper("romaitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    4 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("bela"),
        3 => strtoupper("belaite"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    5 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("margarita"),
        3 => strtoupper("margaite"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    6 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("varis"),
        3 => strtoupper("varaitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    7 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("marija"),
        3 => strtoupper("jurgaite"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    8 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("moris"),
        3 => strtoupper("moraitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    9 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("voris"),
        3 => strtoupper("voraitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
    10 => [0 => "5b",
        1 => rand(10, 1000),
        2 => strtoupper("romis"),
        3 => strtoupper("buraitis"),
        4 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ],
        5 => $date
    ],
];
echo "<table style='width:80%'>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vidurkis</th>
        <th>Duomenu formavimo data</th>
    </tr>
";
foreach ($mokInfo as $item){
    echo "<tr>";
    echo "<td>$item[0]</td>";
    echo "<td>$item[1]</td>";
    echo "<td>$item[2]</td>";
    echo "<td>$item[3]</td>";
    echo "<td>". array_sum($item[4])/3 ."</td>";
    echo "<td>$item[5]</td>";


}

?>


