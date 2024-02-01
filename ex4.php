<?php
$title = "Exercise 4: Control flow and loops";
include("header.php");
?>

<!-- If-Else -->
<div class="container mt-5">
    <h3>If-Else</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "<div class='mt-3 alert alert-info' role='alert'>";
        echo ($age >= 18) ? "<h3>Hello $name, you are eligible for voting.</h3>" : "<h3>Hello $name, you are not eligible for voting.</h3>";
        echo "</div>";
    }
    ?>
</div>


<!-- Switch Case -->
<div class="container mt-5">
    <h3>Switch Case</h3>
    <?php
    $month = date('F');
    echo "<div class='alert alert-warning' role='alert'>";
    switch ($month) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $month so I don't have any holidays.";
            break;
    }
    echo "</div>";
    ?>
</div>

<!-- For Loop -->
<div class="container mt-5">
    <h3>For Loop</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="n">Number for multiplication table</label>
            <input type="text" name="n" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
        $n = $_POST['n'];
        echo "<div class='mt-3'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$n * $i = " . $n * $i . "<br>";
        }
        echo "</div>";
    }
    ?>
</div>


<!-- While Loop -->
<div class="container mt-5">
    <h3>While Loop</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="n">Number to print from 1 to</label>
            <input type="text" name="n" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];
        $i = 1;
        echo "<div class='mt-3'>";
        while ($i <= $n) {
            echo $i . "<br>";
            $i++;
        }
        echo "</div>";
    }
    ?>
</div>

<!-- Foreach Loop -->
<div class="container mt-5">
    <h3>Foreach Loop</h3>
    <div class="alert alert-success" role="alert">
        <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        foreach ($myarray as $value) {
            echo $value . "<br>";
        }
        ?>
    </div>
</div>

<?php include("footer.php"); ?>
