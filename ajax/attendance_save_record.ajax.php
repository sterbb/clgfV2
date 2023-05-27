<?php
require_once "../controllers/attendance.controller.php";
require_once "../models/attendance.model.php";


class saveAttendance{
  public $type;
  public $stime;
  public $sdate;
  public $attendancelist;
  public $eventname;
  public $venue;
  public $location;

  public function saveAttendanceRecord(){
    $stime = $this->stime;
    $sdate = $this->sdate;
    $type = $this->type;
    $venue = $this->venue;
    $eventname = $this->eventname;
    $location = $this->location;
    $attendancelist = $this->attendancelist;

    if($type == ''){
      $type = "General Event";
    }

    $data = array("stime"=>$stime,
                  "sdate"=>$sdate,
                  "type"=>$type,
                  "eventname"=>$eventname,
                  "venue"=>$venue,
                  "location"=>$location,
                  "attendancelist"=>$attendancelist);
                  
    //feature to be added
    //if ($type == 'Sunday Fellowship'){

      $answer = (new ControllerAttendance)->ctrAddSFAttendance($data);



  }
}

$save_attendance = new saveAttendance();

$save_attendance -> stime = $_POST["stime"];
$save_attendance -> sdate = $_POST["sdate"];
$save_attendance -> type = $_POST["type"];
$save_attendance -> attendancelist = $_POST["attendancelist"];
$save_attendance -> eventname = $_POST["eventname"];
$save_attendance -> venue = $_POST["venue"];
$save_attendance -> location = $_POST["location"];




$save_attendance -> saveAttendanceRecord();