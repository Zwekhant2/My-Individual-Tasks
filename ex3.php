<?php
$title =  "Exercise 3: Variable, Strings & Operators";
include("header.php");?>
<h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>


<form method="post" action="process.php">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Firstname">First Name</label>
            <input type="text" class="form-control" id="Firstname" name="Firstname" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="Lastname">Last Name</label>
            <input type="text" class="form-control" id="Lastname" name="Lastname" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<br><br>

<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Twitter</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jon</td>
      <td>Snow</td>
      <td>@northking</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tyrion</td>
      <td>Lannister</td>
      <td>@richdwarf</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Daenerys</td>
      <td>Targaryen</td>
      <td>@dragonsmom</td>
    </tr>
  </tbody>
</table>

<br><br>

<?php
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . " " . $str2;
echo "Joined string: " . $joinedString . "<br>";
echo "Length of the string: " . strlen($joinedString) . "<br>"; ?>

<br><br>

<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "The sum of the numbers is: " . $sum . "<br>"; ?>

<br><br>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "You are using: " . $browser . "<br>"; ?>


<?php include("footer.php"); ?>