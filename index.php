<?php


$comment_array = array();

//DB instantiation

try {
  $pdo = new PDO('mysql:host=localhost;dbname=bulletin-board', "root", "kyosuke0527");
} catch (PDOException $e) {
  echo $e->getMessage();
}




//Handle submitted data

if (!empty($_POST["submitButton"])) {

  $postDate = date("Y-m-d H:i:s");

  $stmt = $pdo->prepare("INSERT INTO `data-table` (`username`, `comment`, `postDate`) VALUES (:username, :comment, :postDate);");
  $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
  $stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
  $stmt->bindParam(':postDate', $postDate, PDO::PARAM_STR);

  $stmt->execute();
}





//Get data from DB
$sql = "SELECT * FROM `data-table`";
$comment_array = $pdo->query($sql);

//Close DB connection
$pdo = null;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bulletin Board</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 class="title">PHP Bulletin Board</h1>
  <hr>
  <div class="boardWrapper">
    <section>
      <?php foreach ($comment_array as $comment) : ?>
        <article>
          <div class="wrapper">
            <div class="nameArea">
              <span>Name:</span>
              <p class="username">
                <?php echo $comment["username"]; ?>
              </p>
              <time>
                <?php echo $comment["postDate"]; ?>
              </time>
            </div>
            <p class="comment">
              <?php echo $comment["comment"]; ?>
            </p>
          </div>
        </article>
      <?php endforeach; ?>
    </section>
    <form class="formWrapper" method="POST">
      <div>
        <input type="submit" value="send" name="submitButton">
        <label for="">Name: </label>
        <input type="text" name="username">
      </div>
      <div>
        <textarea class="commentTextArea" name="comment"></textarea>
      </div>
    </form>
  </div>

</body>

</html>