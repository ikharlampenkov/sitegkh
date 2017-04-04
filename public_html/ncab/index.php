<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 27.01.12
 * Time: 11:08
 * To change this template use File | Settings | File Templates.
 */

ini_set('display_errors', 0);
ini_set('max_execution_time', '180');
ini_set('memory_limit', '128M');
/*

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

$o_smarty->assign('razdel_type', '');
$o_smarty->assign('login', false);
*/


//$ls = '02030207';

$management_company = 1;

$o_pa = new gkh_personal_account_site($management_company);
$account_info = $o_pa->getPAByUser(share_user_site::getUserId());
$ls = $account_info['ls'];

$o_smarty->assign('user_ls', $ls);
$o_smarty->assign('user', $account_info['fio']);

$o_smarty->assign('page_ncab', 0);

$o_cab = new gkh_cabxml($ls);

global $__cfg;

try {

    if (file_exists($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/IMPORT.XML')) {
        $fileName = $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/IMPORT.XML';
    } else {
        $fileName = $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/IMPORT.xml';
    }

    if ($page == 'about') {
        $o_cab->loadFile($fileName);
        $o_smarty->assign('about_ls', $o_cab->getBlock('ls'));
        $o_smarty->assign('about_jilci', $o_cab->getBlock('jilci'));

        $o_smarty->assign('page_ncab', 1);
    }

    if ($page == 'debt') {
        $o_cab->loadFile($fileName);
        $o_smarty->assign('debts', $o_cab->getBlock('dolg'));
        $o_smarty->assign('debt_kapremonts', $o_cab->getBlock('dolg_kapremont'));

        $o_smarty->assign('page_ncab', 1);
    }

    if ($page == 'accruals') {
        $o_cab->loadFile($fileName);
        $o_smarty->assign('accruals', $o_cab->getBlock('nach'));

        $o_smarty->assign('page_ncab', 1);
    }

    if ($page == 'pmeters') {
        $o_cab->loadFile($fileName);
        $o_smarty->assign('meters', $o_cab->getBlock('sch'));

        $date = date('Y-m-d');
        $o_meters = new gkh_meters_cab($account_info['id']);

        if (isset($_POST['data'])) {
            if (date('j') >= $__cfg['ncab.startdate'] && date('j') <= $__cfg['ncab.finishdate']) {
                $o_meters->setMetersValue($_POST['data'], 1);
                simo_functions::chLocation('?page=' . $page);
                exit;
            } else {
                $o_smarty->assign('error_message', 'Показания не приняты.');
            }
        }

        $o_smarty->assign('pa_meters', $o_meters->getMetersByUser($date));
        $active = true;
        if (!(date('j') >= $__cfg['ncab.startdate'] && date('j') <= $__cfg['ncab.finishdate'])) {
            $active = false;
        }

        $o_smarty->assign('active', $active);
        $o_smarty->assign('page_ncab', 1);
    }

    if ($page == 'meters') {
        $date = date('Y-m-d');
        $o_meters = new gkh_meters($account_info['id']);

        if (isset($_POST['data'])) {
            $o_meters->setMetersValue($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('meters', $o_meters->getMetersByUser($date));

        $o_smarty->assign('page_ncab', 1);
    }

    if ($page == 'support') {


        if (isset($_GET['category'])) {
            $category = $_GET['category'];
        } else {
            $category = gkh_tech_support_post_site::CATEGORY_REQUEST_MASTER;
        }

        if ($category == gkh_tech_support_post_site::CATEGORY_REQUEST_MASTER) {
            $o_smarty->assign('module_title', 'Заявки на вызов мастера');
            $o_smarty->assign('action_title', 'Подать заявку');
            $o_smarty->assign('ticket_title', 'Заявка');
            $o_smarty->assign('txt', 'Подать заявку');
        } else {
            $o_smarty->assign('module_title', 'Вопросы');
            $o_smarty->assign('action_title', 'Задать вопрос');
            $o_smarty->assign('ticket_title', 'Вопрос');
            $o_smarty->assign('txt', 'Задать вопрос');
        }

        $o_smarty->assign('category', $category);

        $o_tech_support_post = new gkh_tech_support_post_site($account_info['id']);

        if ($action == 'question') {
            if (isset($_POST['data'])) {
                $o_tech_support_post->askQuestion($_POST['data'], $category);
                simo_functions::chLocation('?page=' . $page . '&category=' . $category);
                exit;
            }
        } elseif ($action == 'view_ticket') {
            if (isset($_POST['data'])) {
                $o_tech_support_post->askDopQuestion($_GET['id'], $_POST['data']);
                simo_functions::chLocation('?page=' . $page . '&category=' . $category);
                exit;
            }

            $o_smarty->assign('ticket', $o_tech_support_post->getTicket($_GET['id'], $category));
        } elseif ($action == 'del_ticket') {
            $o_tech_support_post->delTicket($_GET['id']);
            simo_functions::chLocation('?page=' . $page . '&category=' . $category);
        } else {
            $o_smarty->assign('ticket_list', $o_tech_support_post->getAllTicket($category));
        }

        $o_smarty->assign('page_ncab', 1);
    }


    if ($page == 'document') {

        if (isset($_GET['root'])) {
            $root = $_GET['root'];
        } else {
            $root = 0;
        }

        $o_document = new gkh_document();

        if ($root != 0) {
            $o_smarty->assign('document', $o_document->getDocument($root));
            $o_smarty->assign('path_to_document', $o_document->getFullPathToFolder($root));
        } else {
            $o_smarty->assign('document', false);
        }

        $o_smarty->assign('document_list', $o_document->getDocumentCatalog($root));
    }

    if ($page == 'content_page' && isset($_GET['title'])) {

        $o_content_page = new gkh_content_page_site();
        $o_smarty->assign('conpage', $o_content_page->getContentPage($_GET['title']));
        $o_smarty->assign('conpage_title', $_GET['title']);
    }

    if ($page == 'news') {

        $o_news = new gkh_news();

        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $o_smarty->assign('news_category', $o_news->getNewsCategory($category));
        } else {
            $category = gkh_news::ANY_CATEGORY;
        }
        $o_smarty->assign('category', $category);

        if ($action == 'view_news' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_news->addComment($_GET['id'], $_POST['data']);
                simo_functions::chLocation('?page=news&action=view_news&id=' . $_GET['id'] . '&category=' . $category);
                exit;
            }

            $news = $o_news->getNews($_GET['id']);
            $o_smarty->assign('news', $news);
            $o_smarty->assign('news_comment_list', $o_news->getAllCommentByNews($_GET['id'], gkh_news::IS_MODERATED));
            $o_smarty->assign('is_important', $news['is_impotant']);
        } else {

            if (isset($_GET['pager'])) {
                $cur_page = $_GET['pager'];
            } else {
                $cur_page = 0;
            }
            $o_smarty->assign('cur_page', $cur_page);

            if (isset($_GET['is_important'])) {
                $o_smarty->assign('news_list_full', $o_news->getImportantNews($cur_page));
                $o_smarty->assign('page_info', $o_news->getPageInfo($category, $cur_page, 1));
                $o_smarty->assign('is_important', 1);
            } else {

                $o_smarty->assign('news_list_full', $o_news->getAllNews($category, $cur_page));
                $o_smarty->assign('page_info', $o_news->getPageInfo($category, $cur_page, -1));
                $o_smarty->assign('is_important', 0);
            }
        }
    }

} catch (Exception $e) {
    $o_smarty->assign('cab_exception', $e->getMessage());
}


if (empty($firstPage)) {
    $firstPage = true;
}
$o_smarty->assign('firstPage', $firstPage);

$o_smarty->display('ncab/index.tpl');

?>