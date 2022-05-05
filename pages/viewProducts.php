<?php

$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
    $query = "select * from glasses";
    $result = mysqli_query($conn, $query);
}
?>
  <html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>All Products</title>
  </head>
  <body>
  <table class="table my-3 table-striped table-info table-hover">
      <thead>
      <tr class="table-danger">
          <th scope="col">#ID</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Power</th>
          <th scope="col">Type</th>
          <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>

<?php
        foreach ($result as $key => ['id' => $id , 'Name' => $name,'Type'=>$type, 'Power'=>$power,'Image'=>$image ]){

          print("
      <tr>
          <th scope='row'> $id </th>
          <td>
          <img class='customimg' src=$image>
          </td>
          <td>$name</td>
          <td>$power</td>
          <td>$type </td>
          <td>
              <form method='post' style='display: inline-block' action='updateUser.php'>
          <input type='hidden' name='id' value=$id>
          <button type='submit' class='btn btn-dark'>Edit</button>
          </form>
          
          <form method='post' style='display: inline-block' action='deleteUser.php'>
          <input type='hidden' name='id' value=$id>
          <button type='submit' class='btn btn-danger'>Delete</button>
          </form>
          
          </td>
      </tr>");
      }
      ?>
      
      
      
      
    </tbody>
</table>


</body>
</html>

</body>
</html>