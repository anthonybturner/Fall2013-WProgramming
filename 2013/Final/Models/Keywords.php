<?php

/**
 * 
 */
class Keywords {
	

	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM 2013Fall_Keywords WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM 2013Fall_Keywords');
		}

	}
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Keywords::Encode($row, $conn);
		
		if($row['id']){
			
			$sql = " UPDATE 2013Fall_Keywords "
			.		"	Set id='$row2[id]', ParentId='$row2[ParentId]', Names='$row2[Names]' "
			.		"	WHERE id=$row[id]	";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into 2013Fall_Keywords (id, ParentId, Names) "
                        .        " Values ('$row2[ParentId]', '$row2[ParentId]', '$row2[Names]') ";
		}
						
        $conn->query($sql);//Insert the values from the associative array $row into the current connections database with the $sql variable
        $error = $conn->error;    //Returns the last error message (if there's one) for the most recent MySQLi function call that can succeed or fail.
                   
        $conn->close();
        
        if($error){
                return array('db_error' => $error);//Create and return an array pointing to the error msg
        }else {
                return false;
        }	
	}
	
	static public function Blank(){
				
		return array('id'=> null, 'ParentId'=> null,'Names' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['ParentId'])$errors['ParentId'] = 'is required'; 		
		if( !$row['Names'])$errors['Names'] = 'is required';
		if( !is_numeric($row['ParentId']))$errors['ParentId'] = 'must be a number';
				
		return count($errors) ? $errors : null;
	}
	
	//Encodes value of every single item in the list
	static function Encode($row, $conn){
		
		$row2 = array();
		foreach ($row as $key => $value) {
			
			$row2[$key] = $conn->real_escape_string($value);
		}
		
		return $row2;
		
	}
}
