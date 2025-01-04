<?php include 'db.php'; ?>
<?php include 'sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <?php include 'sidebar.php'; ?>
</div>

<!-- Main Content Area -->
<div class="content">
    <h1>Transactions</h1>
    <!-- Add dynamic transaction content here -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Recent Transactions</h5>
            <p class="card-text">Here are your recent transactions.</p>
        </div>
    </div>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>
