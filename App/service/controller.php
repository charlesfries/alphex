<?php
class Controller
{
  
  # Sign Up ####################################################################################################
  
  public function sign_up()
  {
    global $db;
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password))
    {
      $response = array("error" => 1, "message" => "All fields must be filled out.");
      return json_encode($response);
    }
    else
    {
      $sql = $db->prepare("SELECT * FROM users WHERE email=?");
      $sql->execute([$email]);
      
      if ($sql->rowCount() != 0)
      {
        $response = array("error" => 2, "message" => "Email is already registered.");
        return json_encode($response);
      }
      else
      {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = $db->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $sql->execute([$firstName, $lastName, $email, $hash]);
        
        $response = array("error" => 0, "message" => "Sign up successful.");
        return json_encode($response);
      }
    }
  }
  
  # Sign In ####################################################################################################
  
  public function sign_in()
  {
    global $db;
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = $db->prepare("SELECT * FROM users WHERE email=?");
    $sql->execute([$email]);
    $res = $sql->fetch();
    
    if (!password_verify($password, $res["password"]))
    {
      $response = array("error" => 3, "message" => "Email and password combination is invalid.");
      return json_encode($response);
    }
    else
    {
      $response = array("error" => 0, "message" => "Sign in successful.");
      return json_encode($response);
    }
  }
  
  # Get User ####################################################################################################
  
  public function get_user()
  {
    global $db;
    
    $username = $_GET["username"];
    
    $sql = $db->prepare("SELECT * FROM users WHERE username=?");
    $sql->execute([$username]);
    
    if ($sql->rowCount() != 1)
    {
      $response = array("error" => 10, "message" => "User not found.");
      return json_encode($response);
  	}
    else
    {
      $res = $sql->fetch();
      
      $response = [
        "id" => $res["id"],
        "username" => $res["username"],
        "email" => $res["email"],
        "name" => $res["name"],
        "birthday" => $res["birthday"],
        "picture" => $res["picture"]
      ];
      return json_encode($response);
    }
  }
  
  # Unknown ####################################################################################################
  
  public function unknown()
  {
    $response = array("error" => 0, "message" => "Unknown API call.");
    return json_encode($response);
  }
  
}

?>