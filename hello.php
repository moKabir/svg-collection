
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
.icon-main {
    display: flex;
    flex-wrap: wrap;
}
.icon {
    max-width: 150px;
    width:100%;
    padding: 15px;
    word-break: break-all;
}
.icon img {
    max-width: 64px;
    margin-bottom: 20px;
}
.icon span {
    font-weight: 700;
    color: rgb(0 0 0 / 90%);
}
</style>
</head>
<body class="innerpage">
<div class="container">
<form name="form" method="post" action="upload.php" enctype="multipart/form-data" >
<input type="file" name="my_file" /><br /><br />
<input type="submit" name="submit" value="Upload"/>
</form>
<div class="icon-main">
  <?php
     $files = glob("svg-icon/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png',
				'svg'
         );
			 $filename = $image;
$without_extension = substr($filename, 0, strrpos($filename, "."));
         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
           	echo '<div class="icon">';
             echo '<img src="'.$image .'" alt="'.$image .'" />';
			             echo '<p><a href="download.php?files=' . urlencode($image) . '">Download</a></p>';
			 echo '<span>';
				echo basename($without_extension) ."<br/>";
			 echo '</span>';
			 echo '</div>';
            } else {
                continue;
            }
          }
       ?>
	   </div>
	   </div>

</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script>
</script>
</html>
