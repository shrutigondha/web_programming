<?php
/*1*/$myfile=fopen("example.txt","r") or die("unable to open file!");


/*2*/$myfile=fopen("example.txt","r") or die("unable to open file!");
	echo fgets($myfile);//reads a line from the file
	

/*3*/$myfile=fopen("example.txt","w") or die("unable to open file!");
	$txt="Hello, World!";
	fwrite($myfile,$txt);
	

/*4*/fclose($myfile);


/*5*/if(file_exists("example.txt"))
	{
		echo "The file exists";
	}
	else
	{
		echo "The file does not exists";
	}


/*6*/$content=file_get_contents("example.txt");
echo $content;


/*7*/$content="new content to write.";
file_put_contents("example.txt",$content);


/*8*/$new_content="Appended content";
file_put_contents("example.txt",$new_content,FILE_APPEND);


/*9*/if(unlink("example.txt"))
{
	echo "File deleted";
}
else
{
	echo "unable to delete the file";
}


?>