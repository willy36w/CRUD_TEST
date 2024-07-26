<?php
include_once "../api/base.php";
$img = $_GET;
$data = $Images->find($img['id']);
$file = "../images/" . $data['img'];
?>
<h3>編輯</h3>
<hr>
<form action="../api/add_img.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <img src="<?= $file; ?>" alt="" style="width: 30%;">
            </td>
            <td>
                <input type="text" name="text" id="text" value="<?= $data['text'] ?>">
            </td>
            <td style="display: flex;">
                <input type="submit" value="確認">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>