<?php
/**
 * Created by JetBrains PhpStorm.
 * User: User
 * Date: 20.03.13
 * Time: 20:36
 * To change this template use File | Settings | File Templates.
 */


setlocale(LC_TIME, 'ru_RU.UTF-8', 'rus_RUS.UTF-8', 'Russian_Russia.UTF-8');

include_once $_SERVER['DOCUMENT_ROOT'] . '/allinclud.php';

//$db = simo_db::getInstance();
//$db->connect('mysql://dnevnik_gkxuser:e10adc39h@db.hosting.risp.ru:3606/dnevnik_gkh_db');

//$dbList = $db->query('SHOW DATABASES', simo_db::QUERY_MOD_ASSOC);
//print_r($dbList);

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$dsn = 'mysql:host=db.hosting.risp.ru;port=3606;dbname=';

$db = new PDO($dsn . 'dnevnik_gkh_db', 'dnevnik_gkxuser', 'e10adc39h');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

    $statement = $db->prepare('SHOW DATABASES');
    $statement->execute();
    $dbList = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($dbList);

    $selectStatement = $db->prepare('SELECT * FROM user WHERE login=:login');
    $updateStatement = $db->prepare('UPDATE user SET password=:psw WHERE id=:id');

    foreach ($dbList as $dbName) {
        if (strpos($dbName['Database'], 'dnevnik_gkh') !== false) {
            $statement = $db->prepare('USE ' . $dbName['Database'] . '');
            $statement->execute();


            $selectStatement->execute(array('login' => 'admin'));
            $user = $selectStatement->fetch(PDO::FETCH_ASSOC);

            print_r($user);

            $updateStatement->execute(array('psw' => '<jkmijq gfhjkM', 'id' => $user['id']));
        }
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}