<?php

ini_set('display_errors', 0);

if (!isset($_SESSION)) {
    session_start();
}

/**
 * Подключаем общий файл конфигурации
 *
 */
$config_path = PRIVATE_PATH . '/config/';

$serverName = str_replace('www.', '', $_SERVER['SERVER_NAME']);

if ($serverName == 'xn--21-kmcm3c.xn--p1ai') {
    include_once $config_path . 'simo_site_reu21_conf.php';
} elseif ($serverName == 'xn--j1aakaas.xn--p1ai') {
    include_once $config_path . 'simo_site_ooockk_conf.php';
} elseif ($serverName == 'xn--9-4tbj3b.xn--p1ai') {
    include_once $config_path . 'simo_site_reu9_conf.php';
} elseif ($serverName == 'xn--19-kmcm3c.xn--p1ai') {
    include_once $config_path . 'simo_site_reu19_conf.php';
} elseif ($serverName == 'xn----htbdepbihnfb8cyg.xn--p1ai') {
    include_once $config_path . 'simo_site_molod_conf.php';
} elseif ($serverName == 'xn----8sbosgn1al9i.xn--p1ai') {
    include_once $config_path . 'simo_site_lesnay_conf.php';
} elseif ($serverName == 'xn----2-fddihw2arbyke.xn--p1ai') {
    include_once $config_path . 'simo_site_domo_conf.php';
} elseif ($serverName == 'xn----btbaoazc2alocedz3kqc.xn--p1ai') {
    include_once $config_path . 'simo_site_serebbor_conf.php';
} elseif ($serverName == 'xn----ltbgaahfft7c1d.xn--p1ai') {
    include_once $config_path . 'simo_site_gilishnik_cong.php';
} elseif ($serverName == 'xn----ftbdvwant.xn--p1ai') {
    include_once $config_path . 'simo_site_city_conf.php';
} elseif ($serverName == 'xn----7sbmzidj6b1b.xn--p1ai') {
    include_once $config_path . 'simo_site_ourhouse_conf.php';
} elseif ($serverName == 'xn----dtbidkcsuaa1ake.xn--p1ai') {
    include_once $config_path . 'simo_site_gilservice_conf.php';
} elseif ($serverName == 'xn----8sbifcsdibgfzb7bru.xn--p1ai') {
    include_once $config_path . 'simo_site_leningrad_conf.php';
} elseif ($serverName == 'xn--h1aglqqj4a.xn--p1ai') {
    include_once $config_path . 'simo_site_shultc_conf.php';
} elseif ($serverName == 'xn----itbqkpljs.xn--f1aefjego4ag.xn--p1ai' || $serverName == 'xn----itbqkpljs.xn--p1ai') {
    include_once $config_path . 'simo_site_center_conf.php';
} elseif ($serverName == 'xn---42-5cdbjcxa1ate1a3axbf2a7o.xn--p1ai') { //xn----7sbbfcravpexztbfy9m.xn--p1ai
    include_once $config_path . 'simo_site_kvkem_conf.php';
} elseif ($serverName == 'ukzles42.ru') {
    include_once $config_path . 'simo_site_zles_conf.php';
} elseif ($serverName == 'xn----8sbflx5ait9i.xn--p1ai') {
    include_once $config_path . 'simo_site_pervay_conf.php';
} elseif ($serverName == 'xn--80aai5amepo3c7b7a.xn--p1ai') {
    include_once $config_path . 'simo_site_shalgo_conf.php';
} elseif ($serverName == 'xn---42-5cdakyymnnb9ake1az.xn--p1ai') {
    include_once $config_path . 'simo_site_kvartal_conf.php';
} elseif ($serverName == 'xn----stbeplh5f.xn--p1ai') {
    include_once $config_path . 'simo_site_plus_conf.php';
} elseif ($serverName == 'xn----1-redaapy3g.xn--p1ai') {
    include_once $config_path . 'simo_site_reu1_conf.php';
} elseif ($serverName == 'xn----8sblrfbqjg9bbj5dye.xn--p1ai') {
    include_once $config_path . 'simo_site_domashni_conf.php';
} elseif ($serverName == 'xn----ltbm8b6b.xn--p1ai') {
    include_once $config_path . 'simo_site_igkh_conf.php';
} elseif ($serverName == 'xn--c1acndkmcarx.xn--p1ai') {
    include_once $config_path . 'simo_site_mycity_conf.php';
} elseif ($serverName == 'xn---10-zedp3d.xn--p1ai') {
    include_once $config_path . 'simo_site_reu10_conf.php';
} elseif ($serverName == 'xn--7-4tbj3b.xn--p1ai') {
    include_once $config_path . 'simo_site_reu7_conf.php';
} elseif ($serverName == 'xn----8sbahicdrxh6bgnvs0s.xn--p1ai') {
    include_once $config_path . 'simo_site_przvd_conf.php'; //ук-предзаводская.рф
} else {
    include_once $config_path . 'simo_site_conf.php';
}

/**
 * Подключаем Smarty
 *
 */
include_once PRIVATE_PATH . '/classes/smarty/Smarty.class.php';

/**
 * Функция автоматически загружающая файлы с классами по необходимости
 *
 * @param string $className
 */
function autoload($className)
{
    global $__cfg;

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/stdclass/' . $className . '.php')) {
        include_once($fn);
    }

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/stdclass/db_driver/' . $className . '.php')) {
        include_once($fn);
    }

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/share/' . $className . '.php')) {
        include_once($fn);
    }

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/gkh/' . $className . '.php')) {
        include_once($fn);
    }

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/gkh_site/' . $className . '.php')) {
        include_once($fn);
    }

    if (file_exists($fn = $__cfg['site.main.dir'] . 'private/classes/FileManager/' . $className . '.php')) {
        include_once($fn);
    }
}

global $__cfg;

spl_autoload_register('autoload', false);

$o_log = new simo_log();
$o_log->setLogLevel($__cfg['log.level']);

ini_set('date.timezone', 'Asia/Krasnoyarsk');

if (isset($__cfg['finder.path']) && !empty($__cfg['finder.path'])) {
    $_SESSION['finder_path'] = $__cfg['finder.path'] . '/';

    if (!file_exists($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/')) {
        mkdir($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/', 0700);
        mkdir($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/_thumbs/', 0700);
        mkdir($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/files/', 0700);
        mkdir($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/flash/', 0700);
        mkdir($__cfg['site.dir'] . '/ckfinder/userfiles/' . $__cfg['finder.path'] . '/images/', 0700);
    }
} else {
    $_SESSION['finder_path'] = '';
}