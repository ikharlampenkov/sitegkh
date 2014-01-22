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
    private $_delimiter = ';';

    public function setDelimiter($value)
    {
        $this->_delimiter = $value;
    }

    public function getDelimiter()
    {
        return $this->_delimiter;
    }

    /**
     * @param $fileName
     * @param bool $first учитывать ли первую строку
     *
     * @return array
     */
    public function readCSV($fileName, $first = true)
    {
        $retArray = array();
        $columnName = array();
        $i = 0;

        if ($fileName !== '') {
            $file = fopen($fileName, 'r');

            while (($line = fgets($file)) !== false) {
                $temp_array = preg_split('/' . $this->_delimiter . '/', $line);

                //print_r($temp_array);

                foreach ($temp_array as $key => &$val) {
                    $val = mb_convert_encoding(str_replace('"', '', $val), 'UTF-8', 'Windows-1251'); //UTF-8 Windows-1251
                    $val = str_replace("\r\n", '', $val);

                    if ($first == true) {
                        $columnName[$key] = $val;
                    } else {
                        $retArray[$i][$columnName[$key]] = $val;
                    }
                }

                if ($first == true) {
                    $first = false;
                }
                $i++;
            }
            fclose($file);
        }
        //print_r($retArray);

        return $retArray;
    }

    public function saveCSV($fileName, $data, $first = true)
    {
        $strOut = '';
        foreach ($data as $value) {
            if ($first == true) {
                foreach ($value as $key => $empty) {
                    $strOut .= $key . $this->_delimiter;
                }
                $strOut = substr($strOut, 0, strlen($strOut) - 1);
                $strOut .= "\r\n";

                $first = false;
            }

            $strOut .= implode($this->_delimiter, $value) . "\r\n";
        }

        $file = fopen($fileName, 'w');
        fwrite($file, $strOut);
        fclose($file);
    }

    public function readMessageFile($fileName, $convert = false)
    {
        if ($fileName !== '' && file_exists($fileName)) {
            $strOut = file_get_contents($fileName);
            if ($convert) {
                return mb_convert_encoding($strOut, 'UTF-8', 'Windows-1251'); //UTF-8
            } else {
                return $strOut;
            }
        } else {
            return '';
        }
    }

    public function sendMessage($data)
    {
        global $__cfg;
        $message = $data['message'];
        $counter = 0;
        foreach ($data['pa'] as $key => $value) {
            if (isset($value['check'])) {
                try {
                    $messageSms = str_replace('%debt%', $value['debt'], $message);
                    $test = $this->_send_sms($value['phone'], mb_convert_encoding($messageSms, 'Windows-1251', 'UTF-8'), $__cfg['sms.login'], $__cfg['sms.password']); //рассылка сообщения
                    simo_log::logMsg('Message ' . $messageSms . ' to ' . $value['phone'] . ' response ' . $test);

                    if ($test == 0) {
                        $counter++;
                    }
                } catch (Exception $e) {
                    simo_exception::registrMsg($e, $this->_debug);
                }
            }
        }

        simo_log::logMsg('Дата: ' . date('d-m-Y') . ' отправлено sms ' . $counter);
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
        //simo_log::logMsg($to . ' ' . $u);
        curl_close($ch);
        $result = preg_match('#Http_id\s*=\s*0#i', $u);

        if ($result != 0) {
            simo_log::logMsg('Error with send SMS to: ' . $to . ' Message: ' . $u);
        }
        return $result;
    }

}