<?php
class login extends users{
  public $email, $phone, $password;

  public function __construct( $email, $phone, $password ){
    $this->email = $email;
    $this->phone = $phone;
    $this->password = $password;
  }

  public function checkResult(){
    $status = $this->status;
    $conn = $this->conn;

    if($status == 1 ){
      $query = 'SELECT * FROM users WHERE email = :email';
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':email', $this->email);
      $stmt->execute();
      // @php-ignore
      $row = $stmt->fetchObject();
      if(password_verify($this->password, $row->password)){
      $_SESSION['id'] = $row->id;
      $_SESSION['firstname'] = $row->firstname;
      $_SESSION['surname'] = $row->surname;
      $_SESSION['email'] = $row->email;
      $_SESSION['message_header'] = 'success';
      $_SESSION['message'] = 'Signed in successfully <span class="username">'.$_SESSION['firstname'].'</span>';
      header('Location: index.php');
      exit();
      } else {
        $_SESSION['message_header'] = 'info';
        throw new Exception('Incorrect password');
      }
    }

    if($status == 2 ){
      $query = 'SELECT * FROM users WHERE phone = :phone';
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':phone', $this->phone);
      $stmt->execute();
      // @php-ignore
      $row = $stmt->fetchObject();
      if(password_verify($this->password, $row->password)){
      $_SESSION['id'] = $row->id;
      $_SESSION['firstname'] = $row->firstname;
      $_SESSION['surname'] = $row->surname;
      $_SESSION['phone'] = $row->phone;
      $_SESSION['message_header'] = 'success';
      $_SESSION['message'] = 'Signed in successfully <span class="username">'.$_SESSION['firstname'].'</span>';
      header('Location: index.php');
      exit();
      } else {
        $_SESSION['message_header'] = 'info';
        throw new Exception('Incorrect password');
      }

    }

    if($status == 3 ){
      $_SESSION['message_header'] = 'info';
      throw new Exception('No account associated with email '.$this->email);
    }

    if($status == 4 ){
      $_SESSION['message_header'] = 'info';
      throw new Exception('No account associated with phone number '.$this->phone);
    }

  }
}