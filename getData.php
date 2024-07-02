<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_info";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: ",$conn;
}
global $conn;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["Armstrong"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Armstrong\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Klassic"])){
		$sql="SELECT `Roll_No`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Klassic wheel\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID :".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["JS_Control"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"JS_Control\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Tefologic"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Tefologic\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Toyota"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Toyota\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Renata"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Renata\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Byjus"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Byjus\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Wallspace"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Wallspace\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
	if(isset($_POST["Deloittle"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Deloittle\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"<br>CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"<br>EMAIL_ID:".$row["EMAIL_ID"],"<br>COMPANY_NAME :".$row["COMPANY_NAME"],"<br>PACKAGE :".$row["PACKAGE"],"LPA";
			}
		}
	}
}
$conn->close();
?>
