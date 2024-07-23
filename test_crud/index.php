<?php include "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>測試</title>
</head>

<body>
    <table class="table table-bordered mt-3 text-center">
        <tr>
            <th width="20%">Name</th>
            <th width="20%">Number</th>
            <th width="30%">Adr</th>
            <th width="10%">Option</th>
        </tr>
        <?php
        $rows = $Tests->all();
        foreach ($rows as $row => $value) {
        ?>
            <tr>
                <td><?= $value['name'] ?></td>
                <td><?= $value['number'] ?></td>
                <td><?= $value['adr'] ?></td>
                <td style="display: flex;">
                    <button onclick="location.href='./backend/edit.php?id=<?= $value['id'] ?>'">編輯</button>
                    <button onclick="location.href='./api/del.php?id=<?= $value['id'] ?>'">刪除</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="./backend/add.php"><button>新增</button></a>
</body>

</html>