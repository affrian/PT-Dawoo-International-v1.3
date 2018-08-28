<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('db_instansi');
		// $sql = mysql_query("SELECT A.*, (SELECT COUNT(fakultas) FROM tbfakultas WHERE fakultas=A.fakultas) AS jumlah FROM tbfakultas A ORDER BY A.fakultas DESC")or die(mysql_error());
		$sql = mysql_query("SELECT A.*, (SELECT COUNT(fakultas) FROM tbfakultas WHERE fakultas=A.fakultas) AS jumlah FROM tbfakultas A")or die(mysql_error());
		$no = 1;
		$jum = 1;
		echo '<table border="1">';
		echo '<tr>
				<th>No</th>
				<th>Fakultas</th>
				<th>Jurusan</th>
			  </tr>';
		while($row=mysql_fetch_array($sql)) {       
		    echo '<tr>';
			    if($jum <= 1) {
			        echo '<td rowspan="'.$row['jumlah'].'">'.$no.'</td>';
			        echo '<td rowspan="'.$row['jumlah'].'">'.$row['fakultas'].'</td>';  
			        $jum = $row['jumlah'];       
			        $no++;                     
			    } else {
			        $jum = $jum - 1;
			    }
		    echo '<td>'.$row['jurusan'].'</td>';   
		    echo '</tr>';              
		}
		echo '</table>';
	?>
</body>
</html>