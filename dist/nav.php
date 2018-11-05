    <nav id="nav" class="nav">
        <div class="marque close">
            <div data-text="close close close close close close close close close close close close close close "></div>
        </div>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <?php  if(isset($_SESSION['user'])) {
                echo '<li class="nav-link"><a href="moderateur.php">Validator</a></li>';
            } ?>
            <li><a href="/">Search</a></li>
            <li><a href="add.php">Add a new</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <div class="login">
            <?php if(isset($_SESSION['user'])) {
                echo '<a href="./php/deconnexion.php"><img src="images/door-icon.png" alt="deconnexion"></a>';
            }else {

                echo "<a href='login.php'><img src='images/locker.png' alt='connexion'></a>";
            }
            ?>
        </div>
    </nav>
