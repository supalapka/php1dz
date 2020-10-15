<form action="vovelCount.php" method="post">
<input type="text" name="text" id="text" step="1">
<button type="submit" name="check" value="submit" >Check</button>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['check']))
    {
       $text = strtolower($_POST['text']);
        $count = 0;

        if(!empty($text))
       for ($i = 0; $i <= strlen($text); $i++) {
       if(
        $text[$i] == "a" ||
        $text[$i] == "e" ||
        $text[$i] == "i" ||
        $text[$i] == "o" ||
        $text[$i] == "u" )
        $count++;
    }

    echo $count;
}
    ?>