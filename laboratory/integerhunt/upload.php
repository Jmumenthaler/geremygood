<!doctype html>
<head>

</head>
<body>
  <?php
  
  //count where you are at
  $files = glob("numbers/*.*");
  $count = count($files);

  ?>
  <h1><?php print($count) ?></h1>
    <form action="upload_file.php" method="post"
          enctype="multipart/form-data">
      <label for="file">Filename:</label>
      <input type="file" name="file" id="file" /> 
      <br />
      <input type="submit" name="submit" value="Submit" />
    </form>

</body>
</html>
