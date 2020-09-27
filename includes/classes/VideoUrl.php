<?php
class VideoUrl{
  private $con, $profileUserObj;

  public function __construct($con, $profileUsername) {
    $this->con = $con;
    $this->profileUserObj = new User($con, $profileUsername);
  }

  public function getProfileUserObj(){
    return $this->profileUserObj;
  }

  public function getProfileUsername() {
      return $this->profileUserObj->getUsername();
  }

  public function getVideoUrl(){
    
    $query = $this->con->prepare("SELECT videoUrl FROM videos WHERE uploadedBy=:uploadedBy" );
    $query->bindParam(":uploadedBy", $username);
    $username = $this->getProfileUsername();
    $query->execute();

    // $videos = array();
    // while($row = $query->fetch(PDO::FETCH_ASSOC)){
    //   $videos[] = new Video($this->con, $row, $this->profileUserObj->getUsername());
    // }
    foreach ($query->fetchAll() as $row) {
      $video = $row['videoUrl'];
    }
    return "<iframe width='280' height='157' src='https://www.youtube.com/embed/$video' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
      // if ($uploadedBy == $_GET["username"]){

    // }
  
  }

}

?>



