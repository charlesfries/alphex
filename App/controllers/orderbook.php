<?php

function submit_order($type, $side, $coin_1, $coin_2, $price, $amount)
{
  global $db;
  global $vault;
  global $authenticated_user;
  
  if (empty($price) || empty($amount)) {
    $response = [
      "condition" => false,
      "message" => '<p class="text-danger minilert">Price & amount cannot be blank</p>'
    ];
  } else {
    if (!is_numeric($price) || !is_numeric($amount)) {
      $response = [
        "condition" => false,
        "message" => '<p class="text-danger minilert">Price & amount must be numeric</p>'
      ];
    } else {
      
      $coin = $side == "bid" ? $coin_1 : $coin_2;
      $balance = $vault->get_balance($coin);
      $total = $price * $amount;
      
      if ($balance < $total) {
        $response = [
          "condition" => false,
          "message" => '<p class="text-danger minilert">Insufficient funds</p>'
        ];
      } else {
        
        $user = $authenticated_user;
        $sql = $db->prepare("INSERT INTO orders (user, type, side, coin_1, coin_2, price, amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql->execute([$user, $type, $side, $coin_1, $coin_2, $price, $amount]);
        
        $response = [
          "condition" => true,
          "message" => '<p class="text-success minilert">Order placed successfully</p>'
        ];
      }
    }
  }
  return json_encode($response);
}

function get_bids_total()
{
  global $db;
  
  $sql = $db->prepare("SELECT price, amount FROM orders WHERE side=?");
  $sql->execute(["bid"]);
  
  $total = 0;
  
  while ($res = $sql->fetch())
  {
    $total += $res["price"] * $res["amount"];
  }
  
  return $total;
}

function get_asks_total()
{
  global $db;
  
  $sql = $db->prepare("SELECT price, amount FROM orders WHERE side=?");
  $sql->execute(["ask"]);
  
  $total = 0;
  
  while ($res = $sql->fetch())
  {
    $total += $res["price"] * $res["amount"];
  }
  
  return $total;
}

function submit_offer($coin, $rate, $amount, $duration)
{
  global $db;
  global $vault;
  global $authenticated_user;
  
  if (empty($rate) || empty($amount) || empty($duration)) {
    $response = [
      "condition" => false,
      "message" => '<p class="text-danger minilert">Fields can\'t be empty</p>'
    ];
  } else {
    if (!is_numeric($price) || !is_numeric($amount)) {
      $response = [
        "condition" => false,
        "message" => '<p class="text-danger minilert">Price & amount must be numeric</p>'
      ];
    } else {
      
      $coin = $side == "bid" ? $coin_1 : $coin_2;
      $balance = $vault->get_balance($coin);
      $total = $price * $amount;
      
      if ($balance < $total) {
        $response = [
          "condition" => false,
          "message" => '<p class="text-danger minilert">Insufficient funds</p>'
        ];
      } else {
        
        $user = $authenticated_user;
        $sql = $db->prepare("INSERT INTO orders (user, type, side, coin_1, coin_2, price, amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql->execute([$user, $type, $side, $coin_1, $coin_2, $price, $amount]);
        
        $response = [
          "condition" => true,
          "message" => '<p class="text-success minilert">Order placed successfully</p>'
        ];
      }
    }
  }
  return json_encode($response);
}

?>