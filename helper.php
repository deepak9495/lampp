<?php
function db_connect()
{
try
	{
		$pdo=new PDO("mysql:host=localhost; dbname=cntct;","root","");
		return $pdo;
	}
catch(expression $e)
	{
	return false;
	}
}
function insert_contact($name,$phno,$dob,$email)
{
	if($dbo=db_connect())
		{
			$stmt=$dbo->prepare("insert into cntct(name,phno,dob,email) values('$name',$phno,'$dob','$email')");
			 $stmt->execute();
				 if($stmt->rowcount()>0)
						  {
						  		echo "value inserted";
						  }
	 } 
}

function delete_contact($id)
{
		if($dbo=db_connect())
		{
			$stmt=$dbo->prepare("delete from cntct where id=$id");
		}
		$stmt->execute();
		 if($stmt->rowcount()>0)
			  {
					echo "value inserted";
			  }
		else
			{
			echo "failed";	
			}
	 } 

function select_contact()	
{
		if($dbo=db_connect())
 		{
 		$stmt=$dbo->prepare("select * from cntct");
	  $stmt->execute();
	  return $stmt->fetchAll();
		}
}

function update_contact($id,$name,$phno,$dob,$email)
{
	if($dbo=db_connect())
		{
			$stmt=$dbo->prepare("update cntct set name='$name',phno=$phno,dob='$dob',email='$email' where id=$id");
			 $stmt->execute();
				 if($stmt->rowcount()>0)
						  {
						  		echo "updated";
						  }
				else
						{
						echo "failed";
						}
		 } 
}
//insert_contact('akhil','9876543210','2018-12-25','pk@gmail.com')
//delete_contact('1');
//update_contact('2','akhil','9876543210','2018-12-01','akhil@gmail.com')
$data=select_contact();
print_r($data);
?>
