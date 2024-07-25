<?php include "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>測試</title>
    <style>

    </style>
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
    <hr>

    <div class="container mt-3">
        <table class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th>圖片</th>
                    <th>文字</th>
                    <th style="width: 5%;">顯示</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="./images/img.jpg" alt="" style="width: 50%;">
                    </td>
                    <td>
                        <label for=""></label>
                        <input type="text" name="text" id="">
                    </td>
                    <td><input type="checkbox" name="" id="" value=""></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img src="" alt="">
                    </td>
                    <td>
                        <label for=""></label>
                        <input type="text" name="text" id="">
                    </td>
                    <td><input type="checkbox" name="" id="" value=""></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <img src="" alt="">
                    </td>
                    <td>
                        <label for=""></label>
                        <input type="text" name="text" id="">
                    </td>
                    <td><input type="checkbox" name="" id="" value=""></td>
                </tr>
            </tbody>
        </table>
        <div>
            <a href="add_img.php"><button>新增</button></a>
            <a href=""><button>刪除</button></a>
            <a href=""><button>編輯</button></a>
        </div>
        <br>
    </div>
</body>

</html>