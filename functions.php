<?php
 function verif_compte(): bool
{
    if (isset($_POST['username']) && !empty($_POST['username']) &&
        isset($_POST['passwordconfirm']) && !empty($_POST['passwordconfirm']) &&
        isset($_POST['phonenumber']) && !empty($_POST['phonenumber']) &&
        isset($_POST['email']) && !empty($_POST['email'])) {
        return true;
    }
    else{
        return false;
    }
}
