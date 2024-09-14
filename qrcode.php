<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<style>
        
</style>
<body>
    <div class="responsive">
     <p> <img class="img-fluid"src="./image/c3.png" alt="c3.png"></p>
    </div>
    <table class="table">
  <thead>
            <th>Product ID:</th>
            <th>Product Name:</th>
            <th>QR Code:</th>
            <th>Origin Country:</th>
            <th>Product Standard:</th>
            <th>Manufactured by:</th>
            <th>Inspector Name:</th>
            <th>Type</th>
  </thead>
  <tbody>
    <tr>
      <td data-label="Product ID">5345-256-252</td>
      <td data-label="Product Name">Chair Set</td>
      <td data-label="QR Code">14afa5526</td>
      <td data-label="Origin Country">China</td>
      <td data-label="Product Standard">AA+</td>
      <td data-label="Manufactured by">Manila Intrep</td>
      <td data-label="Inspector Name">Jerico Gutierrez</td>
      <td data-label="Type">Plastic</td>
    </tr>
  </tbody>
</table>

<?php 
include "db.php";
  if (isset($_POST['submit'])) {
    $statisfy = $_POST['statisfy'];
    $text = $_POST['text'];
    $sql = "INSERT INTO `feedback`(`statisfy`,`text`) VALUES ('$statisfy','$text')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script> alert ('Add Successful'); </script>";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
<!DOCTYPE html>
<html>
<body>
<h2>Rate Us!</h2>
<form action="" method="POST">
  <fieldset>
    <input type="radio" name="statisfy" value="Very Statisfy">Very Statisfy
    <input type="radio" name="statisfy" value="Good">Good
    <input type="radio" name="statisfy" value="Not Statisfy">Not Statisfy
    
    <br><br>
    <input type="text" name="text" placeholder="Write your feedback here!.">
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>


</body>
</html>