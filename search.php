<?php
session_start();

// Save filter preferences
if (isset($_GET['category'])) {
    $_SESSION['filter']['category'] = $_GET['category'];
}
if (isset($_GET['sort'])) {
    $_SESSION['filter']['sort'] = $_GET['sort'];
}

// Use defaults if not set
$category = $_SESSION['filter']['category'] ?? 'All';
$sort = $_SESSION['filter']['sort'] ?? 'Newest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Filter</title>
<style>
body {
    font-family: Arial, sans-serif;
    padding: 20px;
}
a {
    text-decoration: none;
    padding: 5px 10px;
    background: #007BFF;
    color: #fff;
    border-radius: 4px;
    margin: 2px;
}
a:hover {
    background: #0056b3;
}
.current {
    margin-top: 10px;
    font-weight: bold;
}
</style>
</head>
<body>

<h2>Search Filter</h2>

<p>
<strong>Category:</strong>
<a href="search.php?category=All">All</a>
<a href="search.php?category=Books">Books</a>
<a href="search.php?category=Electronics">Electronics</a>
</p>

<p>
<strong>Sort By:</strong>
<a href="search.php?sort=Newest">Newest</a>
<a href="search.php?sort=PriceAsc">Price ↑</a>
<a href="search.php?sort=PriceDesc">Price ↓</a>
</p>

<div class="current">
Showing results for <strong><?php echo htmlspecialchars($cacftegory); ?></strong>, sorted by <strong><?php echo htmlspecialchars($sort); ?></strong>
</div>

</body>
</html>
