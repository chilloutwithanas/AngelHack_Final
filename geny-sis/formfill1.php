<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "genysys";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        $query = "SELECT * FROM case_info LIMIT 1";
        $result = myqsl_query($query) or die(mysql_error());
        while($row = mysql_fetch_array($result)){
        ?>
        <input type="text" name="firstName" value="<?php echo $row['name']; ?>"
        <input type="text" name="lastName" value="<?php echo $row['surname']; ?>"
		<input type="text" name="age" value="<?php echo $row['age'];?>"
		<input type="text" name="email" value="<?php echo $row['emailAdd']?>"
		<input type="text" name="phoneNum" value="<?php echo $row['phoneNumber']?>"
        <?php
        } //Close while{} loop
        ?>
		