<?php

      $val1=$_REQUEST['val_1'];
      $val2=$_REQUEST['val_2'];
      $val3=$_REQUEST['val_3'];
      if($val1>$val2 && $val1>$val3)
	  {
        echo $val1;
      }
      else
	  {
        if($val2>$val1 && $val2>$val3)
		{
          echo $val2;
        }
        else
	    {
          echo $val3;
		}
      }
?>