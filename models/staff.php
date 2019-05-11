<?php
class Staff
{
  public $staff_id;
  public $staff_name;
  public $staff_gender;
  public $staff_dob;
  public $staff_address;
  public $staff_phone;
  public $staff_avatar;


  function __construct($staff_id, $staff_name, $staff_gender, $staff_dob, $staff_address, $staff_phone, $staff_avatar )
  {
    $this->staff_id = $staff_id;
    $this->staff_name = $staff_name;
    $this->staff_gender = $staff_gender;
    $this->staff_dob = $staff_dob;
    $this->staff_address = $staff_address;
    $this->staff_phone = $staff_phone;
    $this->staff_avatar = $staff_avatar;
  }

  static function all() {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM staff');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Staff($item['staff_id'], 
                          $item['staff_name'], 
                          $item['staff_gender'],
                          $item["staff_dob"],
                          $item["staff_address"],
                          $item["staff_phone"], 
                          $item["staff_avatar"]);
    }
    return $list;
  }


  static function find($id) {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM staff WHERE staff_id = :id');
    // $req->bindParam(':id', $id);
    $req->execute(array('id' => $id));


    $item =$req->fetch();
    //echo $item['staff_id'];
    if(isset($item['staff_id'])){
      return new Staff($item['staff_id'], 
                        $item['staff_name'], 
                        $item['staff_gender'],
                        $item["staff_dob"],
                        $item["staff_address"],
                        $item["staff_phone"], 
                        $item["staff_avatar"]);
    }
    return null;
  }

  static function create($staff_id, $staff_name, $staff_gender, $staff_dob, $staff_address, $staff_phone, $staff_avatar) {
    $db = DB::getInstance();
    $sql = 'INSERT INTO staff (staff_id, staff_name, staff_gender, staff_dob, staff_address, staff_phone, staff_avatar)
            VALUES (:staff_id, :staff_name, :staff_gender, :staff_dob, :staff_address, :staff_phone, :staff_avatar)';
    $data = [
      ':staff_id' => $staff_id,
      ':staff_name' => $staff_name,
      ':staff_gender' => $staff_gender,
      ':staff_dob' => $staff_dob,
      ':staff_address' => $staff_address,
      ':staff_phone' => $staff_phone,
      ':staff_avatar' => $staff_avatar,
    ];

    try{
      $req = $db->prepare($sql);
      $req->execute($data);
    }catch(PDOException $e){
      echo $e->message();
      return null;
    }
  }
  static function delete($staff_id){
    $db = DB::getInstance();
    $sql = "DELETE FROM `staff` WHERE staff_id = :staff_id";
    $data = [
      ':staff_id' => $staff_id
    ];
    try{
      $req = $db->prepare($sql);
      $req->execute($data);
    }catch(PDOException $e){
      return null;
    }
    
  }
  static function update($staff_id, $staff_name, $staff_gender, $staff_dob, $staff_address, $staff_phone, $staff_avatar){
    $db = DB::getInstance();
    $sql = "UPDATE `staff` 
            SET staff_name= :staff_name, staff_gender = :staff_gender,
                staff_dob= :staff_dob, staff_address = :staff_address, staff_phone = :staff_phone, staff_avatar = :staff_avatar 
            WHERE staff_id=:staff_id";
    $data = [
      ':staff_name' => $staff_name,
      ':staff_gender' => $staff_gender,
      ':staff_dob' => $staff_dob,
      ':staff_address' => $staff_address,
      ':staff_phone' => $staff_phone,
      ':staff_avatar' => $staff_avatar,
      ':staff_id' => $staff_id,
    ];
    try{
      $req = $db->prepare($sql);
      $req->execute($data);
      $result = $req->fetch();
      return $result;
    }catch(PDOException $e){
      echo $e->message();
      return null;
    }
  }



}

?>