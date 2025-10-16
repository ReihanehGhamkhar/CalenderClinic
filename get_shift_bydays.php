<?php
$servername = "ghamkhardb";
$username = 'root';
$password = "m24GIp3r8JlC1Vrlg0r2qeiZ";
$dbname = 'Clinic';

$day_id = $_GET['day_id'] ?? '';

if (empty($day_id)) {
    http_response_code(400);
    exit;
}

$conn =
    new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );


$sql = "SELECT doctors.name,doctors.photo_url,shifts.status,shifts.shift_time FROM shifts INNER JOIN doctors ON doctors.id = shifts.doctor_id WHERE shifts.day_id = :day_id";
$query = $conn->prepare($sql);
$query->execute(['day_id' => $day_id]);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data, JSON_UNESCAPED_UNICODE);