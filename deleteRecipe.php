
<?php
            include('connection.php');

            $RecipeName=$_POST['RecipeName'];
           
            $sql = "DELETE FROM recipesinput WHERE RecipeName='$RecipeName'" ;
            $result = $db->query($sql);
            header("Location: newrecipes.html");
            $db->close();
        ?>
