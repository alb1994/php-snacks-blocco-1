<?php
echo  "<h1>Snacks 1</h1>";
$partite = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Virtus Bologna",
        "punti_casa" => 55,
        "punti_ospite" => 50
    ],
    [
        "squadra_casa" => "Cantù",
        "squadra_ospite" => "Reyer Venezia",
        "punti_casa" => 70,
        "punti_ospite" => 65
    ],
    [
        "squadra_casa" => "Varese",
        "squadra_ospite" => "Trento",
        "punti_casa" => 75,
        "punti_ospite" => 60
    ],
    [
        "squadra_casa" => "Brindisi",
        "squadra_ospite" => "Trieste",
        "punti_casa" => 80,
        "punti_ospite" => 75
    ]
];

for ($i = 0; $i < count($partite); $i++) {
    $squadra_casa = $partite[$i]["squadra_casa"];
    $squadra_ospite = $partite[$i]["squadra_ospite"];
    $punti_casa = $partite[$i]["punti_casa"];
    $punti_ospite = $partite[$i]["punti_ospite"];
    
    echo  $squadra_casa . " - " . $squadra_ospite . " | " . $punti_casa . "-" . $punti_ospite . "<br/>";
}

echo  "<h1>Snacks 2</h1>";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = $_GET['name'] ?? '';
    $mail = $_GET['mail'] ?? '';
    $age = $_GET['age'] ?? '';

    if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
        $accessMessage = "Accesso riuscito";
    } else {
        $accessMessage = "Accesso negato";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form di accesso</title>
</head>
<body>
    <h2>Form di accesso</h2>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required><br><br>
        
        <label for="age">Età:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <input type="submit" value="Accedi">
    </form>
    
    <?php if (isset($accessMessage)) : ?>
        <p><?php echo $accessMessage; ?></p>
    <?php endif; ?>
</body>
</html>
<?php 
echo "<h1>Snacks 3</h1>";

$posts = [
    "01-01-2004" => [
        "Post 1 della data 01-01-2004",
        "Post 2 della data 01-01-2004"
    ],
    "05-03-2010" => [
        "Post 1 della data 05-03-2010",
        "Post 2 della data 05-03-2010",
        "Post 3 della data 05-03-2010"
    ],
    "10-07-2015" => [
        "Post 1 della data 10-07-2015",
        "Post 2 della data 10-07-2015",
        "Post 3 della data 10-07-2015",
        "Post 4 della data 10-07-2015"
    ],
    "15-09-2022" => [
        "Post 1 della data 15-09-2022",
        "Post 2 della data 15-09-2022"
    ],
    "20-12-2022" => [
        "Post 1 della data 20-12-2022",
        "Post 2 della data 20-12-2022",
        "Post 3 della data 20-12-2022"
    ]
];

$keys = array_keys($posts);
$count = count($keys);

for ($i = 0; $i < $count; $i++) {
    $data = $keys[$i];
    $postArray = $posts[$data];

    echo $data . ":<br>";
    $postCount = count($postArray);
    for ($j = 0; $j < $postCount; $j++) {
        echo $postArray[$j] . "<br>";
    }
    echo "<br>";
}
?>