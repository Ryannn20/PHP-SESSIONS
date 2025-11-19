<?php
session_start();

// Initialize playlist if not already set
if (!isset($_SESSION['playlist'])) {
    $_SESSION['playlist'] = [];
}

// Handle adding a song
if (isset($_POST['song']) && $_POST['song'] != '') {
    $_SESSION['playlist'][] = $_POST['song'];
}

// Handle clearing playlist
if (isset($_POST['clear'])) {
    $_SESSION['playlist'] = [];
}
?>

<h2>My Temporary Playlist</h2>

<form method="post">
    <input type="text" name="song" placeholder="Enter song name">
    <button type="submit">Add to Playlist</button>
    <button type="submit" name="clear">Clear Playlist</button>
</form>

<ul>
<?php
foreach ($_SESSION['playlist'] as $song) {
    echo "<li>" . htmlspecialchars($song) . "</li>";
}
?>
</ul>
