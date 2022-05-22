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
<!-- Throw the below php code here -->
<section class='banner'>    
<?php
        foreach ($result as $key => ['Name' => $name,'Type'=>$type, 'Power'=>$power,'Image'=>$image, 'Price' => $price ]){
          print("
          <form action = 'paymentPage.php' method = 'POST' >
          <div class='box'>
                <img src='$image'>
                <div class='content'>
                <input type = 'hidden' name = 'price' value=$price />
                <input type = 'hidden' name = 'name' value=$name />
                <input type = 'hidden' name = 'Type' value=$type />
                <input type = 'hidden' name = 'power' value=$power />
                    <span>$type</span>
                    <h3>$name</h3>
                    <span>Power: $power</span>
                    <br><br>
                    <span>Price: $price</span>
                    <br><br>
                    <button class='btn' type='submit' > Buy Now </button>
                </div>
            </div>
            </form>
      ");
      
      }
      ?>  
 </section>  
<!--       
    </tbody>
</table> -->


</body>
</html>

</body>
</html>