<?php
session_start();

// Handle reset button
if (isset($_POST['reset'])) {
    unset($_SESSION['age_verified']);
}

// Handle age submission
if (isset($_POST['age'])) {
    $age = (int)$_POST['age'];

    if ($age >= 18) {
        $_SESSION['age_verified'] = true;
        $message = "Access granted. Welcome!";
    } else {
        $message = "Access denied. You must be 18 or older.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Verification</title>
</head>
<body>

<h2>Age Verification</h2>

<?php
if (!isset($_SESSION['age_verified'])):
?>
    <form method="post">
        <label>Enter your age:</label>
        <input type="number" name="age" required>
        <button type="submit">Verify Age</button>
    </form>

<?php
else:
?>
    <p>Age already verified. You can access the content.</p>
<?php endif; ?>

<?php
if (isset($message)) {
    echo "<p><strong>$message</strong></p>";
}
?>

<form method="post">
    <button type="submit" name="reset">Reset Age Verification</button>
</form>

</body>
</html>
