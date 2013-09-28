<?php

/**
 * Настройки системы
 *
 * @author Moris
 * @package simo
 */

$__cfg['db.dsn'] = 'mysql://dnevnik_gkxuser:e10adc39h@db.hosting.risp.ru:3606/dnevnik_gkh_lesnay';
$__cfg['site.main.dir'] = '/home/dnevnik/';
$__cfg['db.driver.path'] = $__cfg['site.main.dir'] . 'private/classes/stdclass/db_driver/';
$__cfg['db.driver.debug'] = true;

$__cfg['log.path'] = $__cfg['site.main.dir'] . 'private/logs/';
$__cfg['log.level'] = 2;

$__cfg['system.debug'] = false;

$__cfg['smarty.templates'] = $__cfg['site.main.dir'] . 'private/smartytemplates_yklesn/templates/';
$__cfg['smarty.compile']   = $__cfg['site.main.dir'] . 'private/smartytemplates_yklesn/templates_c/';
$__cfg['smarty.cache']     = $__cfg['site.main.dir'] . 'private/smartytemplates_yklesn/cache/';
$__cfg['smarty.compile_check'] = true;
$__cfg['smarty.debug'] = false;

$__cfg['smarty.default.title'] = 'ООО «Управляющая компания Лесная Поляна».';
$__cfg['smarty.default.desc'] = '';
$__cfg['smarty.default.keyword'] = '';

//$__cfg['smarty.encoding'] = 'windows-1251';
$__cfg['smarty.encoding'] = 'utf-8';

$__cfg['site.dir'] = $__cfg['site.main.dir'] . 'public_html/gkh/site_gkh';
$__cfg['site.url'] = 'http://ук-лесная.рф/';

$__cfg['temp.dir'] = $__cfg['site.main.dir'] . 'private/temp/';

$__cfg['temp.support.dir'] = $__cfg['site.dir'] . '/temp_support/';
$__cfg['file.upload.dir'] = $__cfg['site.dir'] . '/temp_files/';

$__cfg['sms.login'] = 'sibdnevnik';
$__cfg['sms.password'] = 'kirill604';

$__cfg['ncab.path'] = 'ncab';
$__cfg['ncab.ftp'] = 'ftp';

?>