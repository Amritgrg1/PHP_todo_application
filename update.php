<?php
  include('./db_config.php');
  $id = $_GET['update'];
  $sql = "SELECT * FROM todo_list WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  if(isset($_POST['cancel_btn']))
{
  header('Location: index.php');
}

  if(isset($_POST['update_btn'])){
    $todo_item = $_POST['todo'];
    $sql = "UPDATE todo_list SET title='$todo_item' WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location: index.php');
    }else{
        die($conn -> connect_error);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="" method="post">
    <div class="container p-3"></div>
    <h1 class="text-center">Update</h1>
    <input type="text" class="form form-control mb-3" name="todo" value="<?php echo $row['title'] ?>">
    <button type="submit" class="btn btn-primary" name="update_btn">UPDATE</button>
    <button type="submit" class="btn btn-secondary" name="cancel_btn">CANCEL</button>
    </form>
    </div>

  </body>
</html>