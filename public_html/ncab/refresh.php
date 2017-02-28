<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 05.05.12
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */


defined('PRIVATE_PATH')
 || define('PRIVATE_PATH', realpath(dirname(__FILE__) . '/../../private'));

include_once PRIVATE_PATH . '/classes/simo_site.php';
include_once PRIVATE_PATH . '/config/simo_site_lesnay_conf.php';

global $__cfg;

$logFile = realpath(dirname(__FILE__)) . '/phplog.log';

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

ini_set('max_execution_time', '180');
ini_set('memory_limit', '256M');

error_log('Start refresh at Lesnay ' . date('d.m.Y H:i:s') . "\r\n", 3, $logFile);

$o_cab_xml = new gkh_cabxml(0);
//$o_cab_xml->refreshFile($__cfg['site.dir'] . '/ncab/ftp/import.xml', $__cfg['site.dir'] . '/ncab');

$date = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
//$date = date('Y-m-d');
//$today = true;
$o_meters = new gkh_meters_cab(0);
$o_meters->exportMetersValue($__cfg['site.dir'] . '/ncab', $__cfg['site.dir'] . '/ncab/ftp/export_meters.xml', $__cfg['site.dir'] . '/ncab/ftp/Export_meters.ZIP', $date, true);
error_log('Generate Lesnay ' . $__cfg['site.dir'] . '/ncab/ftp/Export_meters.ZIP' . "\r\n", 3, $logFile);

if (file_exists($__cfg['site.dir'] . '/ncab/ftp/IMPORT.ZIP')) {
    $o_cab_xml->refreshFile($__cfg['site.dir'] . '/ncab/ftp/IMPORT.ZIP', $__cfg['site.dir'] . '/ncab');
    error_log('Import for Lesnay ' . $__cfg['site.dir'] . '/ncab/ftp/IMPORT.ZIP' . "\r\n", 3, $logFile);
    //unlink($__cfg['site.dir'] . '/ncab/ftp/IMPORT.ZIP');
}

error_log('End refresh Lesnay at ' . date('d.m.Y H:i:s') . "\r\n", 3, $logFile);
exit;