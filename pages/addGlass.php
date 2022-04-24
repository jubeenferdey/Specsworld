<?php
include('../libs/loading.php');
?>


<?php 

loadTemplate("head");
loadTemplate("adminHeader");
?>


<main>
<body>
<section class="heading">
    <h1>Add Glasses to the Database</h1>
    <p> <a href="../adminhome.html">Home</a> >> Add Glasses </p>
</section> 
<section class="login-form">  
<form method="POST" name ="userRegForm" enctype="multipart/form-data" action="../uploads/upload.php" >
        <h3>Enter the Details</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="Name" name="glassName">
</div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="number"  placeholder="Power" name="glassPower">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" placeholder="Type: Reading / Sunglasses / Powerglasses" name="glassType">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="number"  placeholder="Price" name="glassPrice">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="Shape" name="glassShape">
        </div>

        <input type="file" value="Upload Image" class="btn">
        <input type="submit" class="btn" value="Submit" name="submit">
    </form>
    
    </section>
</main>

<?php 
// loadTemplate("footer"); 
?>


    <section class="footer">
<!-- footer relies here -->

    <div class="credit"> created by <span>Klint Shay</span>, with ❤️ </div>

</section>

<!-- footer section ends -->

</body>
</html>

