<?php
require_once('controllers/base_controller.php');
require_once('models/staff.php');

class StaffController extends BaseController
{
  function __construct()
  {
    $this->folder = 'staffs';
  }

  public function index()
  {
    $staffs = Staff::all();
    $data = array('staffs' => $staffs);
    $this->render('index', $data);
  }
  public function renderCreate(){
    $this->render('create');
  }

  public function renderUpdate() {
    $emp = Staff::find($_GET['id']);
   // echo "$emp";
    $data = array('emp' => $emp);
    $this->render('show', $data);
  }
  public function createStaff() {

    $path = "assets/images/staff/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$path);

    $newStaff = Staff::create($_POST['staff_id'], $_POST['staff_name'], $_POST['staff_gender'], 
                              $_POST['staff_dob'], $_POST['staff_address'], $_POST['staff_phone'], $path);

    header('Location: index.php?controller=staff');
  }
  public function updateStaff(){
  //echo $_FILES['image']['name'];
    $path = "assets/images/staff/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
    echo $path;
    $result = Staff::update($_GET['id'], $_POST['staff_name'], /*mysqli_real_escape_string(*/$_POST['staff_gender']/*)*/, 
                            $_POST['staff_dob'], $_POST['staff_address'], $_POST['staff_phone'], $path);

     header('Location: index.php?controller=staff');
  }
  public function deleteStaff() {
    $delStaff = Staff::delete($_GET['id']);
    header('Location: index.php?controller=staff');
  }
}