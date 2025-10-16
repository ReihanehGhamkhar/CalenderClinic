<?php
$servername = "ghamkhardb";
$username = 'root';
$password = "m24GIp3r8JlC1Vrlg0r2qeiZ";
$dbname = 'Clinic';

try {
    $conn = new PDO(
        "mysql:host=$servername;",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS Clinic";
    $conn->exec($sql);
    
    $createTableDays = "CREATE TABLE IF NOT EXISTS days (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day_name VARCHAR(20) NOT NULL,
    month_number TINYINT NOT NULL,
    day_number TINYINT NOT NULL
);
";
    $clinic_conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );
    $clinic_conn->exec($createTableDays);

    $createTableDoctors = "CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    photo_url VARCHAR(255)
);
";
    $clinic_conn->exec($createTableDoctors);

    $createTableShifts = "CREATE TABLE IF NOT EXISTS shifts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    doctor_id INT NOT NULL,
    day_id INT NOT NULL,
    shift_time VARCHAR(20) NOT NULL,
    status VARCHAR(20),
    FOREIGN KEY (doctor_id) REFERENCES doctors(id) ON DELETE CASCADE,
    FOREIGN KEY (day_id) REFERENCES days(id) ON DELETE CASCADE
);
";
    $clinic_conn->exec($createTableShifts);

    $insertDaysQuery = "INSERT INTO days (day_name, month_number, day_number)
VALUES
('Sunday', 10, 13),
('Monday', 10, 14),
('Tuesday', 10, 15),
('Wednesday', 10, 16),
('Thursday', 10, 17),
('Friday', 10, 18),
('Saturday', 10, 19);
";

    $clinic_conn->exec($insertDaysQuery);

    $insertDoctors = "INSERT INTO doctors (name, photo_url)
VALUES
('دکتر علی رضایی', '/images/avatar3.jpg'),
('دکتر مریم احمدی', '/images/avatar2.jpg'),
('دکتر حسین موسوی', '/images/avatar4.jpg');
";
    $clinic_conn->exec($insertDoctors);

    $insertShifts = "INSERT INTO shifts (doctor_id, day_id, shift_time, status)
VALUES
(1, 1, '08:00-12:00', 'Active'),
(1, 3, '14:00-18:00', 'Active'),
(2, 2, '09:00-13:00', 'Compeleted'),
(3, 5, '10:00-14:00', 'Active');
";
    $clinic_conn->exec($insertShifts);


} catch (PDOException $e) {
    echo $e->getMessage();
}
$conn = null;
?>