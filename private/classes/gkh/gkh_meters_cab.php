<?php

/*
  CREATE TABLE IF NOT EXISTS `meters_value_cab` (
    `personal_account_id` int(10) unsigned NOT NULL,
    `num` varchar(255) NOT NULL,
    `date` date NOT NULL,
    `value` decimal(10,3) default NULL,
    PRIMARY KEY  (`personal_account_id`,`date`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 */

/**
 * Description of gkh_meters
 *
 * @author Administrator
 */
class gkh_meters_cab extends gkh
{

    protected $_personal_account;

    public function __construct($personal_account)
    {
        parent::__construct();

        $this->_personal_account = $personal_account;
    }

    public function setMetersForUser($data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            //$this->_db->query('DELETE FROM meters_to_account WHERE personal_account_id=' . $this->_personal_account . ' AND meters_id=' . );
            if (!empty($data['meters'])) {
                foreach ($data['meters'] as $meter => $value) {
                    $sql
                        = 'REPLACE INTO meters_to_account(personal_account_id, meters_id, imp_id, naim, type, nomer)
                                VALUES(' . $this->_personal_account . ', ' . $meter . ', "' . $value['imp_id'] . '", "' . $value['naim'] . '", "' . $value['type'] . '", "' . $value['nomer'] . '")';
                    //echo $sql;
                    $this->_db->query($sql); //ID="04010001.4" NAIM="Счетчик э/э" TYPE="Счетчик э/э" NOMER="39009900" TEKPOKAZANIE="4 696,00"
                }
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function getMetersByUser($date, $today = false, $isHuman = 0)
    {
        try {
            $sql
                = 'SELECT imp_id, naim, type, nomer
                    FROM meters_to_account
                    WHERE personal_account_id=' . $this->_personal_account;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                $temp_date = date_parse($date);
                $prev_date = date('Y-m-d', mktime(0, 0, 0, $temp_date['month'], $temp_date['day'], $temp_date['year']));

                $cur_date = date('Y-m-d', mktime(0, 0, 0, $temp_date['month'] + 1, $temp_date['day'], $temp_date['year']));

                $retArray = array();

                foreach ($result as $key => $meter) {
                    $retArray[$meter['imp_id']]['imp_id'] = $meter['imp_id'];
                    $retArray[$meter['imp_id']]['naim'] = $meter['naim'];
                    $retArray[$meter['imp_id']]['type'] = $meter['type'];
                    $retArray[$meter['imp_id']]['nomer'] = $meter['nomer'];

                    $retArray[$meter['imp_id']]['cur_value'] = $this->_getMeterValueByDate($meter['imp_id'], $cur_date);
                    if ($today) {
                        $retArray[$meter['imp_id']]['prev_value'] = $this->_getMeterValueByTodayDate($meter['imp_id'], $prev_date, $isHuman);
                    } else {
                        $retArray[$meter['imp_id']]['prev_value'] = $this->_getMeterValueByDate($meter['imp_id'], $prev_date, true, $isHuman);
                    }
                }
                return $retArray;
            } else {
                return false;
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function exportMetersByUser($date, $isHuman = 0)
    {
        try {
            $sql
                = 'SELECT imp_id, naim, type, nomer
                        FROM meters_to_account
                        WHERE personal_account_id=' . $this->_personal_account;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {

                $retArray = array();

                foreach ($result as $key => $meter) {
                    $tempValue = $this->_getExportMeterValueByDate($meter['imp_id'], $date, $isHuman);
                    if ($tempValue !== false) {
                        $retArray[$meter['imp_id']]['imp_id'] = $meter['imp_id'];
                        $retArray[$meter['imp_id']]['naim'] = $meter['naim'];
                        $retArray[$meter['imp_id']]['type'] = $meter['type'];
                        $retArray[$meter['imp_id']]['nomer'] = $meter['nomer'];

                        $retArray[$meter['imp_id']]['prev_value'] = $tempValue;
                    }
                }
                return $retArray;
            } else {
                return false;
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function setMetersValue($data, $isHuman = 0)
    {
        try {
            $data = $this->_db->prepareArray($data);

            foreach ($data as $meter_id => $value) {
                if ($value['value'] != 0) {
                    $value['date'] = date('Y-m-d H:i:s', strtotime($value['date']));
                    $sql
                        = 'REPLACE meters_value_cab(personal_account_id, num, date, value, is_human)
                                      VALUES(' . $this->_personal_account . ', "' . $meter_id . '", "' . $value['date'] . '", ' . str_replace(',', '.', $value['value']) . ', ' . $isHuman . ')';
                    //print_r($sql);
                    $this->_db->query($sql);
                }
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    protected function _getMeterValueByDate($meter_id, $date, $is_small = false, $isHuman = 0)
    {
        try {
            $sql
                = 'SELECT * FROM meters_value_cab
                    WHERE personal_account_id=' . $this->_personal_account . '
                      AND num="' . $meter_id . '" ';
            if ($is_small) {
                $sql .= ' AND DATE_FORMAT(date, "%Y-%m")<=DATE_FORMAT("' . $date . '", "%Y-%m") ';
            } else {
                $sql .= ' AND DATE_FORMAT(date, "%Y-%m")=DATE_FORMAT("' . $date . '", "%Y-%m") ';
            }

            if ($isHuman == 1) {
                $sql .= ' AND is_human=1 ';
            }

            $sql .= ' ORDER BY date DESC LIMIT 1';
            // print_r($sql);
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                return $result[0];
            } else {
                return array('personal_account_id' => $this->_personal_account, 'meters_id' => $meter_id, 'date' => $date, 'value' => 0);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return array('personal_account_id' => $this->_personal_account, 'meters_id' => $meter_id, 'date' => $date, 'value' => 0);
        }
    }

    protected function _getExportMeterValueByDate($meter_id, $date, $isHuman = 0)
    {
        try {
            $sql
                = 'SELECT * FROM meters_value_cab
                    WHERE personal_account_id=' . $this->_personal_account . '
                      AND num="' . $meter_id . '"
                      AND date>=DATE_FORMAT("' . $date . '", "%Y-%m-%d") ';

            if ($isHuman == 1) {
                $sql .= ' AND is_human=1 ';
            }

            $sql .= ' ORDER BY date DESC LIMIT 1';
            // print_r($sql);
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                return $result[0];
            } else {
                return false;
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    protected function _getMeterValueByTodayDate($meter_id, $date, $isHuman = 0)
    {
        try {
            $sql
                = 'SELECT * FROM meters_value_cab
                    WHERE personal_account_id=' . $this->_personal_account . '
                      AND num="' . $meter_id . '"
                      AND date>="' . $date . '" ';

            if ($isHuman == 1) {
                $sql .= ' AND is_human=1 ';
            }

            $sql .= ' ORDER BY date DESC LIMIT 1';

            //print_r($sql);
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                return $result[0];
            } else {
                return array('personal_account_id' => $this->_personal_account, 'meters_id' => $meter_id, 'date' => $date, 'value' => 0);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return array('personal_account_id' => $this->_personal_account, 'meters_id' => $meter_id, 'date' => $date, 'value' => 0);
        }
    }

    public function exportMetersValue($workDir, $file, $fileArchive, $date, $sync = false)
    {
        try {
            $o_cab_xml = new gkh_cabxml(0);

            $exportDate = $o_cab_xml->getFromSiteDate($workDir);

            $tempDate = date('YmdHis', strtotime($exportDate)); //ГГГГММДДЧЧММСС

            $xmlDoc = new DOMDocument('1.0', 'utf-8');
            $root = $xmlDoc->appendChild($xmlDoc->createElement('Root'));
            $root->appendChild($xmlDoc->createElement('FromSite', date('YmdHis'))); //<FromSite>20042012112011</FromSite>
            $item = $root->appendChild($xmlDoc->createElement('Item'));

            if ($sync) {
                $this->_syncMeters($exportDate);
            }

            $o_personal_account = new gkh_personal_account_site();
            $paList = $o_personal_account->getAllPA();
            if ($paList) {
                foreach ($paList as $pa) {
                    $this->_personal_account = $pa['id'];
                    $temp_meters = $this->exportMetersByUser($exportDate, 1);
                    //print_r($temp_meters);
                    if ($temp_meters !== false && !empty($temp_meters)) {
                        //print_r($temp_meters);

                        $paElement = $item->appendChild($xmlDoc->createElement('LS'));
                        $paElement->setAttribute('KOD', $pa['ls']);
                        $sch = $paElement->appendChild($xmlDoc->createElement('SCH'));

                        foreach ($temp_meters as $meters) {
                            if ($meters['prev_value']['value'] != 0) {
                                $metersValue = $sch->appendChild($xmlDoc->createElement('SCH'));
                                $metersValue->setAttribute('ID', $meters['imp_id']); //ID="04010001.4" NAIM="Счетчик э/э" TYPE="Счетчик э/э" NOMER="39009900" TEKPOKAZANIE="4 696,00"
                                $metersValue->setAttribute('NAIM', $meters['naim']);
                                $metersValue->setAttribute('TYPE', $meters['type']);
                                $metersValue->setAttribute('NOMER', $meters['nomer']);
                                $metersValue->setAttribute('TEKPOKAZANIE', $meters['prev_value']['value']);
                                $metersValue->setAttribute('DATE', $meters['prev_value']['date']);
                            }
                        }
                    }
                }
            }
            $xmlDoc->formatOutput = true;
            $xmlDoc->save($file);

            include_once 'zip.lib.php';

            $zip = new zipfile();
            $zip->addFile($xmlDoc->saveXML(), 'Export_meters.XML');
            file_put_contents($fileArchive, $zip->file());

            return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function __destruct()
    {
        parent::__destruct();

        unset($this->_personal_account);
    }

    private function _syncMeters($exportDate)
    {
        global $__cfg;

        $pdo = new PDO($__cfg['db.dsn_sync'], $__cfg['db.dsn_sync_user'], $__cfg['db.dsn_sync_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $isHuman = 1;

        try {
            $selectStatement = $pdo->prepare('SELECT * FROM meters_value_cab WHERE is_human=:human AND date>=:date');
            $selectStatement->execute(array('human' => 1, 'date' => $exportDate));
            $valueList = $selectStatement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($valueList as $value) {
                $this->_personal_account = $value['personal_account_id'];
                $sql
                    = 'REPLACE meters_value_cab(personal_account_id, num, date, value, is_human)
                                     VALUES(' . $this->_personal_account . ', "' . $value['num'] . '", "' . $value['date'] . '", ' . str_replace(',', '.', $value['value']) . ', ' . $isHuman . ')';
                //print_r($sql);
                $this->_db->query($sql);
            }
            $valueList = null;
        } catch (PDOException $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
        $pdo = null;
        return true;
    }

}

?>
