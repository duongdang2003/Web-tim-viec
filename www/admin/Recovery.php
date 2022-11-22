<?php
    require_once('../connection.php');

   $table_name = "CongTy";
   $backup_file  = "/DB_Backup/db-backup-11-22-2022-17-56-12.sql";
   $sql = "LOAD DATA LOCAL INFILE '$backup_file' INTO TABLE $table_name";

   $retval = mysqli_query( $conn,$sql );

   if(! $retval )
   {
      die('Không thể tải dữ liệu : ' . $conn -> error);
   }
   echo "Tải dữ liệu thành công\n";

   mysqli_close($conn);
?>