<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 15.05.12
 * Time: 16:17
 * To change this template use File | Settings | File Templates.
 */
class gkh_qa extends gkh
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getEmail()
    {
        try {
            $sql = 'SELECT * FROM emails WHERE id=1';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result[0]['value'];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateEmail($id, $data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE emails
                        SET value="' . $data['email'] . '"
                        WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function sendEmail($data)
    {
        $message = 'Вопрос от посетителей сайта: ' . "\r\n";
        $message .= 'Дата: ' . date('d.m.Y') . "\r\n" .
                'Фамилия имя отчество: ' . $data['fio'] . "\r\n" .
                'Адрес: ' . $data['address'] . "\r\n" .
                'Телефон: ' . $data['phone'] . "\r\n" .
                'E-mail: ' . $data['email'] . "\r\n" .
                'Тема письма: ' . $data['subject'] . "\r\n" .
                'Тип сообщения: ' . $data['type'] . "\r\n" .
                'Текст сообщения: ' . $data['text'] . "\r\n" . "\r\n";

        $email = $this->getEmail();

        $header = 'From: order@ук-серебряныйбор.рф';
        if (!empty($email)) {
            mail($email, 'Новый вопрос', mb_convert_encoding($message, 'windows-1251', 'UTF-8'), $header);
        }

    }

}