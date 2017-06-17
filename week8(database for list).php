<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>資料確認</title>
	<style>
		.align-center-color {text-align: center; font-weight: bold; font-size: 50px; font-family: DFKai-sb; color: red}
		.align-center {text-align: center; font-weight: bold; font-size: 30px; font-family: DFKai-sb}
		.margin {margin-left: 370px; margin-top: 30px; padding: 20px;}
		.table {border: 2px solid black;}
		.table-content {font-weight: bold; float: left; margin-right: 50px; width: 100px}
	</style>
</head>
<body>
	<div class="align-center-color">
		<?php 
			if(isset($_POST['uname']))
			{
				echo "感謝您參與此次的公益車賽, " . $_POST['uname'] . "先生/小姐";
			}
		?>
	</div>
</body>
</html>

<?php
	
	$link = @mysqli_connect(
			'localhost',
			'root',
			'295@025*2',
			'reply for list(homework4)'
		);

	$uname = $_POST['uname'];
	$ugender = $_POST['ugender'];
	$addr = $_POST['addr'];
	$uemail = $_POST['uemail'];
	$tel = $_POST['tel'];
	$length = $_POST['length'];
	$utshirtsize = $_POST['utshirt-size'];
	$fname = $_POST['fname'];
	$ftel = $_POST['ftel'];

	$result = mysqli_query($link, "SELECT * FROM appear1");

	echo "<div class='margin'>";

	echo "<table border=1 rules='all' cellpadding='10'>";

	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<th colspan='4'>";
		echo $row["Basic Information"];
		echo "</th>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Name"];
		echo "</td>";
		echo "<td>";
		echo $uname;
		echo "</td>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Gender"];
		echo "</td>";
		echo "<td>";
		echo $ugender;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Phone"];
		echo "</td>";
		echo "<td>";
		echo $tel;
		echo "</td>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Email"];
		echo "</td>";
		echo "<td>";
		echo $uemail;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Address"];
		echo "</td>";
		echo "<td colspan='3'>";
		echo $addr;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Kind"];
		echo "</td>";
		echo "<td colspan='3'>";
		echo $length;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Tshirt-size"];
		echo "</td>";
		echo "<td colspan='3'>";
		echo $utshirtsize;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Emergency-name"];
		echo "</td>";
		echo "<td>";
		echo $fname;
		echo "</td>";
		echo "<td bgcolor='#C1C1E1'>";
		echo $row["Emergency-phone"];
		echo "</td>";
		echo "<td>";
		echo $ftel;
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td bgcolor='#C1C1E1'>";
		echo "Receive other activity messages?";
		echo "</td>";

		echo "<td colspan='3'>";

		if (isset($_POST['other'])) 
		{
			echo "是"; 
		}
		else
		{
			echo "否";
		}

		echo "</td>";

		echo "</tr>";
	}

	echo "</table>";

	echo "</div>";

	echo "<br>";
	echo "<br>";

	echo "<div class='align-center'>";
	echo "<a href='homework1-A1043338.html'>";
	echo "<input type='submit' value='重新填選' class='align-center'>";
	echo "</a>";
	echo "&nbsp";
	echo "&nbsp";
	echo "<a href='http://www.nuk.edu.tw/bin/home.php'>";
	echo "<input type='button' value='關閉試窗' onclick='window.close()' class='align-center'>";
	echo "</a>";
	echo "</div>";

	mysqli_close($link);
?>