<?php
class DB {
	//fungsi membuka koneksi database
    function open() {
    global $g_DBHost;
    global $g_DBName;
    global $g_DBID;
    global $g_DBPW;
        $this->host = $g_DBHost;
        $this->db = $g_DBName;
        $this->user = $g_DBID;
        $this->pass = $g_DBPW;
        $this->link = mysql_connect($this->host, $this->user, $this->pass);
        if (!$this->link)
        {
                die('Could not connect: ' . mysql_error());
        }
                mysql_select_db($this->db);
   }
   	//fungsi select query
    function select($query)
        {
                $result = mysql_query($query, $this->link);
        $i =0;
         while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $arrrs[$i] = $row;
                ++$i;
                        }
        mysql_free_result($result);
        return $arrrs;
        }
        function modify($query) {
                return mysql_query($query, $this->link);
   }
   //menutup koneksi database
   function close() {
       mysql_close($this->link);
   }
}
?>
