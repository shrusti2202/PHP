
<?php
/*

CREATE DATABASE hotel_management;



CREATE TABLE `rooms` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL
);

*/
// Database connection
$conn = mysqli_connect("localhost", "root", "", "hotel_management");

// Handle Update Form Submission
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE rooms SET name = '$name', email = '$email' WHERE id = $id";
    mysqli_query($conn, $sql);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Fetch All Records
$sql = "SELECT * FROM rooms";
$data = mysqli_query($conn, $sql);

// Handle Edit Link
$edit_id = isset($_GET['edit']) ? $_GET['edit'] : null;
if ($edit_id) {
    $sql = "SELECT * FROM rooms WHERE id = $edit_id";
    $edit_row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM rooms WHERE id = $id");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple CRUD</title>
</head>
<body>

<?php if ($edit_id && $edit_row): ?>
    <!-- Edit Form -->
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $edit_row['id'] ?>">
        <input type="text" name="name" value="<?= $edit_row['name'] ?>">
        <input type="email" name="email" value="<?= $edit_row['email'] ?>">
        <button type="submit" name="update">Confirm</button>
    </form>
<?php endif; ?>

<!-- Display Table -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>">Edit</a> |
                <a href="?delete=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
