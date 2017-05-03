<?php


function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

function microtime_microseconds()
{
     list($usec, $sec) = explode(" ", microtime());
     return round(($usec * 1000) + $sec);
}
             
			if($_FILES['file']['name']){
			  $randstring=RandomString();
					$micro_time = microtime_microseconds();
               $temp = $_FILES['file']['tmp_name'];
			   	$ext=(explode(".",$_FILES['file']['name']));
			    $imagename="socil".$micro_time.time().".".$ext[1];		  
                move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$imagename);
				//echo $ext[1];
				//echo $imagename;
			
				echo $micro_time;
				//print_r($_FILES['file']['name']);
			}