<?php
 $name = filter_input(INPUT_POST, 'name');
 $surname = filter_input(INPUT_POST, 'surname');
 $dob = filter_input(INPUT_POST, 'dob');
 $age = filter_input(INPUT_POST,'age');
 $nationality = filter_input(INPUT_POST, 'nationality');
 $emailAdd = filter_input(INPUT_POST, 'emailAdd');
 $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
 $twelfth_sname = filter_input(INPUT_POST, 'twelfth_sname');
 $tenth_sname = filter_input(INPUT_POST, 'tenth_sname');
 $tenth_board = filter_input(INPUT_POST, 'twelfth_board');
 $twelfth_board = filter_input(INPUT_POST, 'tenth_board');
 $tenth_perc = filter_input(INPUT_POST, 'twelfth_perc');
 $twelfth_perc = filter_input(INPUT_POST, 'tenth_perc');
 $tenth_yop = filter_input(INPUT_POST, 'twelfth_yop');
 $twelfth_yop = filter_input(INPUT_POST, 'tenth_yop');
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "genysys";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO studentprofile(name, surname, dob, age, nationality, emailAdd, phoneNumber, twelfth_sname, tenth_sname, twelfth_board, tenth_board, twelfth_perc, tenth_perc, twelfth_yop, tenth_yop)
values ('".$name."','".$surname."','".$dob."','".$age."','".$nationality."','".$emailAdd."','".$phoneNumber."','".$twelfth_sname."','".$tenth_sname."','".$twelfth_board."','".$tenth_board."','".$twelfth_perc."','".$tenth_perc."','".$twelfth_yop."','".$tenth_yop."')";
if($conn->query($sql)){
	echo $name." has been added.";
}
else{
	echo "Error: ". $sql ."". $conn->error;
}
$conn->close();

?>\