<?php require_once '../database.php';


$statement=$conn->prepare("SELECT * FROM zcc353_1.person AS person WHERE person.medID=:medID");
$medID = $_POST["medID"] ?? ($_GET["medID"] ?? null);



$statement->bindParam(":medID", $medID, PDO::PARAM_STR);
$statement->execute();

$person = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$person["fName"]?></title>
</head>
<body>
    <h1><?=$person["fName"]?> <?=$person["lName"]?></h1>
</body>
</html>
