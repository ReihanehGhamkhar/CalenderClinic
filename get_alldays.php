<?php
$servername = "ghamkhardb";
$username = 'root';
$password = "m24GIp3r8JlC1Vrlg0r2qeiZ";
$dbname = 'Clinic';

try{
$conn =
new PDO(
    "mysql:host=$servername;dbname=$dbname",
    $username,
    $password
);


$sql = "SELECT id,day_name, day_number FROM Clinic.days";
$query = $conn->query($sql);
$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
