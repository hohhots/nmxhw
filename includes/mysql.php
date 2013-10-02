<?php

                /***************************************************************************
		                                mysql.php
		                             -------------------
		    begin                : 2003 September 29 Sunday
		    copyright            : (C) 2003 The nm114.net Group
		    email                : brgd@nm114.net
		
		    $Id: mysql.php,v 0.1 2003-9-29 12:47  brgd $
		
		 ***************************************************************************/

if ( !defined('IN_NMXHW') )
{
	 die('Sorry! This accessing is not valid! Try other URL. [mysql.php]<p>Designed by www.nm114.net');
	
}
//建立数据库连接
class Myydb
{
	var $user;
	var $password;
	var $server;
	var $dbname;
        
	var $db_connect_id;
	var $query_result;
	var $row = array();
	var $rowset = array();
    
	//构造器
	function Myydb($user,$password,$server,$dbname)
	{
		$this->user = $user;
		$this->password = $password;
		$this->server = $server;
		$this->dbname = $dbname;
		
		$this->db_connect_id = @mysql_pconnect($this->server, $this->user, $this->password);
		if($this->db_connect_id)
		{
			$temp = @mysql_select_db($this->dbname);
			if(!$temp)
			{
				@mysql_close($this->db_connect_id);
				$this->db_connect_id = $temp;
			}
		}
		else
		{
			die('Sorry,system busy.Try later. CODE mysql.php:001');
		}
	}
 
	//关闭数据库连接
	function sql_Close()
	{
		if($this->db_connect_id)
		{
			if($this->query_result)
			{
				@mysql_free_result($this->query_result);
			}
			@mysql_close($this->db_connect_id);
		}
		else
		{
			exit;
		}
	}
 
	function sql_Query($query = "")
	{
		// Remove any pre-existing queries
		unset($this->query_result);
		if($query != "")
		{
			$this->query_result = @mysql_query($query, $this->db_connect_id);
		}
		if($this->query_result)
		{
			unset($this->row[$this->query_result]);
			unset($this->rowset[$this->query_result]);
			return $this->query_result;
		}
	}
     
	function sql_Numrows($query_id = 0)
        {
             if(!$query_id)
	        {
	             $query_id = $this->query_result;
                }
	        if($query_id)
	           {
	                $result = @mysql_num_rows($query_id);
	                return $result;
	           }
	        else
	           {
	                return false;
	           }
        }
	function sql_Affectedrows()
	{
		if($this->db_connect_id)
		{
			$result = @mysql_affected_rows($this->db_connect_id);
			return $result;
			}
		else
		{
			return false;
		}
	}

	function sql_Numfields($query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$result = @mysql_num_fields($query_id);
			return $result;
		}
		else
		{
			return false;
		}
	}
	function sql_Fieldname($offset, $query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$result = @mysql_field_name($query_id, $offset);
			return $result;
		}
		else
		{
			return false;
		}
	}
	function sql_Fieldtype($offset, $query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$result = @mysql_field_type($query_id, $offset);
			return $result;
		}
		else
		{
			return false;
		}
	}
	function sql_Fetchrow($query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$this->row[$query_id] = @mysql_fetch_array($query_id);
			return $this->row[$query_id];
		}
		else
		{
			return false;
		}
	}
	function sql_Fetchrowset($query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			unset($this->rowset[$query_id]);
			unset($this->row[$query_id]);
			while($this->rowset[$query_id] = @mysql_fetch_array($query_id))
			{
				$result[] = $this->rowset[$query_id];
			}
			return $result;
		}
		else
		{
			return false;
		}
	}
	
	function sql_Fetchfield($field, $rownum = -1, $query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			if($rownum > -1)
			{
				$result = @mysql_result($query_id, $rownum, $field);
			}
			else
			{
				if(empty($this->row[$query_id]) && empty($this->rowset[$query_id]))
				{
					if($this->sql_Fetchrow())
					{
						$result = $this->row[$query_id][$field];
					}
				}
				else
				{
					if($this->rowset[$query_id])
					{
						$result = $this->rowset[$query_id][$field];
					}
					else if($this->row[$query_id])
					{
						$result = $this->row[$query_id][$field];
					}
				}
			}
			return $result;
		}
		else
		{
			return false;
		}
	}
	function sql_Rowseek($rownum, $query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$result = @mysql_data_seek($query_id, $rownum);
			return $result;
		}
		else
		{
			return false;
		}
	}
	
	function sql_Freeresult($query_id = 0){
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}

		if ( $query_id )
		{
			unset($this->row[$query_id]);
			unset($this->rowset[$query_id]);

			@mysql_free_result($query_id);

			return true;
		}
		else
		{
			return false;
		}
	}
	
	function sql_Error($query_id = 0)
	{
		$result["message"] = @mysql_error($this->db_connect_id);
		$result["code"] = @mysql_errno($this->db_connect_id);

		return $result;
	}
}
 //建立数据库连接结束
?>