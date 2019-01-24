@extends('layouts.app')

@section('content')
<?php
$msg = "";
if($handle = opendir('C:\wamp64\www\Blog\public\v1')){
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
 $msg .= '<li><a href="'.$file.'">'.$file.'</a></li>';
 }
 }
 closedir($handle);
}

$msg1 = "";
if($handle = opendir('C:\wamp64\www\Blog\public\v2')){
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
 $msg1 .= '<li><a href="'.$file.'">'.$file.'</a></li>';
 }
 }
 closedir($handle);
}

if ($handle = opendir('C:\wamp64\www\Blog\public\v2')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry\n";
        }
    }

    closedir($handle);
}

if ($handle = opendir('C:\wamp64\www\Blog\public\v1')) {

    while (false !== ($entry1 = readdir($handle))) {

        if ($entry1 != "." && $entry1 != "..") {

            echo "$entry1\n\n\n\n\n\n";
        }
    }

    closedir($handle);
}


//   $filename = 'C:\wamp64\www\Blog\public\v1';
// $filename1 = 'C:\wamp64\www\Blog\public\v2';
// if (file_exists($filename)) {
//     echo "The file $filename exists";
// } else {
//     echo "The file $filename1 does not exist";
// }
 
$dir = "C:/wamp64/www/Blog/public/v1";
$dir1 = "C:/wamp64/www/Blog/public/v2";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir1);

print_r($a); 
print_r($b);





?>
<!DOCTYPE html>
<html>
    <head>
        
    <title> Directory </title>
    </head>
    
    <body>
        
        <select>
            <?php echo $msg;?>
        </select>
        <select>
            <?php echo $msg1;?>
        </select>
    </body>
</html>
@endsection

