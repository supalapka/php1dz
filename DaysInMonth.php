<form action="DaysInMonth.php" method="post">
<input type="number" name="year" id="year" step="1">
<select name="month" id="month" class="form-control">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">Actober</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<button type="submit" name="calc" value="submit" >Calc</button>
</form>


<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['calc']))
    {
        calculate();
    }

   
    function calculate()
    {
        $year = $_POST['year'];
        if($year % 4 == 0)
        $isLeap = true;
        else $isLeap = false;

        $selectedMonth = $_POST['month'];
       
        if($selectedMonth == 2){
            if($isLeap) {
                $daysInMonth = 29;
                echo "<p> Year {$year}  is leap. </p>";
            }
            else{
                $daysInMonth = 28;
                echo "<p> Year {$year}  is not leap. </p> " ;
            }
        }
        else if ($selectedMonth == 4 or $selectedMonth == 6 or
             $selectedMonth ===9 or $selectedMonth == 11)
        {
             $daysInMonth = 30;
        }
        else $daysInMonth = 31; 

    // if($isLeap) echo "<p> Year {$year}  is leap. </p>";
    // else echo "<p> Year {$year}  is not leap. </p> " ;

    echo " <p> in {$selectedMonth} {$daysInMonth} days. </p>";

    }

?>






