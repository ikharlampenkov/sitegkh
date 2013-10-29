<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Moris
 * Date: 29.10.13
 * Time: 22:30
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class gkh_sms
 * Отвечает за рассылку sms-сообщений
 */
class gkh_sms extends gkh
{
    private $_delim = ';';

    public function setDelim($value)
    {
        $this->_delim = $value;
    }

    public function getDelim()
    {
        return $this->_delim;
    }

    /**
     * @param      $fileName
     * @param bool $first учитывать ли первую строку
     *
     * @return array
     */
    public function readCSV($fileName, $first = true)
    {
        $retArray = array();

        if ($fileName !== '') {
            $file = fopen($fileName, 'r');

            while (($line = fgets($file)) !== false) {
                $temp_array = preg_split('/' . $this->_delim . '/', $line);

                //print_r($temp_array);

                foreach ($temp_array as &$val) {
                    $val = mb_convert_encoding(str_replace('"', '', $val), 'Windows-1251', 'Windows-1251'); //UTF-8
                    $val = str_replace("\r\n", '', $val);
                }

                if ($first) {
                    $first = false;
                } else {
                    $retArray[] = $temp_array;
                }
            }
            fclose($file);
        }

        //print_r($retArray);

        return $retArray;
    }

    public function saveCSV($fileName, $data)
    {
        $strOut = '';
        foreach ($data as $value) {
            $strOut .= implode($this->_delim, $value) . "\r\n";
        }

        $file = fopen($fileName, 'w');
        fwrite($file, $strOut);
        fclose($file);
    }

    public function readMessageFile($fileName)
    {
        if ($fileName !== '') {
            $strOut = file_get_contents($fileName);
            return mb_convert_encoding($strOut, 'UTF-8', 'Windows-1251'); //UTF-8
        } else {
            return '';
        }
    }

    public function sendMessage($data)
    {
        global $__cfg;
        $message = $data['message'];
        foreach ($data['pa'] as $key => $value) {
            if (isset($value['check'])) {
                try {
                    $test = $this->_send_sms($value['phone'], mb_convert_encoding($message . ' ' . $value['debt'], 'Windows-1251', 'UTF-8'), $__cfg['sms.login'], $__cfg['sms.password']); //рассылка сообщения
                    simo_log::logMsg($test);
                } catch (Exception $e) {
                    simo_exception::registrMsg($e, $this->_debug);
                }
            }
        }
    }

    private function _send_sms($to, $msg, $login, $password)
    {
        $u = 'http://www.websms.ru/http_in4.asp';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'Http_username=' . urlencode($login) . '&Http_password=' . urlencode($password) . '&Phone_list=' . $to . '&Message=' . urlencode($msg));
        curl_setopt($ch, CURLOPT_URL, $u);
        $u = trim(curl_exec($ch));
        curl_close($ch);
        return (preg_match('#Http_id\s*=\s*0#i', $u));
    }

}