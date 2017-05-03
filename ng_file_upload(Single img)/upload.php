<?php


			if($_FILES['file']['name']){
               $temp = $_FILES['file']['tmp_name'];
			   	$ext=(explode(".",$_FILES['file']['name']));
			    $imagename="socil".time().".".$ext[1];		  
                move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$imagename);
				//echo $ext[1];
				echo $imagename;
			}