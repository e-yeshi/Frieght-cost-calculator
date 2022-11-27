<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>UniShipit</title>
<link rel="stylesheet" type="text/css" href="./styles.css">
<body>
  <?php include '../menu.php';?>
    <div class= "main-color col-md-12 col-lg-12" style="min-height: 25.5em; ">
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      </head>
      <body>

      <?php
        $trainCost = 1;
        $truckCost = 2;
        $carCost = 5;
        $weight = $_POST["weight"];
        $byTrain = $_POST["byTrain"];
        $byCar = $_POST["byCar"];
        $byTruck = $_POST["byTruck"];
        
        function calculteCost($mile, $perMileCost, $weight){
            return $mile * $perMileCost *  $weight;
        }
        function centsToDollars($costInCents){
          return $costInCents / 100;
        }
        
        $byTrain = empty($byTrain) ? 0 : $byTrain;
        $byTruck = empty($byTruck) ? 0 : $byTruck;
        $byCar = empty($byCar) ? 0 : $byCar;

        if (empty($weight)) {
          echo "Weight field is required";
        }
        elseif (empty($byTrain) && empty($byTruck) && empty($byCar)) {
          echo "One Transport mode required";
        }
        else {
          echo "<h4 class = 'main-title'>Total Shipping Cost</h4>";
          echo "<div class='main-content'>";
          echo "For $weight pound package it is estimate that: <br />";
          $currentTrainCost =  calculteCost($byTrain , $trainCost , $weight);
          $currentTruckCost =  calculteCost($byTruck , $truckCost , $weight);
          $currentCarCost =  calculteCost($byCar , $carCost , $weight);
          echo "$", centsToDollars($currentTrainCost) , " Train freight cost <br />";
          echo "$", centsToDollars($currentTruckCost) , " Truck freight cost <br />";
          echo "$", centsToDollars($currentCarCost) , " Car freight cost <br /> <br />";
          echo "<p class='btn-calculate'> Total Shipping Charges are : $" ,  centsToDollars($currentCarCost + $currentTruckCost + $currentTrainCost), "</p>" ;
          echo "</div>";
        }
      ?>
        <button type="button" class="practica-button btn btn-warning" onclick="window.location.href = './index.php';">Practicum Main</button>
        <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>

      </body>
      </html>
    </div>
  <?php include '../footer.php';?>
</body>
</html>
