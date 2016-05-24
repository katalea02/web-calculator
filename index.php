<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>
<div class="super-container">
    <div class="container">
        <div class="number-container">
            <div class="number"><input type="number" name="number1"></div>
            <div class="operator"><strong>+</strong></div>
            <div class="number"><input type="number" name="number2"></div>
            <div class="go"><button type="submit">GO</button></div>
        </div>

        <div class="operators">
            <div class="digits">1</div>
            <div class="digits">2</div>
            <div class="digits">3</div>
            <div class="digits">4</div>
            <div class="digits">5</div>
            <div class="digits">6</div>
            <div class="digits">7</div>
            <div class="digits">8</div>
            <div class="digits">9</div>
            <div class="digits empty"></div>
            <div class="digits">0</div>
            <div class="digits empty"></div>
        </div>
    </div>

    <div class="result animated fadeInUp">
        <!--        echo result here-->
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/numbers.js"></script>
</body>
</html>