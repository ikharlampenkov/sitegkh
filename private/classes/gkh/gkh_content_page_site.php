<?php

/*
  CREATE TABLE IF NOT EXISTS `content_page` (
  `id` int(11) NOT NULL,
  `page_title` varchar(40) NOT NULL DEFAULT 'английское название для системы',
  `title` varchar(255) NOT NULL,
  `content` text,
  `file` varchar(255),
  description
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_title_UNIQUE` (`page_title`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 */

class gkh_content_page_site extends gkh_content_page {

    public function __construct() {
        parent::__construct();
    }

    public function getContentPage($id) {
        try {
            $result = parent::getContentPage($id);
            if ($result !== false) {
                if (!empty($result['file'])) {
                    $i = 0;
                    $temp_file = preg_split('/;/', $result['file']);
                    $temp_title = preg_split('/;/', $result['file_title']);

                    foreach ($temp_file as $key => $file) {
                        if (!empty($file)) {
                            $result['file_list'][$i]['file'] = $file;
                            $result['file_list'][$i]['title'] = $temp_title[$key];
                            $i++;
                        }
                    }

                    //$result['file_list'] = array_diff($result['file_list'], array(''));
                } else {
                    $result['file_list'] = false;
                }
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addContentPage($data) {
        parent::addContentPage($data);
        try {

            $sql = 'SELECT LAST_INSERT_ID()';
            $temp_id = $this->_db->query($sql);

            $file = $this->_uploadFile($temp_id[0][0]);

            if ($file != 'NULL') {
                $sql = 'UPDATE content_page SET file="' . $file . '"
                        WHERE id=' . (int) $temp_id[0][0];
                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updateContentPage($id, $data) {
        parent::updateContentPage($id, $data);
        try {
            $file = $this->_uploadFile($id);
            if ($file != 'NULL') {
                $sql = 'UPDATE content_page
                    SET file=CONCAT(IFNULL(file, ""), ";' . $file . '") WHERE id=' . (int) $id;
                $this->_db->query($sql);

                $file_title = implode(';', $data['file_title']);
                $sql = 'UPDATE content_page
                    SET file_title=CONCAT(IFNULL(file_title, ""), ";' . $file_title . '") WHERE id=' . (int) $id;
                $this->_db->query($sql);
            }
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deleteFile($id, $fname) {
        global $__cfg;
        try {
            $temp = $this->getContentPage($id);
            simo_functions::_delFile($__cfg['file.upload.dir'] . $fname);

            $res_list = '';
            $res_list_title = '';
            $file_list = preg_split('/;/', $temp['file']);
            $file_title_list = preg_split('/;/', $temp['file_title']);
            foreach ($file_list as $key => $file) {
                if ($file != $fname) {
                    $res_list .= $file . ';';
                    $res_list_title .= $temp['file_title'][$key] . ';';
                }
            }

            if (!empty($res_list)) {
                $sql = 'UPDATE content_page
                        SET file="' . substr($res_list, 0, strlen($res_list) - 1) . '",
                            file_title="' . substr($res_list_title, 0, strlen($res_list_title) - 1) . '" WHERE id=' . (int) $id;
            } else {
                $sql = 'UPDATE content_page
                        SET file=NULL, file_title=NULL WHERE id=' . (int) $id;
            }
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    protected function _uploadFile($id) {
        global $__cfg;
        $resstr = '';

        if (isset($_FILES)) {
            $i = 0;
            foreach ($_FILES as $file) {
                if (!empty($file['name']) && $file['error'] === 0) {
                    $tempInfo = pathinfo($file['name']);

                    $temp_file_name = $id . '_' . date('d-m-Y-H-i-s') . '_' . $i . '.' . $tempInfo['extension'];
                    $result = copy($file['tmp_name'], $__cfg['file.upload.dir'] . $temp_file_name);

                    chmod($__cfg['file.upload.dir'] . $temp_file_name, 0766);
                    $resstr .= $temp_file_name . ';';
                    $i++;
                }
            }
            $resstr = substr($resstr, 0, strlen($resstr) - 1);
            if (strlen($resstr) == 0) {
                $resstr = 'NULL';
            }

            return $resstr;
        } else {
            return 'NULL';
        }
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>
