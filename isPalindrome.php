<form action="isPalindrome.php" method="post">
<input type="text" name="text" id="text" step="1">
<button type="submit" name="check" value="submit" >Check</button>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['check']))
    {
       $text = strtolower($_POST['text']);

       if($text == strrev($text))
            echo "true";
            else echo "false";
       
    }

    ?>