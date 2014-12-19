<?php
require("class.db.php");
require("config.db.php");
class sqldb{
	function sql_select($SQL){
        $DB_conn = new DB;
        $DB_conn->open();
        $rs = $DB_conn->select($SQL);
        $DB_conn->close();
        return $rs;
}
function sql_delete($TABLE, $WHERE, $debug){
        $DB_conn = new DB;
        $DB_conn->open();
        $SQL = "DELETE FROM $TABLE ";
        $SQL = $SQL . " WHERE $WHERE";
        if($debug)
        {
        $query = $DB_conn->modify($SQL) or die (mysql_error() . " " . $SQL);
        }
                else
        {
                $query = $DB_conn->modify($SQL) or die (mysql_error());
        }
        $DB_conn->close();
    return $query;
}
function sql_insert($INS,$TABLE,$debug){

        $DB_conn = new DB;
        $DB_conn->open();
        $SQL = "INSERT INTO $TABLE VALUES ";
        $VALS = "";
        for($l = 0; $l < sizeof($INS);$l++)
        {
        if(substr($INS[$l],0,1) == "%") 
        {
        $VALS = $VALS . substr($INS[$l],1) . ", ";
    }
        elseif(is_numeric($INS[$l]))
        {
        $VALS = $VALS . $INS[$l] . ", ";
    }
                elseif(is_null($INS[$l]))
        {
            $VALS = $VALS . "NULL,";
    }
                else
        {
                $VALS = $VALS . "'" . str_replace("'","&apos;",$INS[$l]) . "', ";
    }
        }
        $SQL = $SQL . "(" . strrev(substr(strrev($VALS),2)) . ")";
        if($debug)
        {
        $query = $DB_conn->modify($SQL) or die (mysql_error() . " " . $SQL);
        }
                else
        {
                $query = $DB_conn->modify($SQL) or die (mysql_error());
        }
        $DB_conn->close();
        return $query;
}
function sql_update($UPDT,$WHERE,$TABLE,$debug){
        $DB_conn = new DB;
        $DB_conn->open();
        $SQL = "Update $TABLE SET ";
        $SET = "";
        for($l = 0; $l < sizeof($UPDT);$l++)
        {
          if(substr($UPDT[$l][1],0,1) == "%") 
        {
        $val = substr($UPDT[$l][1],1);
    }
    elseif(is_numeric($UPDT[$l][1]))
    {
        $val = $UPDT[$l][1];
    }
    elseif (is_null($UPDT[$l][1]))
    {
          $val = "NULL";
    }
        else
        {
          $val = "'" . str_replace("'","&apos;",$UPDT[$l][1]) . "'";
        }
        $SET = $SET . $UPDT[$l][0] . " = " .  $val . ", ";
        }
          $SQL = $SQL . strrev(substr(strrev($SET),2));
          $SQL = $SQL . " WHERE $WHERE";
          if($debug)
        {
                $query = $DB_conn->modify($SQL) or die (mysql_error() . " " . $SQL);
        }
                else
        {
                $query = $DB_conn->modify($SQL) or die (mysql_error());
        }
        $DB_conn->close();
    return $query;
}
}
?>