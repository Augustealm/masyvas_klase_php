<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Mokaus PHP</title>
</head>
<body>
<?php

function kodas() {
    $mokKodas = rand(100, 200);
    return $mokKodas;
};

function pazymys() {
    $paz = rand(1, 10);
    return $paz;
};

function DuomForDat()
{
    return date("Y-m-d");
}


$mokiniai = [
    "6a" => [
        ["Kodas" => kodas(),
        "Vardas" => "algis",
        "Pavarde" => "algiukas",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
             ]
        ],
        ["Kodas" => kodas(),
         "Vardas" => "maryte",
         "Pavarde" => "marionaite",
         "DuomForDat" => DuomForDat(),
         "Kontroliniai" => [
             "Matematika" => pazymys(),
             "Informacines technologijos" => pazymys(),
             "Anglu kalba" => pazymys()
             ]
        ],
        ["Kodas" => kodas(),
        "Vardas" => "kostas",
        "Pavarde" => "kostauskis",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
             ]
        ],
        ["Kodas" => kodas(),
        "Vardas" => "giedre",
        "Pavarde" => "giedrulaite",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
                "Matematika" => pazymys(),
                "Informacines technologijos" => pazymys(),
                "Anglu kalba" => pazymys()
                 ]
        ],
        ["Kodas" => kodas(),
         "Vardas" => "edas",
         "Pavarde" => "edinskas",
         "DuomForDat" => DuomForDat(),
         "Kontroliniai" => [
                "Matematika" => pazymys(),
                "Informacines technologijos" => pazymys(),
                "Anglu kalba" => pazymys()
                ]
         ]
    ],
    "6b" => [
        ["Kodas" => kodas(),
        "Vardas" => "stefa",
        "Pavarde" => "stefulaite",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
             ]
        ],
        ["Kodas" => kodas(),
        "Vardas" => "ula",
        "Pavarde" => "ulinskyte",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" =>pazymys(),
            "Anglu kalba" => pazymys()
             ]
        ],
        ["Kodas" => kodas(),
        "Vardas" => "kipras",
        "Pavarde" => "kiparisas",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
            ]
        ],
        ["Kodas" => kodas(),
        "Vardas" => "andrius",
        "Pavarde" => "andriukaitis",
        "DuomForDat" => DuomForDat(),
        "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
            ]
        ],
        ["Kodas" => kodas(),
         "Vardas" => "mantas",
         "Pavarde" => "mantulionis",
         "DuomForDat" => DuomForDat(),
         "Kontroliniai" => [
            "Matematika" => pazymys(),
            "Informacines technologijos" => pazymys(),
            "Anglu kalba" => pazymys()
            ]
         ]
       ]
    ];


?>
<table>
    <tr>
        <th>Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių <br>vidurkis</br> </th>
        <th>Data</th>
    </tr>

<?php
foreach ($mokiniai as $klase => $mok): ?>
    <tr>
        <td  colspan="1"> <?=$klase; ?> </td>
        <td colspan="5"> </td>
    </tr>
    <?php
    foreach ($mok as $duom) :?>
    <tr>
        <td>  </td>
        <td> <?= $duom["Kodas"] ?></td>
        <td> <?= mb_strtoupper($duom["Vardas"]) ?></td>
        <td> <?= mb_strtoupper($duom["Pavarde"]) ?></td>
        <td> <?= round(array_sum($duom["Kontroliniai"]) / count($duom["Kontroliniai"])) ?> </td>
        <td> <?=$duom["DuomForDat"] ?></td>
    </tr>
<?php endforeach;
         endforeach; ?>
</table>
</body>
</html>

