<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 27.01.12
 * Time: 15:12
 * To change this template use File | Settings | File Templates.
 */
class gkh_cabxml extends gkh
{
    private $_ls = 0;

    private $_file = '';

    private $_xml = '';

    public function __construct($ls)
    {
        parent::__construct();
        $this->_ls = $ls;
    }

    public function loadFile($name)
    {
        $this->_file = $name;
        libxml_use_internal_errors(true);

        $xmlString = '';
        $fp = fopen($this->_file, "r"); // Открываем файл в режиме чтения
        if ($fp) {
            while (!feof($fp)) {
                $xmlString .= fgets($fp, 999);
            }
        }
        fclose($fp);
        //print_r($xmlString);

        $xmlString = preg_replace('/PROJ[0-9]+/', 'PROJ', $xmlString);
        $xmlString = preg_replace('/DOLG[0-9]+/', 'DOLG', $xmlString);
        $xmlString = preg_replace('/SCH[0-9]+/', 'SCH', $xmlString);
        $xmlString = preg_replace('/USL[0-9]+/', 'USL', $xmlString);
        $xmlString = preg_replace('/PERIOD[0-9]+/', 'PERIOD', $xmlString);

        $this->_xml = simplexml_load_string($xmlString);
        //print_r($this->_xml);
        if ($this->_xml === false) {
            print_r(libxml_get_last_error());
            throw new Exception();
        }

    }

    public function getBlock($titile)
    {
        //print_r($this->_xml->Item->LS['KOD']);
        //print_r($this->_xml->xpath('//LS[@KOD="' . $this->_ls . '"]'));
        //zone[@country='Cote d\'Ivoire']

        $block = '';

        $xmlBlock = $this->_checkLS();
        if ($xmlBlock !== false) {
            //print_r($xmlBlock);
            if ($titile == 'ls') {
                return $xmlBlock->attributes();
            }

            if ($titile == 'jilci') {
                $retArray = array();
                //print_r($xmlBlock->JILCI->PROJ1);
                foreach ($xmlBlock->JILCI->PROJ as $jilci) {
                    $retArray[] = $jilci->attributes();
                }
                return $retArray;
            }

            if ($titile == 'dolg') {
                $retArray = array();
                foreach ($xmlBlock->DOLGI->DOLG as $dolg) {
                    $retArray[] = $dolg->attributes();
                }
                return $retArray;
            }

            if ($titile == 'sch') {
                $retArray = array();
                foreach ($xmlBlock->SCH->SCH as $meters) {
                    $metersAttrib = $meters->attributes();

                    $metersAttrib['NAIM'] = (string)$metersAttrib['NAIM'];

                    $metersAttrib['NAIM'] = str_replace(array('кухня ХВ', 'Кухня ХВ'), array('Кухня ХВ', 'Кухня ХВ'), (string)$metersAttrib['NAIM']);
                    $metersAttrib['NAIM'] = str_replace(array('кухня ГВ', 'Кухня ГВ', 'кухняГВ'), array('Кухня ГВ', 'Кухня ГВ', 'Кухня ГВ'), (string)$metersAttrib['NAIM']);

                    if (count($xmlBlock->SCH->SCH) > 3) {
                        $metersAttrib['NAIM'] = str_replace('с/узел ХВ', 'Кухня ХВ', (string)$metersAttrib['NAIM']);
                        $metersAttrib['NAIM'] = str_replace('с/узел ГВ', 'Кухня ГВ', (string)$metersAttrib['NAIM']);
                    }

                    $retArray[] = $metersAttrib;

                }
                return $retArray;
            }

            if ($titile == 'nach') {
                $retArray = array();
                $i = 0;
                foreach ($xmlBlock->NACH->PERIOD as $period) {
                    $retArray[$i]['period'] = $period->attributes();
                    foreach ($period->USL as $usluga) {
                        $retArray[$i]['usluga'][] = $usluga->attributes();
                    }
                    $i++;
                }

                return array_reverse($retArray);
            }

        } else {
            return false;
        }


        foreach (libxml_get_errors() as $error) {
            print_r($error->message);
        }
    }

    public function getFromSiteDate($workDir)
    {
        if (file_exists($workDir . '/IMPORT.XML')) {
            $this->loadFile($workDir . '/IMPORT.XML');
        } elseif (file_exists($workDir . '/IMPORT.xml')) {
            $this->loadFile($workDir . '/IMPORT.xml');
        }

        $tempDate = (string)$this->_xml->FromSite[0];
        $prepareDate = substr($tempDate, 6, 2) . '-' . substr($tempDate, 4, 2) . '-' . substr($tempDate, 0, 4);
        $metersDate = date('Y-m-d', strtotime($prepareDate));
        return $metersDate;
    }

    public function refreshFile($ftpDir, $workDir)
    {
        if (file_exists($ftpDir)) {

            /*
            ini_set('include_path', '.:/home/dnevnik/php');

            include_once "/home/dnevnik/php/File/Archive.php";

            print_r(File_Archive::read($ftpDir));

            $result = File_Archive::extract($src = $ftpDir . '/', $dest = $workDir); //$src = 'archive.zip/', $dest = 'dir'

            print_r($result);
*/

            include_once 'pclzip.lib.php';

            $zip = new PclZip($ftpDir);

            $result = $zip->extract(PCLZIP_OPT_PATH, $workDir);

            //print_r($result);

            //$result = rename($ftpDir, $workDir . '/import.xml');

            $result = true;

            if ($result) {
                if (file_exists($workDir . '/IMPORT.XML')) {
                    $this->loadFile($workDir . '/IMPORT.XML');
                } elseif (file_exists($workDir . '/IMPORT.xml')) {
                    $this->loadFile($workDir . '/IMPORT.xml');
                }

                //<FromBase>06042012152448</FromBase>
                //<FromBase>25052012082826</FromBase>
                //<FromSite>20120525080001</FromSite>
                /*
                $tempDate = (string)$this->_xml->FromBase[0];

                $prepareDate = substr($tempDate, 0, 2) . '-' . substr($tempDate, 2, 2) . '-' . substr($tempDate, 4, 4);

                $metersDate = date('Y-m-d', strtotime($prepareDate)); //strtotime('-1 month', strtotime($prepareDate))
                */

                $tempDate = (string)$this->_xml->FromSite[0];
                $prepareDate = substr($tempDate, 6, 2) . '-' . substr($tempDate, 4, 2) . '-' . substr($tempDate, 0, 4);
                $metersDate = date('Y-m-d', strtotime($prepareDate));

                //print_r($metersDate);

                $temp = $this->_xml->xpath('//LS');
                if ($temp !== false) {

                    $pa = new gkh_personal_account_site();

                    $filterList = array();

                    foreach ($temp as $ls) {
                        $lsAttribute = $ls->attributes();
                        if ($pa->checkPA($lsAttribute['KOD']) === false) {
                            $data = array();
                            $data['fio'] = $lsAttribute['SOBSTV'];
                            if (!empty($lsAttribute['PASSWORD']) && (string)$lsAttribute['PASSWORD'] != ' ') {
                                $data['password'] = trim($lsAttribute['PASSWORD']); //123456
                            } else {
                                $data['password'] = '123456';
                            }
                            $data['ls'] = $lsAttribute['KOD'];
                            $pa->addPA($data);
                        } else {
                            $data = array();
                            $data['fio'] = $lsAttribute['SOBSTV'];
                            if (!empty($lsAttribute['PASSWORD']) && (string)$lsAttribute['PASSWORD'] != ' ') {
                                $data['password'] = trim($lsAttribute['PASSWORD']); //123456
                            } else {
                                $data['password'] = '123456';
                            }
                            $data['ls'] = $lsAttribute['KOD'];
                            $curPA = $pa->getPAByLS($lsAttribute['KOD']);
                            $pa->updatePA($curPA['id'], $data);
                        }

                        $filterList[] = $lsAttribute['KOD'];

                        $curPA = $pa->getPAByLS($lsAttribute['KOD']);
                        $metersPA = new gkh_meters_cab($curPA['id']);

                        foreach ($ls->SCH->SCH as $key => $meters) {
                            //$tempML = $metersPA->getMetersListByUser();
                            //print_r($tempML);
                            //if (!empty($tempML)) {
                            $metersAttrib = $meters->attributes();
                            $data = array();
                            $mValues = array();

                            //print_r($metersAttrib['NAIM']);

                            $metersAttrib['NAIM'] = (string)$metersAttrib['NAIM'];

                            $metersAttrib['NAIM'] = str_replace(array('кухня ХВ', 'Кухня ХВ'), array('Кухня ХВ', 'Кухня ХВ'), (string)$metersAttrib['NAIM']);
                            $metersAttrib['NAIM'] = str_replace(array('кухня ГВ', 'Кухня ГВ', 'кухняГВ'), array('Кухня ГВ', 'Кухня ГВ', 'Кухня ГВ'), (string)$metersAttrib['NAIM']);

                            if (count($ls->SCH->SCH) > 3) {
                                $metersAttrib['NAIM'] = str_replace('с/узел ХВ', 'Кухня ХВ', (string)$metersAttrib['NAIM']);
                                $metersAttrib['NAIM'] = str_replace('с/узел ГВ', 'Кухня ГВ', (string)$metersAttrib['NAIM']);
                            }

                            $data['meters'][1]['imp_id'] = $metersAttrib['ID'];
                            $data['meters'][1]['naim'] = $metersAttrib['NAIM'];
                            $data['meters'][1]['type'] = $metersAttrib['TYPE'];
                            $data['meters'][1]['nomer'] = $metersAttrib['NOMER'];

                            $meterId = (string)$metersAttrib['ID'];

                            $mValues[$meterId]['date'] = $metersDate;
                            $mValues[$meterId]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));

                            //print_r($metersAttrib['NAIM']);

                            /*
                            if ((string)$metersAttrib['TYPE'] == 'Счетчик э/э' || (string)$metersAttrib['TYPE'] == 'электроэнергия') {
                                $data['meters'][1]['imp_id'] = $metersAttrib['ID'];
                                $data['meters'][1]['naim'] = $metersAttrib['NAIM'];
                                $data['meters'][1]['type'] = $metersAttrib['TYPE'];
                                $data['meters'][1]['nomer'] = $metersAttrib['NOMER'];

                                $mValues[1]['date'] = $metersDate;
                                $mValues[1]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));
                            } elseif (((string)$metersAttrib['TYPE'] == 'Водосчетчик ХВ' && (string)$metersAttrib['NAIM'] != 'Кухня ХВ') || (string)$metersAttrib['TYPE'] == 'холодная вода') {
                                //echo 3;
                                $data['meters'][3]['imp_id'] = $metersAttrib['ID'];
                                $data['meters'][3]['naim'] = $metersAttrib['NAIM'];
                                $data['meters'][3]['type'] = $metersAttrib['TYPE'];
                                $data['meters'][3]['nomer'] = $metersAttrib['NOMER'];

                                $mValues[3]['date'] = $metersDate;
                                $mValues[3]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));
                            } elseif ((string)$metersAttrib['TYPE'] == 'Водосчетчик ХВ' && (string)$metersAttrib['NAIM'] == 'Кухня ХВ') {
                                //echo 5;
                                $data['meters'][5]['imp_id'] = $metersAttrib['ID'];
                                $data['meters'][5]['naim'] = $metersAttrib['NAIM'];
                                $data['meters'][5]['type'] = $metersAttrib['TYPE'];
                                $data['meters'][5]['nomer'] = $metersAttrib['NOMER'];

                                $mValues[5]['date'] = $metersDate;
                                $mValues[5]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));
                            } elseif (((string)$metersAttrib['TYPE'] == 'Водосчетчик ГВ' && (string)$metersAttrib['NAIM'] != 'Кухня ГВ') || (string)$metersAttrib['TYPE'] == 'горячая вода (пропис)') {
                                //echo 2;
                                $data['meters'][2]['imp_id'] = $metersAttrib['ID'];
                                $data['meters'][2]['naim'] = $metersAttrib['NAIM'];
                                $data['meters'][2]['type'] = $metersAttrib['TYPE'];
                                $data['meters'][2]['nomer'] = $metersAttrib['NOMER'];

                                $mValues[2]['date'] = $metersDate;
                                $mValues[2]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));
                            } elseif ((string)$metersAttrib['TYPE'] == 'Водосчетчик ГВ' && (string)$metersAttrib['NAIM'] == 'Кухня ГВ') {
                                //echo 4;
                                $data['meters'][4]['imp_id'] = $metersAttrib['ID'];
                                $data['meters'][4]['naim'] = $metersAttrib['NAIM'];
                                $data['meters'][4]['type'] = $metersAttrib['TYPE'];
                                $data['meters'][4]['nomer'] = $metersAttrib['NOMER'];

                                $mValues[4]['date'] = $metersDate;
                                $mValues[4]['value'] = str_replace(',', '.', str_replace(' ', '', $metersAttrib['TEKPOKAZANIE']));
                            }
                            */

                            $metersPA->setMetersForUser($data);
                            $metersPA->setMetersValue($mValues);
                            //}

                        }

                    }

                    $pa->filterPA($filterList);
                    //print_r($temp);
                }

            }
        }

    }

    private function _checkLS()
    {
        $temp = $this->_xml->xpath('//LS[@KOD="' . $this->_ls . '"]');
        if ($temp !== false && !empty($temp)) {
            return $temp[0];
        } else {
            return false;
        }

    }


}
