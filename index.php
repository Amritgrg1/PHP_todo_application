<?php
  include('./db_config.php');

  $sql = "SELECT * FROM todo_list";
  $result = $conn -> query($sql);
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
    <div class="container p-3">
    <form action="save-todo.php" method="post">
        <h3 class="text-center">Todo Application</h3>
        <input type="text" name="todo" class="form-control mb-3" placeholder="enter input">
        <button type="submit" class="btn btn-primary">Add todo</button>
</form>
<table class="table table-hover table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TODO Item </th> 
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
        while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['title']?></td>
          <td><button type="submit" class="btn btn-primary"><a href='update.php?update=<?php echo $row['id']?>' class="text-white" style="text-decoration:none">Update </a> </button></td>
          <td><button class="btn btn-danger"><a href='delete.php?delete=<?php echo $row['id']?>' class="text-white" style="text-decoration:none" >Delete</a></button></td>
        </tr>

        <?php }
      ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>