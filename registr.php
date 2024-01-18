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
$persname = $_POST["persname"];
$email = $_POST["email"];
$login = $_POST["login"];
$password = $_POST["password"];

$sql = "INSERT INTO user (email, login, password, persname) VALUES ('$email','$login','$password','$persname')";
if ($conn->query($sql) === TRUE) {
    echo "Вы успешно зарегистрировались.";
} else {
    echo "Ошибка при добавлении заказа: " . $conn->error;
}

$conn->close();
?>