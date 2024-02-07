<?php
    //db connection
    require("../db_connection.php");

    $pid = $_REQUEST['pid'];

    $sql = "select * from districts where province_id=$pid";

    $rs  = $mysqli->query($sql);

    echo "<pre>";
    while($row = mysqli_fetch_assoc($rs)){
        //echo $row['name_en'] . " - " . $row['name_si'] . $row['name_ta'] . "<br />";
        ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['name_en'];?></option>
        <?php
    }
    echo "</pre>";

?>