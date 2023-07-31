<?php 
/*
$x=6;
$y=12;
$z= $x+$y;
echo"$z";

$fname= "Ally";
$Lnane = "kuku";
$fully_name = $fname. " " .$Lnane;
echo  "<br>" .$fully_name;


//add + sub - div / mult 8 remainder %

echo 1 / 3;

//logically operators
// AND (1==1 && !==0) false
// OR operator (1==1 || 1==0) true
// != not equally, > greater than etc >= greater or equal

//$decimal = 0.5
//$boolean = 1 (true)

//condition statement

/*if(condition){

}
*/

//example
/*
$gpa = 3.9;
if ($gpa >= 3.7) {
    echo    "YOU ARE ELIGIBLE TO APPLY FOR SCHOLARSHIP.";
}

//else if condition
//A = 80, B = 60, C = 50, D = 35, F < 35

$marks = 67;
if($marks >= 60){
    echo "YOU HAVE PASSED";
}else{
    "YOU HAVE FAILED";
}
*/
//$marks = 65;
/*
IF($marks >= 50 && $marks <= 60){
    $grade = "A";
}else if($marks <=35){
    $grade = "F";

}else if($marks >= 60 ){
    $grade = "B";
}
echo $grade;
*/
//switch
/*
switch($marks){
    case $marks >=80 && $marks  <=100:
        $grade = "A";
        braek;
    case$marks >=60 && $marks  <=79:
        $grade = "B";
        break;
    case $marks >=50 && $marks  <=59:
        $grade = "C";
        breake;
        default:
        $grade = "F";
}
echo $grade;
*/

//loop(repitition)
// 1.for loop
// 2. while loop
// 3. do.. while loop
// 4. for each loop


//1. for loop
/*
for ($i = 0; $i<=10; $i++){
    echo $i . "<br>";
}

//2. while loop
$j =0;
while($j<=10){
    echo $j;
    $j++;

}

// atm machine
$balance = 15000;
while ($balance >= 10000){
    echo "Unaweza kutoa pesa, balance ni ". $balance . "<br>";
    $balance = $balance - 1000;
}

// do while loop
$balance = 9000;
do {
    echo "Unaweza kutoa pesa, balance ni ". $balance . "<br>";
    $balance = $balance - 1000;

}
while ($balance >= 10000);
*/
   /*
//ARRAYS
$colours = array("Blue","Manjano","Kiajani","Nyeupe","Nyeusi");

      echo $colours[4];


$Age = array("Ally"=>"23", "Abdallah"=>"55", "Juma"=>"10", "Mariam"=>"20");

    echo $Age['Ally'];

    //multidimensional array

    $cars = array(
        array("BMW",2010,240),
        array( "Rav4",2009,200),

    );
    echo $cars[0][0] . "" .$cars[0][1];
    
//details array
    $details = array(
        "ally"=>array("23", "1997", "Nungwi"),
        "Fatma"=>array("20", "2000", "Jang'ombe"),
    );

           echo $details["ally"][2];
           echo $details["Fatma"][2];

           //njia nyingne
           print_r ($details["ally"]);

           foreach ($details as $details){
            echo $detail[]
           }
           */

//FUNCTIONS

   function division($x, $y){
    if($y !=0){
        $z = $x/$y;
    }else{
        $z = "UNDIFINED";
    }
   echo $z;
   }
  function message(){
    echo "MESSAGE SENT";
  }
  division(2,2); 
  message();
  
  //CALCULATOR
  
?>
