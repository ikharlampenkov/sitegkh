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
include_once PRIVATE_PATH . '/config/simo_site_kvartal_conf.php';

global $__cfg;

$logFile = realpath(dirname(__FILE__)) . '/phplog.log';

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

ini_set('max_execution_time', '180');
ini_set('memory_limit', '128M');

error_log('Start refresh Kvartal at ' . date('d.m.Y H:i:s') . "\r\n", 3, $logFile);

$o_cab_xml = new gkh_cabxml(0);
//$o_cab_xml->refreshFile($__cfg['site.dir'] . '/ncab/ftp/import.xml', $__cfg['site.dir'] . '/ncab');

$date = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
//$date = date('Y-m-d');
//$today = true;
$o_meters = new gkh_meters_cab(0);
$o_meters->exportMetersValue($__cfg['site.dir'] . '/' . $__cfg['ncab.path'], $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/export_meters.xml', $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/Export_meters.ZIP', $date);
error_log('Generate Kvartal ' . $__cfg['site.dir'] . '/ncab/ftp/Export_meters.ZIP' . "\r\n", 3, $logFile);

if (file_exists($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP')) {
    $o_cab_xml->refreshFile($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP', $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '');
    error_log('Inport Kvartal ' . $__cfg['site.dir'] . '/ncab/ftp/IMPORT.ZIP' . "\r\n", 3, $logFile);
    unlink($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP');
}

error_log('End refresh Kvartal at' . date('d.m.Y H:i:s') . "\r\n", 3, $logFile);
exit;