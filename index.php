

<DOCTYPE!>
<html>
    <body>
        <h2>Hey, what's your name?</h2>
        <form action="index.php" method="POST">
            <input type="text" id="name" name="name"><br>
            <input type="submit" id="name" name="submit" value="This is my name"><br>
        </form>

        <?php 
            if(isset($_POST['submit'])){
            $name=$_POST['name'];
            echo  "<h2>Hello $name<h2>";
            }
        ?>
    </body>
</html>