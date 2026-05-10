<?php
session_start();
include 'includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $meal_count = $_POST['meal_count'];
    $meal_date = date('Y-m-d');
    $stmt = $conn->prepare("INSERT INTO meals (user_id, meal_date, meal_count) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $user_id, $meal_date, $meal_count);
    $stmt->execute();
    echo "Meal added successfully!";
}
?>
<form method="POST" action="add_meal.php">
  <input type="number" name="meal_count" required placeholder="Meal Count">
  <button type="submit">Add Meal</button>
</form>
