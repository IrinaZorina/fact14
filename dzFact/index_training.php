<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php $img=isset($_GET['img'])?$_GET['img']:1;?>
<img src="img_training/<?=$img?>.jpeg" alt="1" style="width: 20%">

<a href="index_training.php?img=<?php echo ($img>1)?($img-1):5; ?>">предыдущий</a>

<a href="index_training.php?img=<?php echo ($img<5)?($img+1):1; ?>">следующий</a>

</body>
</html>