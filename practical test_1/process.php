<?php
$error = "";
$showBill =false;
    if(isset($_POST['calculate'])) {

       $firstinput = $_POST['first'];
       $secondinput = $_POST['second'];
       $thirdinput = $_POST['third'];
       $fourthinput = $_POST['fourth'];
       $firthinput = $_POST['firth'];

       if ($firstinput== "")
          $firstinput = 0;
        
       if ($secondinput== "")
          $firstinput = 0;
        
       if ($thirdinput== "")
          $firstinput = 0;
        
       if ($fourthinput== "")
          $firstinput = 0;
        
       if ($firthinput== "")
          $firstinput = 0;
    }
        // $firstinput = $_POST['first']; *0.218;

    //    echo "The First charge is" . $firstinput;

       if($firstinput <0 ||$secondinput <0 || $thirdinput <0 || $fourthinput <0 || $firthinput <0)
        $error = "Please enter positive numbers only!!";

       else if ($firstinput > 200)
        $error = "Please enter below 200kWh";
    else if ($secondinput > 100)
        $error = "Please enter below 100kWh";
    else if ($thirdinput > 300)
        $error = "Please enter below 300kWh";
    else if ($fourthinput > 300)
        $error = "Please enter below 300kWh";



    else if ($firstinput + $secondinput + $thirdinput + $fourthinput + $firthinput == 0)
      $error = "Please enter at least one input";
    

   else {
    $firstcharge =  $firstinput *0.218;
    $secondcharge = $secondinput *0.344;
    $thirdcharge = $thirdinput *0.516;
    $fourthcharge = $fourthinput *0.546;
    $firthcharge = $firthinput *0.571;

    $totalInput = $firstinput + $secondinput + $thirdinput + $fourthinput + $firthinput;
    $totalCharge = $firstinput + $secondinput + $thirdinput + $fourthinput + $firthinput;

if($totalCharge < 3)
    $totalCharge = 3;

    if ($totalInput > 600) {
        // $sst = $totalCharge * 0.06
        // $totalCharge = $totalCharge + $sst;

        $totalCharge = $totalCharge * 1.06;
    }

    $showBill =true;
   }
    ?>
