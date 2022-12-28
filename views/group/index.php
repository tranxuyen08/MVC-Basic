<?php
$xhtml = '';
    if(!empty($this->items)){
        foreach($this->items as $key => $value){;
        $xhtml .= '<div class="row">
                    <p class="w-10"> <input type="checkbox" name="Check-box[]" value="'.$value['id'].'"></p>
                    <p>'.$value['name'].'</p>
                    <p class="w-10">'.$value['id'].'</p>
                    <p class="w-10">'.$value['amount'].'</p>
                    <p class="w-10">'.$value['category_id'].'</p>
                    <p class="w-10">'.$value['total'].'</p>
                    <p class="w-10">Member</p>
                    <p class="w-10 action">
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </p>
                  </div>';
        }
    }
?>

   <div class="content">
        <h3>Group : List</h3>
        <div class="list">
            <div class="row head">
                <p class="w-10"> <input type="checkbox" name="check-all" id="check-all"></p>
                <p>Group Name</p>
                <p class="w-10">Group Id</p>
                <p class="w-10">Group Amount</p>
                <p class="w-10">Group Category Id</p>
                <p class="w-10">Group Total</p>
                <p class="w-10">Member</p>
                <p class="w-10 action">Action</p>
            </div>
            <?php echo $xhtml ?>
        </div>
    </div>
