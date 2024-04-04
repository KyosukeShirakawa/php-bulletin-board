<?php


if (!empty($_POST["submitButton"])) {
  echo $_POST["username"];
  echo $_POST["comment"];
}

//DB instantiation

$pdo = new PDO('mysql:host=localhost;dbname=bulletin-board', "root", "kyosuke0527");

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
      <article>
        <div class="wrapper">
          <div class="nameArea">
            <span>Name:</span>
            <p class="username">Kyo</p>
            <time>:2024/4/4</time>
          </div>
        </div>
      </article>
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