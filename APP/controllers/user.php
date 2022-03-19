<?php

// require "././includes/PHPMailer.php";
// require "././includes/SMTP.php";
// require "././includes/Exception.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class user extends Controller
{

  private $_firstName;
  private $_lastName;
  private $_address;
  private $_gender;
  private $_userNic;
  private $_userEmail;
  private $_userMobileNumber;
  private $_userDateofBirth;

  public function index()
  {
    session_start();
    session_regenerate_id();
    if (!empty($_SESSION["NIC"])) {
      $jobType = $_SESSION["jobtype"];
      switch ($jobType) {
   
        case "Wildlife Officer":
          $this->view->render('wildlifeofficer');
          break;
        case "admin":
          $this->view->render('admin_page');
          break;
        case "regional Officer":
          $this->view->render('regionalDashboard');
          break;
        case "veterinarian":
          $this->view->render('veterinarian');
          break;

          case 'gramaniladari':
            $this->view->render('gramaniladari');
            break;

      }
    } else {
      if (isset($_GET["lang"])) {

        if ($_GET["lang"] == "2")
          $this->view->render('loginSinhala');
        elseif ($_GET["lang"] == "1")
          $this->view->render('login');
        elseif ($_GET["lang"] == "3")
          $this->view->render('loginTamil');
      } else
        $this->view->render('login');
    }
  }






  public function login()
  {


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $data = [
        "username" => trim($_POST["username"]),
        "password" => trim($_POST["password"])
      ];

      if (!empty($data["username"]) && !empty($data["password"])) {

        $loginUser = $this->model->login($data["username"], $data["password"]);
        if (empty($loginUser["Error"])) {
          session_start();
          $_SESSION["NIC"] = $loginUser["NIC"];
          $_SESSION["Fname"] = $loginUser["Fname"];
          $_SESSION["Lname"] = $loginUser["Lname"];
          $_SESSION["jobtype"] = $loginUser["jobtype"];
          $_SESSION["Fname"] = $loginUser["Fname"];
          $_SESSION["Lname"] = $loginUser["Lname"];

          if (isset($_GET["lang"])) {

            if ($_GET["lang"] == "1") {
              switch ($loginUser["jobtype"]) {

                case "villager":
                  //get the data in Database  
                  $this->view->data = $this->model->selectData($_POST["username"]);
                  //echo $this->data;  
                  // render the villager page  
                  $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
                  $this->view->render('villagersPage');
                  if (isset($_POST['submitAlert'])) {
                    $this->model->setAlerStatus($_SESSION['NIC']); 
                    }
                  break;
                case "Wildlife Officer":
                  $this->view->render('wildlifeofficer');
                  break;
                case "admin":
                  $this->view->render('admin_page');
                  break;
                case "regional Officer":
                  $this->view->render('regionalDashboard');
                  break;
                case "veterinarian":
                  $this->view->render('veterinarian');
                case 'gramaniladari':
                    // session_start();
                    $_userNic = $_SESSION["NIC"];
                    $this->view->data = $this->model->selectData($_userNic);
            
                    $this->view->render('gramaniladari');
                    break;   
              }
            } elseif ($_GET["lang"] == "2") {

              switch ($loginUser["jobtype"]) {

                case "villager":
                  //get the data in Database  
                  $this->view->data = $this->model->selectData($_POST["username"]);
                  //echo $this->data;  
                  // render the villager page  
                  $this->view->render('villagersPagesinhala');
                  break;
                case "Wildlife Officer":
                  $this->view->render('wildlifeofficer');
                  break;
                case "admin":
                  $this->view->render('admin_page');
                  break;
                case "regional Officer":
                  $this->view->render('regionalDashboard');
                  break;
                  // case "veterinarian": $this->view->render('veterinarian');



              }
            }
          } else {

            switch ($loginUser["jobtype"]) {

              case "villager":
                //get the data in Database  
                $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
                $this->view->data = $this->model->selectData($_POST["username"]);
                //echo $this->data;  
                // render the villager page  
                $this->view->render('villagersPagetamil');
                break;
              case "Wildlife Officer":
                $this->view->render('wildlifeofficer');
                break;
              case "admin":
                $this->view->render('admin_page');
                break;
              case "regional Officer":
                $this->view->render('regionalDashboard');
                break;

              case "veterinarian":
                $this->view->render('veterinarian');
                break;
            }
          }
        } else {
          $this->view->render('login', $loginUser["Error"]);
        }
      }
    }
  }
  //   }
  // }


  public function logout()
  {

    session_start();
    unset($_SESSION["NIC"]);
    unset($_SESSION["jobtype"]);
    unset($_SESSION["Fname"]);
    unset($_SESSION["Lname"]);
    session_destroy();
    if (isset($_GET["lang"])) {

        if ($_GET["lang"] == "2")
          $this->view->render('loginSinhala');
        elseif ($_GET["lang"] == "1")
          $this->view->render('login');
        elseif ($_GET["lang"] == "3")
          $this->view->render('loginTamil');
      } else
        $this->view->render('login');
    
  }
  public function checkAlerStatus($NIC){
       
    $statusReview  = $this->model->getAlerStatus($NIC);  
    foreach($statusReview as $row){ 
      $status = $row['alertstatus'];
    }  
    return $status;
  }
  public function viewpage()
  {
    session_start();
    if (isset($_GET['lang'])) {
      //assign the value
      $lang = $_GET['lang'];
    }
    if (isset($_GET['send'])) {
      //assign the value
        $this->model->selectData($_userNic);
    }
    $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);

    switch ($lang) {
      case 1:
        switch ($_SESSION["jobtype"]) {
          case 'villager':
            // session_start();
            $_userNic = $_SESSION["NIC"];
            $this->view->data = $this->model->selectData($_userNic);
            $this->view->render('villagersPage');
            if (isset($_POST['Submit'])) {
              //assign the value
                
                 $this->model->emergencyReport($_userNic ,'',  '','' , '' , $_POST['latitude'], $_POST['longitude']);
            }
        break;

            case 'gramaniladari':
              // session_start();
              $_userNic = $_SESSION["NIC"];
              $this->view->data = $this->model->selectData($_userNic);
      
              $this->view->render('gramaniladari');
        }
        break;
      case 2:
        switch ($_SESSION["jobtype"]) {
          case 'villager':
            // session_start();
            $_userNic = $_SESSION["NIC"];
            $this->view->data = $this->model->selectData($_userNic);

            $this->view->render('villagersPagesinhala');
        }
        break;
      case 3:
        switch ($_SESSION["jobtype"]) {
          case 'villager':
            // session_start();
            $_userNic = $_SESSION["NIC"];
            $this->view->data = $this->model->selectData($_userNic);

            $this->view->render('villagersPagetamil');
        }
        break;
    }
  }


  public function resetPasswordRequest()
  {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["sendEmail"])) {

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        $userName = trim($_POST["userName"]);



        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);
        $url = "localhost/wildlifecare/user/resetPassword?selector=" . $selector . "&validator=" . bin2hex($token) . "&name=" . $userName;
        $expire = date("U") + 1800;
        $email = $this->model->resetPasswordStore($userName, $selector, $token, $url, $expire);
        if (!empty($email)) {

          $mail = new PHPMailer(true);
          $mail->isSMTP();
          $mail->Host = "smtp.gmail.com";
          $mail->SMTPAuth = "true";
          $mail->SMTPSecure = "tls";
          $mail->Port = "25";
          $mail->Username = "wildlifecareproject@gmail.com";
          $mail->Password = "Wildlife123";
          $subject = "Reset Your Password for Wildlife care";
          $mail->Subject = $subject;
          $mail->setFrom("wildlifecareproject@gmail.com");
          $mail->isHTML(true);
          $message = "<p>We recieved a password reset request. The link to reset your password here below. If you not request please ignore this email</p>";
          $message .= "<p>Here is your password reset link: <br>";
          $message .= "<a href=\"" . $url . "\">" . $url . "</a></p>";


          $mail->Body = $message;
          $to = $email;
          $mail->addAddress($email);
          $haha = $mail->Send();







          // $headers="From: wildlifecare <wildlifecare@gmail.com>\r\n";
          // $headers.="Reply-to: wildlifecare@gmail.com\r\n";
          // $headers.="Content-type: text/html\r\n";



          header("Location: ../user/index?reset=success");
        } else {
          header("Location: ../user/index?reset=emailError");
        }
      } else {
        header("Location: ../user/index");
      }
    } else {
      header("Location: ../user/index");
    }
  }


  public function resetPassword()
  {
    $this->view->render("resetPassword");
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];
    $userName = $_GET["name"];



    if (empty($selector) || empty($validator)) {
      header("Location: ../user/index?resetSuc=error");
    } else {
      if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {



        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST["submit"])) {
            $pwd = $_POST["newPassword"];
            $conPwd = $_POST["confirmPassword"];
            if ($pwd === $conPwd) {


              if ($this->model->resetPassword($userName, $pwd, $selector, $validator)) {
                header("Location: ../user/index?resetSuc=success");
              } else
                header("Location: ../user/index?resetSuc=fail");
            } else {
              header("Location: ../user/resetPassword?selector=" . $selector . "&validator=" . $validator . "&resetSuc=conpwd");
            }
          }
        }
      } else {
        header("Location: ../user/index?resetSuc=error");
      }
    }
  }
 
  public function  editProfile()
  {
    session_start();
    $this->view->userData = $this->model->profileData($_SESSION['NIC']);
    if (isset($_GET['lang'])) {
      //assign the value
      $lang = $_GET['lang'];
    }
    switch ($lang) {
      case 1:
        //display special Notice     
        $this->view->render('editProfile');
        break;
      case 2:
        //display special Notice     

        $this->view->render('editProfilesinhala');
        break;
      case 3:
        //display special Notice     

        $this->view->render('editProfiletamil');
        break;
    }
    // $this->view->render('editProfile');
  }
}
