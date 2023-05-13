<?php

//This will enable error reporting and display all PHP errors and warnings on the web page. Make sure to remove these lines of code once you have resolved the errors in your code to prevent sensitive information from being displayed to users.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'includes/database.php';

$errors = [];
$title = '';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    }

    if (empty($errors)) {

        $conn = getDB();

        $sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {

            echo mysqli_error($conn);

        } else {

            if ($published_at == ''){
                $published_at = null;
            }

            mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);

            if (mysqli_stmt_execute($stmt)) {

                $id = mysqli_insert_id($conn);
                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                    $protocol = 'https';
                } else {
                    $protocol = 'http';
                }

                header("location: article.php?id=$id");
                exit;

            } else {

                echo mysqli_stmt_error($stmt);

            }
        }
    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<?php if (! empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($title); ?>">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= htmlspecialchars($content); ?></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?= $published_at; ?>">
    </div>

    <button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>
