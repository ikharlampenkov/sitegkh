<?php

/**
 * Настройки системы
 *
 * @author Moris
 * @package simo
 */

$__cfg['db.dsn'] = 'mysql://sibdnevnik_lesna:e10adc39h@localhost:3306/sibdnevnik_lesna';
$__cfg['site.main.dir'] = PRIVATE_PATH . '/../';;
$__cfg['db.driver.path'] = $__cfg['site.main.dir'] . 'private/classes/stdclass/db_driver/';
$__cfg['db.driver.debug'] = false;

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

$__cfg['site.dir'] = $__cfg['site.main.dir'] . 'public_html';
$__cfg['site.url'] = 'http://ук-лесная.рф/';

$__cfg['temp.dir'] = $__cfg['site.main.dir'] . 'private/temp/';

$__cfg['temp.support.dir'] = $__cfg['site.dir'] . '/temp_support/';
$__cfg['file.upload.dir'] = $__cfg['site.dir'] . '/temp_files/';

$__cfg['sms.login'] = 'sibdnevnik';
$__cfg['sms.password'] = 'kirill604';

$__cfg['ncab.path'] = 'ncab';
$__cfg['ncab.ftp'] = 'ftp';
$__cfg['ncab.startdate'] = 1;
$__cfg['ncab.finishdate'] = 27;

$__cfg['finder.path'] = 'lesnay';