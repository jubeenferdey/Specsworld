<?php
include('libs/loading.php');
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
        foreach ($result as $key => ['Name' => $name,'Type'=>$type, 'Power'=>$power,'Image'=>$image ]){
          print("
          <div class='box'>
                <img src='$image'>
                <div class='content'>
                    <span>$type</span>
                    <h3>$name</h3>
                    <span>Power: $power</span>
                    <br><br>
                    <a href='' class='btn'>Explore</a>
                </div>
            </div>
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




