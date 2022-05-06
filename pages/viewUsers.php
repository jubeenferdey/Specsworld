<?php
include('../libs/loading.php');
loadTemplate("head");
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
    $query = "select * from users";
    $result = mysqli_query($conn, $query);
}
loadTemplate("adminHeader");
?>

  <body>
<section class="heading">
    <h1>Users in the Database Currently. </h1>
   
</section>
<section class='banner'>    
<?php
        foreach ($result as $key => ['username' => $name,'email'=>$email, 'password'=>$password,'phone'=>$phone, 'address'=>$address ]){
          print("
          <div class='box'>
                <div class='content'>
                    <h3>$name</h3>
                    <span><b>Email</b>: $email</span>
                    <br>
                    <span><b>Address</b>: $address</span>
                    <br><br>
                    <a href='' class='btn'>Explore</a>
                </div>
            </div>
      ");
      
      }
      ?>  
 </section>  
</body>
</html>

</body>
</html>