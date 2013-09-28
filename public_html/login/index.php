<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Moris
 * Date: 12.11.12
 * Time: 20:13
 * To change this template use File | Settings | File Templates.
 */

ini_set('display_errors', 0);

include_once $_SERVER['DOCUMENT_ROOT'] . '/allinclud.php';

$o_smarty = new simo_smarty();
$o_user = new share_user_site();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

if (isset($_GET['spage'])) {
    $spage = $_GET['spage'];
} else {
    $spage = 'main';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$firstPage = false;

$o_smarty->assign('page', $page);
$o_smarty->assign('spage', $spage);
$o_smarty->assign('action', $action);

$o_smarty->assign('domen', $_SERVER['SERVER_NAME']);

if ($o_user->isLogin()) {
    $o_smarty->assign('login', true);
    $o_smarty->assign('user', simo_session::getVar('login', 'user'));
    $o_smarty->assign('role', $o_user->getUserRole());

    if (isset($_GET['logout'])) {
        $o_user->logOut();
        header("Location: /");
    }

    header("Location: /");
} else {
    $o_smarty->assign('razdel_type', '');
    $o_smarty->assign('login', false);

    if (isset($_POST['personal_account']) && isset($_POST['psw'])) {

        $login = gkh_personal_account_site::getUserByPA($_POST['personal_account']);
        if ($login == false) {
            $login = $_POST['personal_account'];
        }

        if ($o_user->logIn($login, $_POST['psw'])) {
            header("Location: /");
        } else {
            $o_smarty->assign('login_fail', '1');
        }
    }
    if (empty($firstPage)) {
        $firstPage = true;
    }
    $o_smarty->assign('firstPage', $firstPage);

    $o_smarty->display('login.tpl');
}