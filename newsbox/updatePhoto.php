<?php include("header.php");

$check_new = mysqli_query($connection, "SELECT * FROM `news` WHERE id");
$new = $check_new -> fetch_assoc();
$id=(int)$_GET["id"];

$tmp = 'C:\\xampp\\htdocs\\2L\\images\\'.$_FILES['picture']['name'];

if (move_uploaded_file($_FILES['picture']['tmp_name'],$tmp)) {
    echo "Фотография корректна и была успешно загружена.\n";
    $picture = '..\images/'.$_FILES['picture']['name'];
    $flag=1;
    if($stmt=$connection->prepare("UPDATE `news` SET `picture`=? WHERE news.id=$id"))
    {
        /* связываем параметры с метками */
        $stmt->bind_param("s",$picture);
        $stmt->execute();
    } 
} else {
    echo "Ошибка загрузки фотография\n";
    exit(0);
}

header('Location: index.php');
include("footer.php"); ?>
