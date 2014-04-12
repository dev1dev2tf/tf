<?php
	class DB {
		protected $_db;
		
		public function __construct() {
		 try {
			 $this->_db = new Mysqli('localhost', 'root', '129300', 'trueface');
    if ($this->_db->connect_errno) 
     throw new Exception ($this->_db->connect_error);
   } catch (Exception $e) {
    echo $e->getMessage();
    return false; 
   }
  }
		
		public function __clone() {
			
		}
		
		public function __destruct() {
		 $this->_db->close();
			unset($this->_db);
		}		
		
		public function query($sql) {
		 try {
			 if (!$result = $this->_db->query($sql)) {
			  throw new Exception ($this->_db->error);
			 }
   } catch (Exception $e) {
    echo $e->getMessage();
    return false;
   }
   return $result;
		}
		
		public function escapeString($data) {
		 return $this->_db->real_escape_string($data);
		}
		
  
	}
?>

