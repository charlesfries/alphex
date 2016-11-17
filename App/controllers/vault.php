<?php
class Vault
{
  public $user;
  
  public function get_balance($coin)
  {
    switch ($coin)
    {
      case "1CR":
        return 0;
        break;
      
      case "AMP":
        return 0;
        break;
        
      case "ARDR":
        return 0;
        break;
        
      case "BTC":
        return 20;
        break;
        
      case "DASH":
        return 0;
        break;
      
      case "ETH":
        return 100;
        break;
        
      case "FCT":
        return 0;
        break;
        
      case "GAME":
        return 0;
        break;
        
      case "LSK":
        return 0;
        break;
        
      case "MAID":
        return 0;
        break;
      
      case "NAV":
        return 0;
        break;
    
      case "PINK":
        return 0;
        break;
        
      case "POT":
        return 0;
        break;
        
      case "REP":
        return 0;
        break;
        
      case "SC":
        return 0;
        break;
        
      case "VIA":
        return 0;
        break;
        
      case "XCP":
        return 0;
        break;
        
      case "XDN":
        return 0;
        break;
          
      case "XMR":
        return 5000;
        break;
            
      case "XRP":
        return 0;
        break;
        
      default:
        return 0;
    }
  }
}
?>