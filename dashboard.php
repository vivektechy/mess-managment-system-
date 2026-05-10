<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
echo "<h1>Welcome to Dashboard</h1>";
echo "<p>Your role: " . $_SESSION['role'] . "</p>";
?>
<a href="add_meal.php">Add Meal</a><br>
<?php if ($_SESSION['role'] == 'admin') echo '<a href="add_expense.php">Add Expense</a>'; ?>
<br><a href="view_report.php">View Report</a><br>
<a href="logout.php">Logout</a>
