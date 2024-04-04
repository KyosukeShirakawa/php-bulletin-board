<?php echo "hello";

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
    <div class="formWrapper">
      <div>
        <input type="submit" value="send">
        <label for="">Name: </label>
        <input type="text" name="username">
      </div>
      <div>
        <textarea class="commentTextArea"></textarea>
      </div>
    </div>
  </div>

</body>

</html>