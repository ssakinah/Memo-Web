<div id="mainContainer">   
<div id="content"> 	
    <?php
    date_default_timezone_set("Asia/Kuala_Lumpur");//time set to Kuala Lumpur timezone
    $query = mysqli_query($sql, "SELECT * FROM tbl_notes"); //select all data in table tbl_note
    while($row = mysqli_fetch_array($query)){ //print per row
        $notes = $row['notes']; //variable
        echo "<sub>".date("d/m/Y,\t h:ia")."</sub>"; //Display date & time
        echo "<blockquote>".$notes."</blockquote><br>"; //display memo
    }
    ?>
</div>
</div>