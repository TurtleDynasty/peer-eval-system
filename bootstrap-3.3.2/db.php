<?php
/* connecting to the database created at the begging of the semester */
            $host = "localhost";
            $user = "faa227";             
            $sqlpswd = "Onedollar";       
            $dbase = "peerevaluaion";
            
            $cxn = mysql_connect($host,$user,$sqlpswd) or die ("No connection possible");
            if ($cxn == NULL)
            {
                 //$errorCnx = "Connection Error";
                $validFlag = FALSE;
                echo "error here";
            }
            
            $dbr = mysql_select_db($dbase,$cxn)or die(mysql_error());
            if ($dbr == FALSE)
            {
                //$errorDb = "DB Error: ".mysql_error($cxn)."";
                $validFlag = FALSE;
                echo "error here 2";
            }
?>