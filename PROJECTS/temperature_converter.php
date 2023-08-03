<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <header> 
        <h1>TEMPERATURE CONVERTER</h1>
    </header>
    <div class="main-div">
        <div class="left-side">
            <img src="tempp.jpg">
        </div>
        <div class="right-side">
            <form method="POST">
                <h1>Enter the number</h1>
                </br>
                <input type="number" placeholder="Enter the number" name="num">
                </br>
                <h1>CHOOSE THE TEMPERATURE</h1>
                </br>
                <label>CELSIUS</label>
                <input type="radio" name="temp" value="cel">
                <label>FAHRENHEIT</label>
                <input type="radio" name="temp" value="far">
                </br>
                <input type="submit" name="convert" value="Convert Now">
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST['convert'])){
        $num = $_POST['num'];
        $temp = $_POST['temp'];

        if($temp == "cel"){
            $result = $num * 9/5 + 32;
            echo "The value of Celsius in Fahrenheit is ".$result;
        } else {
            $result = ($num - 32) * 5/9;
            echo "The value of Fahrenheit in Celsius is ".$result;
        }
    }
    ?>
</body>
</html>
