<?php
// print (date('H')-17);
function backup_db(){
    // Lấy đường dẫn file kết nối cơ sở dữ liệu
    require_once("../connection.php");
	// Lưu trữ tất cả tên Table vào một mảng
	$return='';
	$allTables = array();
	$result = mysqli_query($conn,'SHOW TABLES');
	while($row = mysqli_fetch_row($result)){
		 $allTables[] = $row[0];
	}
	 echo "Đã lưu các dữ liệu gồm các bảng: ".json_encode($allTables);
	foreach($allTables as $table){
		$result = mysqli_query($conn,'SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($result);
		 
		$return.= 'DROP TABLE IF EXISTS '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($conn,'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		 
		for ($i = 0; $i < $num_fields; $i++) {
			while($row = mysqli_fetch_row($result)){
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++){
					$row[$j] = addslashes($row[$j]);
					$row[$j] = str_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; }
					else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n";
	}
	// Tạo thư mục Backup
    system('rm -r DB_Backup');
	$folder = 'DB_Backup/';
	if (!is_dir($folder))
	mkdir($folder, 0777, true);
	// chmod($folder, 0777);	
	// Đặt tên file
	$date = date('m_d_Y_H_i_s', time());
	$filename = $folder."db_backup_".$date;
	//Tạo file .sql
	$handle = fopen($filename.'.sql','w+');
	fwrite($handle,($return));
	fclose($handle);
}
 
// Gọi hàm thực thi
backup_db();
?>