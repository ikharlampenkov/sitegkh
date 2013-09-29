<?php

/**
 * Настройки системы
 *
 * @author Moris
 * @package simo
 */

$__cfg['db.dsn'] = 'mysql://sibdnevnik_:e10adc39h@localhost:3306/sibdnevnik_db';
$__cfg['site.main.dir'] = PRIVATE_PATH . '/../';;
$__cfg['db.driver.path'] = $__cfg['site.main.dir'] . 'private/classes/stdclass/db_driver/';
$__cfg['db.driver.debug'] = false;

$__cfg['log.path'] = $__cfg['site.main.dir'] . 'private/logs/';
$__cfg['log.level'] = 2;

$__cfg['system.debug'] = false;

$__cfg['smarty.templates'] = $__cfg['site.main.dir'] . 'private/smartytemplates/templates/';
$__cfg['smarty.compile']   = $__cfg['site.main.dir'] . 'private/smartytemplates/templates_c/';
$__cfg['smarty.cache']     = $__cfg['site.main.dir'] . 'private/smartytemplates/cache/';
$__cfg['smarty.compile_check'] = true;
$__cfg['smarty.debug'] = false;

$__cfg['smarty.default.title'] = 'ЖКХИНФОРМ.РФ';
$__cfg['smarty.default.desc'] = '';
$__cfg['smarty.default.keyword'] = '';

//$__cfg['smarty.encoding'] = 'windows-1251';
$__cfg['smarty.encoding'] = 'utf-8';

$__cfg['site.dir'] = $__cfg['site.main.dir'] . 'public_html/gkh/';
$__cfg['site.url'] = 'http://жкхинформ.рф/';

$__cfg['temp.dir'] = $__cfg['site.main.dir'] . 'private/temp/';
$__cfg['temp.support.dir'] = $__cfg['site.main.dir'] . 'public_html/gkh/temp_support/';

$__cfg['page.path.fm'] = $__cfg['site.dir'] . 'fm/pages/';
$__cfg['page.path.anketa'] = $__cfg['site.dir'] . 'anketa/pages/';

$__cfg['sms.login'] = 'sibdnevnik';
$__cfg['sms.password'] = 'kirill604';

?>