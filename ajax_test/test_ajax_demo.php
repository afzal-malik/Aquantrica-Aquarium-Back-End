
<?php
    //lets connect to the database
    require("../db_connection.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>working with AJAX</title>
</head>
<body>
    <h1>Working with AJAX</h1>
    <hr />
    <form action="" onsubmit="return false">
        <label for="">Province</label>
        <select name="province" id="province" onchange="getDistricts(this.value)">
            <?php
                $sql = "select * from provinces";
                $rs  = $mysqli->query($sql);
                while($row = mysqli_fetch_assoc($rs)){
                    ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name_en'];?></option>
                    <?php
                }
            ?>
        </select>
        <input type="button" value="test" onclick="testFunction()">
    </form>

    <div id="districts_area" style="border:1px solid blue;">
                <h1>this area will be replaced when u select a province!</h1>
    </div>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dicta repudiandae? Doloribus quo libero vero nihil et amet blanditiis quaerat assumenda quidem facere, eum illo atque autem alias inventore modi!</p>

<script>
    function testFunction(){
        alert('hi');
    }

    function showProviceId(id){
        alert(id);
    }

    //ajax code start here
    var xmlhttp

    function getDistricts(pid){
	    xmlhttp = GetXmlHttpObject();
        if (xmlhttp == null){
            alert ("Your browser does not support AJAX!");
            return;
        }

        var url="get_districts.php";
        url = url + "?pid="+pid;
        url = url + "&sid="+Math.random();
        xmlhttp.onreadystatechange=stateChanged;
        xmlhttp.open("post",url,true);
        xmlhttp.send(null);
    }

    function stateChanged(){
        if (xmlhttp.readyState == 4)	  {
            document.getElementById("districts_area").innerHTML=xmlhttp.responseText;
        }
    }

    function GetXmlHttpObject(){
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            return new XMLHttpRequest();
        }

        if (window.ActiveXObject){
            // code for IE6, IE5
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
            return null;
        }

    //ajax code ends here    
</script>
</body>
</html>