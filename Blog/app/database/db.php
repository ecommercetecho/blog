<?php 
require('connect.php'); //to call another php-code



// var_dump($users);
 function dd($value) //for demonstration output
 {
 	echo "<pre>", print_r($value, true), "</pre>";
 	die();
 }

function executeQuery($sql, $data)
{
		global $conn;
		$stmt = $conn->prepare($sql);
		$values = array_values($data);
		$types = str_repeat('s', count($values));
		$stmt->bind_param($types, ...$values);
		$stmt->execute();
		return $stmt;
}

function selectAll($table, $conditions=[]) //funtion for selectall from table
{
	global $conn;
	$sql="SELECT * FROM $table";
	if(empty($conditions)){
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$records=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
	}else{
		//return records that match conditions...
		//$sql="SELECT * FROM $table WHERE username='Awa" AND admin=1";
		$i=0;
		foreach($conditions as $key=>$value){
			if($i===0){
				$sql=$sql." WHERE $key = $?";
			}else{
				$sql=$sql." AND $key = $?";
			}
		$i++;
		}

		$stmt = executeQuery($sql, $conditions);
		$records=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
		
	}

}

function selectOne($table, $conditions) //funtion for selectall from table
{
	global $conn;
	$sql="SELECT * FROM $table";
	
		//return records that match conditions...
		//$sql="SELECT * FROM $table WHERE username='Awa" AND admin=1  LIMIT 1";
		$i=0;
		foreach($conditions as $key=>$value){
			if($i===0){
				$sql=$sql." WHERE $key = $?";
			}else{
				$sql=$sql." AND $key = $?";
			}
		$i++;
		}
		
		$sql = $sql . " LIMIT 1";
		$stmt = executeQuery($sql, $conditions);
		$records=$stmt->get_result()->fetch_assoc();
		return $records;
		
	

}

function create($table, $data)
{
	global $conn;
// two methods to insert queries:
// $sql="INSERT INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)"
// $sql="INSERT INTO users SET username=?, admin=?, email=?, password=?"
	$sql = "INSERT INTO $table SET ";
	$i = 0;
		foreach($data as $key=>$value){
			if($i===0){
				$sql=$sql . " $key =?";
			}else{
				$sql=$sql . ", $key =?";
			}
		$i++;
		}

		$stmt = executeQuery($sql, $data);
		$id = $stmt->insert_id;
		return $id;
}

function update($table, $id, $data)
{
	global $conn;
// two methods to insert queries:
// $sql="UPDATE INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)"
// $sql="UPDATE INTO users SET username=?, admin=?, email=?, password=?  WHERE id=?"
	$sql = "UPDATE $table SET ";
	$i = 0;
		foreach($data as $key=>$value){
			if($i===0){
				$sql=$sql . " $key =?";
			}else{
				$sql=$sql . ", $key =?";
			}
		$i++;
		}
		$sql = $sql . "WHERE id=?";
		$data['id'] = $id;
		$stmt = executeQuery($sql, $data);
		return $stmt->affected_row;
}

function delete($table, $id)
{
	global $conn;
	$sql = "DELETE FROM $table WHERE id=?";
	$stmt = executeQuery($sql, ['id' => $id]);
	return $stmt->affected_row;
}


?>