<h1>Recipe World</h1>
<div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="recipes.php">Recipes</a></li>
        <li><a href="suggest.php">Suggest</a></li>
        <?php  if(!isset($_SESSION['email'])) {    ?>
        <li><a href="register.php">Register</a></li>
        
        <li><a href="login.php">Login</a></li>
        <?php  } ?>
        <?php if(isset($_SESSION['email'])) {    ?>
        <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
    </ul>
</div>