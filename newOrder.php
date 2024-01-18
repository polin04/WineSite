<?php
// Подключение к базе данных
$host = "localhost";
$db = "dbwine";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$wine_name_price = $_POST["wine_name_price"];

$sql = "INSERT INTO order_wine (wine_name_price) VALUES ('$wine_name_price')";
if ($conn->query($sql) === TRUE) {
    echo "Новый заказ успешно добавлен.";
} else {
    echo "Ошибка при добавлении заказа: " . $conn->error;
}

$conn->close();
?>