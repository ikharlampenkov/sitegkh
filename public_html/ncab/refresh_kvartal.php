<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 05.05.12
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */



include_once '/home/dnevnik/private/classes/simo_site.php';

include_once '/home/dnevnik/private/config/simo_site_kvartal_conf.php';

global $__cfg;

ini_set('display_errors', 0);

ini_set('max_execution_time', '180');
ini_set('memory_limit', '128M');

echo '11111';

$o_cab_xml = new gkh_cabxml(0);
//$o_cab_xml->refreshFile($__cfg['site.dir'] . '/ncab/ftp/import.xml', $__cfg['site.dir'] . '/ncab');

$date = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
//$date = date('Y-m-d');
//$today = true;
$o_meters = new gkh_meters_cab(0);
$o_meters->exportMetersValue($__cfg['site.dir'] . '/' . $__cfg['ncab.path'], $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/export_meters.xml', $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/Export_meters.ZIP', $date);

if (file_exists($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP')) {
    $o_cab_xml->refreshFile($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP', $__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '');
    unlink($__cfg['site.dir'] . '/' . $__cfg['ncab.path'] . '/ftp/IMPORT.ZIP');
}

?>