<?php
include('../libs/loading.php');
loadTemplate("head");
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
    $query = "select * from glasses";
    $result = mysqli_query($conn, $query);
}
loadTemplate("adminHeader");
?>

  <body>
    <tr>
    <div class="grid-container">
    <div class="grid-item">
        <div class="product-card">
            <div class="product-tumb">
            <img src="https://i.imgur.com/xdbHo4E.png" alt="">
        </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
</tr>
<!-- Throw the below php code here -->
      
      
      
<!--       
    </tbody>
</table> -->


</body>
</html>

</body>
</html>




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
      </tr>
      
      
      ");
      }
      ?>