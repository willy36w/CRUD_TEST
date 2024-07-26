<?php include_once "base.php";
$dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
$pdo = new PDO($dsn, 'root', '');
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    $sql = "insert into `images`(`img`,`text`) value('{$_FILES['img']['name']}','{$_POST['text']}')";
    $pdo->exec($sql);
    to("../index.php");
    // $Images->save($sql);
    // dd($_FILES);
}
