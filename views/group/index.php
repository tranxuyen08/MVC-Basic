<?php
$xhtml = '';
if (!empty($this->items)) {
    foreach ($this->items as $key => $value) {;
        $xhtml .= '<div class="row" id="item-' . $value['id'] . '">
                    <p class="w-10"> <input type="checkbox" name="Check-box[]" value="' . $value['id'] . '"></p>
                    <p>' . $value['name'] . '</p>
                    <p class="w-10">' . $value['id'] . '</p>
                    <p class="w-10">' . $value['amount'] . '</p>
                    <p class="w-10">' . $value['category_id'] . '</p>
                    <p class="w-10">' . $value['total'] . '</p>
                    <p class="w-10 action">
                        <a href="javascript:editItem(' . $value['id'] . ')">Edit</a>
                        <a href="javascript:deleteItem(' . $value['id'] . ')">Delete</a>
                    </p>
                  </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h3 class="title">Group : List</h3>
        <div id="dialog-confirm" title="Thông báo!" style="display: none;">
            <p>Bạn có chắc muốn xóa phần tử này hay không?</p>
        </div>
        <div class="list">
            <div class="row head">
                <p class="w-10"> <input type="checkbox" name="check-all" id="check-all"></p>
                <p>Group Name</p>
                <p class="w-10">Group Id</p>
                <p class="w-10">Group Amount</p>
                <p class="w-10">Group Category Id</p>
                <p class="w-10">Group Total</p>
                <p class="w-10 action">Action</p>
            </div>
            <?php echo $xhtml ?>
        </div>
    </div>

</body>

</html>