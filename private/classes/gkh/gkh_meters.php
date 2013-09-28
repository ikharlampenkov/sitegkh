<?php

/*
  -- -----------------------------------------------------
  -- Table `dnevnik_gkh_site_db`.`meters`
  -- -----------------------------------------------------
  CREATE  TABLE IF NOT EXISTS `dnevnik_gkh_site_db`.`meters` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(45) NULL DEFAULT NULL ,
  `rate` DECIMAL(12,2) UNSIGNED NULL ,
  PRIMARY KEY (`id`) )
  ENGINE = InnoDB;


  id, title, rate

  -- -----------------------------------------------------
  -- Table `dnevnik_gkh_site_db`.`meters_to_account`
  -- -----------------------------------------------------
  CREATE  TABLE IF NOT EXISTS `dnevnik_gkh_site_db`.`meters_to_account` (
  `personal_account_id` INT(10) UNSIGNED NOT NULL ,
  `meters_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`personal_account_id`, `meters_id`) ,
  INDEX `fk_meters_to_account_meters1` (`meters_id` ASC) ,
  CONSTRAINT `fk_meters_to_account_personal_account1`
  FOREIGN KEY (`personal_account_id` )
  REFERENCES `dnevnik_gkh_site_db`.`personal_account` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT `fk_meters_to_account_meters1`
  FOREIGN KEY (`meters_id` )
  REFERENCES `dnevnik_gkh_site_db`.`meters` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `dnevnik_gkh_site_db`.`meters_value`
  -- -----------------------------------------------------
  CREATE  TABLE IF NOT EXISTS `dnevnik_gkh_site_db`.`meters_value` (
  `personal_account_id` INT(10) UNSIGNED NOT NULL ,
  `meters_id` INT UNSIGNED NOT NULL ,
  `date` DATE NOT NULL ,
  `value` DECIMAL(10,3) NULL DEFAULT NULL ,
  PRIMARY KEY (`personal_account_id`, `meters_id`, `date`) ,
  INDEX `fk_meters_value_meters1` (`meters_id` ASC) ,
  CONSTRAINT `fk_meters_value_personal_account1`
  FOREIGN KEY (`personal_account_id` )
  REFERENCES `dnevnik_gkh_site_db`.`personal_account` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT `fk_meters_value_meters1`
  FOREIGN KEY (`meters_id` )
  REFERENCES `dnevnik_gkh_site_db`.`meters` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
  ENGINE = InnoDB;
 */

/**
 * Description of gkh_meters
 *
 * @author Administrator
 */
class gkh_meters extends gkh
{

    protected $_personal_account;

    public function __construct($personal_account)
    {
        parent::__construct();

        $this->_personal_account = $personal_account;
    }

    public function getAllMeters()
    {
        try {
            $sql = 'SELECT * FROM meters';
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getMeters($id)
    {
        try {
            $sql = 'SELECT * FROM meters WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addMeters($data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'INSERT INTO meters(title, rate) VALUES("' . $data['title'] . '", ' . $data['rate'] . ')';
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateMeters($id, $data)
    {
        try {
            $data = $this->_db->prepareArray($data);
            $sql = 'UPDATE meters SET title="' . $data['title'] . '", rate=' . $data['rate'] . ' WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteMeters($id)
    {
        try {
            $sql = 'DELETE FROM meters WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getMetersByUser($date)
    {
        try {
            $sql = 'SELECT id, title, rate, unit, imp_id, naim, type, nomer
                    FROM meters, meters_to_account 
                    WHERE meters.id=meters_to_account.meters_id AND personal_account_id=' . $this->_personal_account;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                $temp_date = date_parse($date);
                $prev_date = date('Y-m-d', mktime(0, 0, 0, $temp_date['month'], $temp_date['day'], $temp_date['year']));

                $cur_date = date('Y-m-d', mktime(0, 0, 0, $temp_date['month'] + 1, $temp_date['day'], $temp_date['year']));

                foreach ($result as &$meter) {
                    $meter['cur_value'] = $this->_getMeterValueByDate($meter['id'], $cur_date);

                    $meter['prev_value'] = $this->_getMeterValueByDate($meter['id'], $prev_date);
                }
                return $result;
            } else {
                return false;
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function getMetersByUserForReceipt($date)
    {
        try {
            $sql = 'SELECT id, title, rate, unit  
                    FROM meters, meters_to_account 
                    WHERE meters.id=meters_to_account.meters_id AND personal_account_id=' . $this->_personal_account;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                $temp_date = date_parse($date);
                $prev_date = date('Y-m-d', mktime(0, 0, 0, $temp_date['month'] - 1, $temp_date['day'], $temp_date['year']));

                foreach ($result as &$meter) {
                    $meter['cur_value'] = $this->_getMeterValueByDate($meter['id'], $date);
                    $meter['prev_value'] = $this->_getMeterValueByDate($meter['id'], $prev_date);

                    $meter['diff'] = $meter['cur_value']['value'] - $meter['prev_value']['value'];
                    $meter['sum'] = $meter['diff'] * $meter['rate'];
                }
                return $result;
            } else {
                return false;
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function getMetersListByUser()
    {
        try {
            $sql = 'SELECT *   
                    FROM meters_to_account 
                    WHERE personal_account_id=' . $this->_personal_account;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (!empty($result[0])) {
                $retArray = array();
                foreach ($result as $res) {
                    $retArray[] = $res['meters_id'];
                }
                return $retArray;
            } else {
                return array();
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function setMetersValue($data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            foreach ($data as $meter_id => $value) {
                if ($value['value'] != 0) {
                    $value['date'] = date('Y-m-d', strtotime($value['date']));
                    $sql = 'REPLACE meters_value(personal_account_id, meters_id, date, value)
                                      VALUES(' . $this->_personal_account . ', ' . $meter_id . ', "' . $value['date'] . '", ' . $value['value'] . ')';
                    //print_r($sql);
                    $this->_db->query($sql);
                }
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
            return false;
        }
    }

    public function setMetersForUser($data)
    {
        try {
            $data = $this->_db->prepareArray($data);

            //$this->_db->query('DELETE FROM meters_to_account WHERE personal_account_id=' . $this->_personal_account . ' AND meters_id=' . );
            if (!empty($data['meters'])) {
                foreach ($data['meters'] as $meter => $value) {
                    $sql = 'REPLACE INTO meters_to_account(personal_account_id, meters_id, imp_id, naim, type, nomer)
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

    protected function _getMeterValueByDate($meter_id, $date)
    {
        try {
            $sql = 'SELECT * FROM meters_value 
                    WHERE personal_account_id=' . $this->_personal_account . ' AND meters_id=' . $meter_id . ' AND DATE_FORMAT(date, "%Y-%m")=DATE_FORMAT("' . $date . '", "%Y-%m")
                    ORDER BY date DESC';
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

    public function exportMetersValue($file, $fileArchive, $date)
    {
        try {
            $tempDate = date('YmdHis'); //ГГГГММДДЧЧММСС

            $xmlDoc = new DOMDocument('1.0', 'utf-8');
            $root = $xmlDoc->appendChild($xmlDoc->createElement('Root'));
            $root->appendChild($xmlDoc->createElement('FromSite', $tempDate)); //<FromSite>20042012112011</FromSite>
            $item = $root->appendChild($xmlDoc->createElement('Item'));


            $o_personal_account = new gkh_personal_account_site();
            $paList = $o_personal_account->getAllPA();
            if ($paList) {
                foreach ($paList as $pa) {
                    $this->_personal_account = $pa['id'];
                    $temp_meters = $this->getMetersByUser($date);
                    if ($temp_meters !== false) {
                        //print_r($temp_meters);

                        $paElement = $item->appendChild($xmlDoc->createElement('LS'));
                        $paElement->setAttribute('KOD', $pa['ls']);
                        $sch = $paElement->appendChild($xmlDoc->createElement('SCH'));

                        foreach ($temp_meters as $meters) {
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
            $xmlDoc->formatOutput = true;
            $xmlDoc->save($file);

            include_once 'zip.lib.php';

            /*
            $zip = new ZipArchive();
            $zip->open($fileArchive, ZipArchive::OVERWRITE);
            $zip->addFile($file, 'Export_meters.XML');
            $zip->close();
            */

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

}

?>
