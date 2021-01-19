<?php
function htmlanfang($titel = "PHP Session") {
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titel; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
}
function htmlende($footertitle = "neverstop.") {
    ?>
	</body>
    <footer><p><?php echo $footertitle ?></p></footer>
</html>
<?php
}
?>