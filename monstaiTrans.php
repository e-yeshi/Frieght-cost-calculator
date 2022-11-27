<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Monstai Transport</title>
<link rel="stylesheet" type="text/css" href="./styles.css">
<body>
    <?php include '../menu.php';?>
    <div class= "main-color col-md-12 col-lg-12" style="min-height: 25.5em; ">
    <?php
    define('BUS_CAPACITY', 30);
    define('CAR_CAPACITY', 4);

    $passengers = @$_POST['passengers'];

    function visualOutput($number) {
        $string = "";
        for ($i = 0; $i < $number; $i++) {
            $string .= "o ";
        }
        return $string;
    }
    ?>
    <form action='monstaiTrans.php' method='post'>
        <div>
            <h4 class="main-title">
                <?php echo $passengers ? "Passenger Distribution Results" : "Passenger Distribution"; ?>
            </h4>
            <div>
                <div class="main-content">
                    <br />
                    <?php 
                      if ($passengers) {
                        echo "<p>$passengers passengers need transportation:</p>";
                        $bus_ontake = round($passengers/BUS_CAPACITY, 2) % 10;
                        $left_over = $passengers % BUS_CAPACITY;
                        $car_ontake = round($left_over/CAR_CAPACITY, 2) % 10;
                        $left_over = $left_over % CAR_CAPACITY;
                        echo "<p>$bus_ontake Busses Needed</p>";
                        echo visualOutput($bus_ontake);
                        echo "<p>$car_ontake Cars Needed</p>";
                        echo visualOutput($car_ontake);
                        echo "<p>$left_over Passengers left over</p>";
                        echo visualOutput($left_over);
                      }  
                      else {
                        echo "<span>Total Number of Passengers:</span>";
                        echo "<input type='text' name='passengers' /> <br />";
                      } 
                    ?>
                    <br />
                </div>
            </div>
            <?php
            if ($passengers) {
                echo "<div class='main-content'><p>Legend: Passengers per Bus = 30 | per Car = 4</p></div>";
            }
            else {
                echo "<div class='main-content'><input type='submit' value='Calculate' class='btn'/></div>";
            }
            ?>
        </div>
    </form>
    <br />
    <br />
      <button type="button" class="practica-button btn btn-warning" onclick="window.location.href = './index.php';">Practicum Main</button>
      <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
    </div>
    <?php include '../footer.php';?>
  </body>
</html>
