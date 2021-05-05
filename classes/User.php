
<?php

include ('db/dbConnection.php');
class User
{
    protected $db;
    private $_name;
    private $_email;
    private $_level;
    private $_password;
    private $_phone;
	
    
    public function setName($name) {
        $this->_name = $name;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setLevel($level) {
        $this->_level = $level;
    }
    public function setPassword($password) {
        $this->_password = $password;
    }

    public function setPhone($phone) {
        $this->_phone = $phone;
    }

    public function __construct() {
        $this->db = new dbConnection();
        $this->db = $this->db->returnConnection();
    }
    
    public function userRegistration() {
        $password = $this->hash($this->_password);
        $query = 'SELECT * FROM users WHERE email="'.$this->_email.'"';           
        $result = $this->db->query($query) or die($this->db->error);            
        $count_row = $result->num_rows;         
        if($count_row == 0) {
			
            $query = 'INSERT INTO users SET name="'.$this->_name.'", email="'.$this->_email.'", level="'.$this->_level.'", password="'.$password.'", phone="'.$this->_phone.'"';             
            $result = $this->db->query($query) or die($this->db->error);
			$query = 'SELECT * FROM users WHERE email="'.$this->_email.'"';           
            $result = $this->db->query($query) or die($this->db->error); 
            $row = $result->fetch_array();			
            return $row;
        } else {
            return false;
        }
    }
	
	public function Login() {     
        $query = 'SELECT * from users WHERE email="'.$this->_email.'"';        
        $result = $this->db->query($query) or die($this->db->error);
        $data = $result->fetch_array(MYSQLI_ASSOC);
       
        $count_row = $result->num_rows;
        if ($count_row == 1) {
			if($data['Level']=="Admin"){
			if($this->_password==$data['Password']){
				
            return $data;
			}else {
                 return false;
			}
			}else{
				if (password_verify($this->_password, $data['Password'])) {
                 return $data;
                } else {
                 return false;
            }
			}				
        }else{
			return false;
		}			
    }
	
	public function updateMembership(){
		$dateNow = date("Y-m-d");
		$date=date('Y-m-d', strtotime($dateNow. ' + 30 days'));
		$id=$_SESSION['id'];
		$result=mysqli_query($this->db,"SELECT expiry FROM users WHERE id = '$id'");
		$row = mysqli_fetch_array($result);
		$expiry='0000-00-00';
		if($row['expiry']==$expiry){
			$query="UPDATE users SET expiry='$date' where id='$id'";
            $result = $this->db->query($query) or die($this->db->error);
		}else{
		$dateNow = $row['expiry'];
		$date=date('Y-m-d', strtotime($dateNow. ' + 30 days'));
		$query="UPDATE users SET expiry='$date' where id='$id'";
        $result = $this->db->query($query) or die($this->db->error);
		}		
        return $date;
	}
	
	public function details(){
		$result=mysqli_query($this->db,"SELECT Id ,Name, Email, Level, Phone FROM users WHERE level = 'Seller' || level='Buyer'");
        return $result;
		
    }
	public function hash($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }
	

	}
?>

