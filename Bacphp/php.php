<html>
<head>
<title>Swap Number</title>
</head>
<body bgcolor="pink">
    <form method="POST">
    <h2>Swapping Two Numbers</h2>
        Enter First Number : <input type="number" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>"><br><br>
        Enter Second Number : <input type="number" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>"><br><br>
        <input type="submit" name="submit" value="Submit"><br><br><hr>
    </form>
 
     <?php
    if ($_SERVER['REQUEST_METHOD'] ==='POST')
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        /*swapping using thrid variable*/
        $c = $a;
        $a = $b;
        $b = $c;
        echo "<h2>After swapping:</h2>";
        echo "After Swapping First Number is : " . $a . "<br><br>";
        echo "After Swapping Second Number is : " . $b . "<br>";
 
        echo "<h2>After Swapping Using XOR Operators</h2>";
        $a ^= $b ^= $a ^= $b;
        echo "After Swapping First Number is : " . $a . "<br><br>";
        echo "After Swapping Second Number is : " . $b . "<br>";

        echo "<h2>After Swapping Using array() and list()</h2>";
        list($a, $b) = array($b, $a);
        echo "After Swapping First Number is : " . $a . "<br><br>";
         echo "After Swapping Second Number is : " . $b . "<br>";
    }
 ?>
</body>
</html>
