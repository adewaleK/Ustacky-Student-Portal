<?php

echo 'we are here now';

function refine_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getStates(){
    switch ($_POST['state']) {
        case "1":
          $state = "Abia State";
          break;
        case "2":
          $state = "Adamawa State";
          break;
        case "3":
          $state = "Akwa Ibom State";
          break;
        case "4":
          $state = "Anambra State";
          break;
        case "5":
          $state = "Bauchi State";
          break;
        case "6":
          $state = "Bayelsa State";
          break;
        case "7":
          $state = "Benue State";
          break;
        case "8":
          $state = "Borno State";
          break;
        case "9":
          $state = "Cross River State";
          break;
        case "10":
          $state = "Delta State";
          break;
        case "11":
          $state = "Ebonyi State";
          break;
        case "12":
          $state = "Edo State";
          break;
        case "13":
          $state = "Ekiti State";
          break;
        case "14":
          $state = "Enugu State";
          break;
        case "15":
          $state = "Enugu State";
          break;
        case "16":
          $state = "FCT";
          break;
        case "17":
          $state = "Gombe State";
          break;
        case "18":
          $state = "Imo State";
          break;
        case "19":
          $state = "Jigawa State";
          break;
        case "20":
          $state = "Kaduna State";
          break;
        case "21":
          $state = "Kano State";
          break;
        case "22":
          $state = "katsina State";
          break;
        case "23":
          $state = "Kebbi State";
          break;
        case "24":
          $state = "Kwara State";
          break;
        case "25":
          $state = "Lagos State";
          break;
        case "26":
          $state = "Nasarawa State";
          break;
        case "27":
          $state = "Niger State";
          break;
        case "28":
          $state = "Ogun State";
          break;
        case "29":
          $state = "Ondo State";
          break;
        case "30":
          $state = "Osun State";
          break;
        case "31":
          $state = "Oyo State";
          break;
        case "32":
          $state = "Plateau State";
          break;
        case "33":
          $state = "Rivers State";
          break;
        case "34":
          $state = "Sokoto State";
          break;
        case "35":
          $state = "Taraba State";
          break;
        case "36":
          $state = "Yobe State";
          break;  
        case "37":
          $state = "Zamfara State";
          break;  
        default:
          echo "Invalid";
      }
  
}