<?php

/*
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `phone_code` varchar(5) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
 */


/**
 * Description of gkh_phones
 *
 * @author Administrator
 */
class gkh_phones extends gkh {
        
    public function getAllPhones() {
        try {
            $sql = 'SELECT * FROM phones';   
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result;
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function getPhones($id) {
        try {
            $sql = 'SELECT * FROM phones WHERE id=' . (int)$id;
            $result = $this->_db->query($sql, simo_db::QUERY_MOD_ASSOC);
            if (isset($result[0])) {
                return $result[0];
            } else
                return false;
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function addPhones($data) {
        try {
            $data = $this->_db->prepareArray($data);
            
            $sql = 'INSERT INTO phones(title, phone_code, phone, comment) 
                    VALUES("' . $data['title'] . '", "' . $data['phone_code'] . '", "' . $data['phone'] . '", "' . $data['comment'] . '")';
            $this->_db->query($sql);           
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function updatePhones($id, $data) {
        try {
            $data = $this->_db->prepareArray($data);

            $sql = 'UPDATE phones 
                    SET title="' . $data['title'] . '", phone_code="' . $data['phone_code'] . '", 
                        phone="' . $data['phone'] . '", comment="' . $data['comment'] . '"  
                    WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function deletePhones($id) {
        try {
            $sql = 'DELETE FROM phones WHERE id=' . (int)$id;
            $this->_db->query($sql);
        } catch (Exception $e) {
            simo_exception::registrMsg($e, $this->_debug);
        }
    }

    public function __destruct() {
        parent::__destruct();
    } 
}

?>
