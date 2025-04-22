<?php
include 'config.php';
?>

<?php
if (isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id = $id";

    $profileData = mysqli_query($connection, $query);

    $memberData = mysqli_fetch_assoc($profileData);

    
  $iddb = $memberData['id'];
  $name = $memberData['name'];
  $roll = $memberData['roll'];
  $class = $memberData['class'];
  $phone = $memberData['phone'];
  $email = $memberData['email'];
  $address = $memberData['address'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
    <h2 class="text-center mb-4">
  <span class="badge bg-info text-dark fs-4 p-3 shadow-sm">
    👤 Member Profile
  </span>
</h2>
        
        <p><strong>Name:</strong> <?= $memberData['name']; ?></p>
        <p><strong>Roll:</strong> <?= $memberData['roll']; ?></p>
        <p><strong>Class:</strong> <?= $memberData['class']; ?></p>
        <p><strong>Phone:</strong> <?= $memberData['phone']; ?></p>
        <p><strong>Email:</strong> <?= $memberData['email']; ?></p>
        <p><strong>Address:</strong> <?= $memberData['address']; ?></p>
        

        <a href="index.php" class="btn btn-secondary mt-3">← Back to List</a>
    </div>
</div>

</body>
</html>

