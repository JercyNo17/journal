// PHP script for handling user login
<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are correct (you'd validate against a database)
if ($username === 'your_username' && $password === 'your_password') {
    $_SESSION['authenticated'] = true;
    header('Location: journal.php'); // Redirect to the journal page after successful login
} else {
    echo 'Invalid username or password';
}
?>
// PHP script for saving journal entries
<?php
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: login.php'); // Redirect to login page if not authenticated
}

$entry = $_POST['entry_text'];

// Save the journal entry (you'd store this in a database)
file_put_contents('journal_entries.txt', $entry . PHP_EOL, FILE_APPEND);
?>
