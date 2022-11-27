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
    <title>Unishipit Calculate Cost</title>
    </head>
    <body>

    <form action="shipping.php" method = "post">
        <h4 class = "main-title">Cost of Package Delivery</h4>
          <div class="main-content">
            Weight:
            <input type="text" name="weight" value=""> Pounds
            <br><br>
            By Trian : 
            <input type="text" name="byTrain" value="">  Miles
            <br><br>
            By Truck:
            <input type="text" name="byTruck" width="20" value=""> Miles
            <br><br>
            By Car:
            <input type="text" name="byCar" width="20" value="">  Miles
            <br><br>
            <input type="submit" class= "btn btn-calculate" value="Calculate">
            <br>
            <br>
          </div>
      
      <button type="button" class="practica-button btn btn-warning" onclick="window.location.href = './index.php';">Practicum Main</button>
      <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
    </form> 

    </body>
    </html>
    </div>
    <?php include '../footer.php';?>
  </body>
</html>
