<?php
function item(){
 header("location:http://localhost:8888/Farstrup%20Furniture/home.php");
}
function productPlacment($whichChair) {
    $dinnerChairs = [
        ["Spisebordsstol"=>"2550 Stag W", "Materiale" =>"ege","Pris"=> "4.370kr."], 
        ["Spisebordsstol" =>"2500 Stag S","Materiale"=>"stål","Pris"=>"4.215kr."],
        ["Spisebordsstol"=>"No. 210r","Materiale"=>"ege","Pris"=>"3.215kr."]
      ];
      print_r($dinnerChairs[$whichChair]["Spisebordsstol"]. "<br>". 
      $dinnerChairs[$whichChair]["Materiale"]. "<br>".
      $dinnerChairs[$whichChair]["Pris"]. "<br>");
}

function onSeatheight() {
    saveToBasket($_POST['sædehøjde']);
}
function onSeatdebth() {
    saveToBasket($_POST['sædedybde']); 
}
function onSeatwidth() {
    saveToBasket($_POST['sædebredde']); 
}
function onPossibilities() {
    saveToBasket($_POST['andremuligheder']); 
}
function onReg() {
    saveToPayment($_POST['regnr']); 
}
function onAccount() {
    saveToPayment($_POST['kontonr']); 
}
function onName() {
    saveToPayment($_POST['navn']); 
}

//Her bliver det encoded og postet i notes.json
function saveToBasket($itemBasket){
    $basketArray= getFromFile();
    $basketArray[] = $itemBasket;
    $jsonNotes = json_encode($basketArray);

    file_put_contents("./kurv.json", $jsonNotes);
}
//Her hentes det fra json og decodes til et array
function getFromFile(){
    $jsonNotes = file_get_contents("./kurv.json");
    $basketArray = json_decode($jsonNotes, true);
    return $basketArray;
}

function saveToPayment($paymentBasket){
    $paymentArray= getFromBasket();
    $paymentArray[] = $paymentBasket;
    $jsonpayNotes = json_encode($paymentArray);

    file_put_contents("./betaling.json", $jsonpayNotes);
}
function getFromBasket(){
    $jsonpayNotes = file_get_contents("./betaling.json");
    $paymentArray = json_decode($jsonpayNotes, true);
    return $paymentArray;
}

function paymentPage(){
    if (getFromBasket() == null)
    echo "Indtast venligst betalings informationer!";
    else 
    echo "Tak fordi du handle ved Farstrup Furniture! Ordrebekræftelses nr.:". rand(1.2000);
}


?>