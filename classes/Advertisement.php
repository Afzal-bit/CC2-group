<?php

include ('db/dbConnection.php');
class Advertisement
{
    protected $db;
    private $_title;
    private $_model;
    private $_brand;
    private $_price;
    private $_condition;
    private $_year;
    private $_transmission;
    private $_fuel;
    private $_mileage;
    private $_body;
    private $_engineCapacity;
    private $_description;
    private $_mainImage;
    private $_sName;
    private $_email;
    private $_contact;
    private $_location;
    private $_approved;
	
    
    public function setTitle($title) {
        $this->_title = $title;
    }
    public function setModel($model) {
        $this->_model = $model;
    }
    public function setBrand($brand) {
        $this->_brand = $brand;
    }
    public function setPrice($price) {
        $this->_price = $price;
    }

    public function setCondition($condition) {
        $this->_condition = $condition;
    }

    public function setYear($year) {
        $this->_year = $year;
    }
    public function setTransmission($transmission) {
        $this->_transmission = $transmission;
    }
    public function setFuel($fuel) {
        $this->_fuel = $fuel;
    }
    public function setMileage($mileage) {
        $this->_mileage = $mileage;
    }

    public function setBody($body) {
        $this->_body = $body;
    }

    public function setEngineCapacity($engineCapacity) {
        $this->_engineCapacity = $engineCapacity;
    }
    public function setDescription($description) {
        $this->_description = $description;
    }

    public function setMainImage($mainImage) {
        $this->_mainImage = $mainImage;
    }

    public function setSName($sName) {
        $this->_sName = $sName;
    }

    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setContact($contact) {
        $this->_contact = $contact;
    }
    public function setLocation($location) {
        $this->_location = $location;
    }
    public function setApproved($approved) {
        $this->_approved = $approved;
    }

    
    public function __construct() {
        $this->db = new dbConnection();
        $this->db = $this->db->returnConnection();
    }
    
    public function addAdvert() {
        $approved="No";
        $query = 'INSERT INTO advertisement SET Title="'.$this->_title.'", Model="'.$this->_model.'", Brand="'.$this->_brand.'", Price="'.$this->_price.'", CarCondition="'.$this->_condition.'",
        Year="'.$this->_year.'", Transmission="'.$this->_transmission.'", Fuel="'.$this->_fuel.'", Mileage="'.$this->_mileage.'", Body="'.$this->_body.'",
        EngineCapacity="'.$this->_engineCapacity.'", Description="'.$this->_description.'", MainImage="'.$this->_mainImage.'", SellerName="'.$this->_sName.'", Email="'.$this->_email.'", Contact="'.$this->_contact.'", Location="'.$this->_location.'", Approved="'.$this->_approved.'"';             
        $result = $this->db->query($query) or die($this->db->error);
        if($result ===TRUE){
            $last_id=$this->db->insert_id;
            $query = 'SELECT * FROM advertisement WHERE Id="'.$last_id.'"'; 
            $result = $this->db->query($query) or die($this->db->error); 
            $row = $result->fetch_array();			
            return $row;

        } else {
            return false;
          }
    }
	
	
	
	public function details(){
		

		$result=mysqli_query($this->db,"SELECT Id, title, brand, model, fuel, price, sellername FROM advertisement WHERE approved = 'No'");
        return $result;
		
    }

    public function adListing(){
		

		$result=mysqli_query($this->db,"SELECT Id, title, mileage, 
        price, transmission, enginecapacity, mainimage from advertisement WHERE approved = 'Yes'");
        return $result;
		
    }

  

    public function updateAd($Id){
        
            mysqli_query($this->db,"UPDATE advertisement SET Approved='yes' WHERE Id= '$Id';");
 
    }


    public function getFavorites($userId){
        $result=mysqli_query($this->db,"SELECT favoriteId, adId, title, mainimage, mileage, enginecapacity, transmission, price
         from favorites WHERE userId = $userId");
        return $result;
		
    }

    public function getAdDetails($id){
        $result=mysqli_query($this->db,"SELECT * from advertisement WHERE id = $id");
        return $result;
    }

    public function getAdImages($id){
        $result=mysqli_query($this->db,"SELECT pathname from ad_images WHERE Ad_Id = $id");
        return $result;
    }
}
?>
