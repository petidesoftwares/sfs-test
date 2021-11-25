<?php
require ('model/ComputerSystems.php');
$totalPrices =  ComputerSystems::sumPrice(ComputerSystems::$systemSpecs);
$priceDiff = explode(',',ComputerSystems::compare(ComputerSystems::$systemSpecs));
$highestBrand = ComputerSystems::highestBrand(ComputerSystems::$systemSpecs);

$brandPrice = "";
$brand = "";
if(isset($_POST['submit'])){
    $brand = $_POST['brand'];
    $brandPrice =  ComputerSystems::getPrice($brand);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheets/sfs-test.css">
    </head>
    <body>
        <div id="header">
            <h1>SFS  COMPUTER SYSTEMS</h1>
        </div>
        <div id="content">
            <div class="content-pane" id="form-pane">
                <form name="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <label>Select computer Brand</label><select name="brand">
                        <option value="Apple">Apple</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="HP">HP</option>
                        <option value="Dell">Dell</option>
                    </select><br><span><?php echo $brand. "=".$brandPrice ?> </span><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
            <div class="content-pane" id="price-diff">
                <h3>Price Differences</h3>
                <table>
                    <tbody>
                    <tr>
                        <td>Apple - Lenovo</td><td><?php echo $priceDiff[0]?></td>
                    </tr>
                    <tr>
                        <td>HP - Dell</td><td><?php echo $priceDiff[1]?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="content-pane">
                <h3>Brand with the highest price = <?php echo $highestBrand?></h3>
            </div>
            <div class="content-pane">
                <h3>Total price of all the computers = <?php echo $totalPrices ?></h3>
            </div>
        </div>
        <div id="footer">
            <span>Powered by Petidesofwares <br>Copyright &copy<?php echo date('Y')?></span>
        </div>
    </body>
</html>