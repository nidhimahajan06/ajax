<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dropdown</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="index.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<center><h2 class="text-success"><b>CHOOSE YOURS</b></h2></center>
</div>
<div class="card-body">
<form>
<div class="form-group">
<label for="country"><em>Country</em></label>
<select class="form-control" id="country-dropdown">
<option value=""></option>
<?php
require_once "conn.php";
$result = mysqli_query($conn,"SELECT * FROM countries");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>
</div>
<div class="form-group">
<label for="state"><em>State</em></label>
<select class="form-control" id="state-dropdown">
</select>
</div>                        
<div class="form-group">
<label for="city"><em>City</em></label>
<select class="form-control" id="city-dropdown">
</select>
</div>
</div>
<script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var countries_id = this.value;
$.ajax({
url: "statecountry.php",
type: "POST",
data: {
countries_id: countries_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
var states_id = this.value;
$.ajax({
url: "citystate.php",
type: "POST",
data: {
states_id: states_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
}
});
});
});
</script>
</body>
</html>