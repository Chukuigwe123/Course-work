<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include 'headere.php'; 

$dbHost = 'localhost'; // or your host
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'c&c kitchen';

// Establish a new database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to select recipes and their authors' names
$sql = "SELECT r.title, r.imagePath, r.description, r.ingredients, r.instructions, r.datePosted, u.uname
        FROM recipes r
        INNER JOIN users u ON r.userID = u.userID
        WHERE r.regionFlag = 'Recipes' ORDER BY R.datePosted DESC";

$result = $conn->query($sql);
$recipes = [];

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
}

$conn->close();
?>

<main>

    <div class="container text-center">
        <h1> Recipes </h1>
    </div>

    <div class="container">
        <?php foreach ($recipes as $recipe): ?>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= htmlspecialchars($recipe['imagePath']) ?>" class="img-fluid rounded-start"
                        alt="Recipe Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($recipe['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($recipe['description']) ?></p>
                        <p class="card-text"><small class="text-muted">By <?= htmlspecialchars($recipe['uname']) ?>
                                | <?= date('j F, Y', strtotime($recipe['datePosted'])) ?></small></p>
                        <h6 class="card-subtitle mb-2 text-muted">Ingredients</h6>
                        <ul class="ps-4">
                            <?php foreach(explode(',', $recipe['ingredients']) as $ingredient): ?>
                            <li><?= htmlspecialchars(trim($ingredient)) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <h6 class="card-subtitle mb-2 text-muted">Instructions</h6>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($recipe['instructions'])); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</main>
<?php include 'footer.php'; ?>