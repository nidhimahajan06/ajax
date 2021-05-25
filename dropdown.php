<html>  
<head>  
<title>Dropdown</title>  
</head> 
<center><form class="form-control">
<b>Dropdown 1</b>
  <select name="drop1">
<option>Choose city</option>  
<option> Indore </option>  
<option> Pune </option>  
<option> Khargone </option>  
<option> Bhopal </option>  
<option> Mumbai </option> 
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<b>Dropdown 2</b>
<select name="drop2">
<option> Choose city</option>  
<option> Indore </option>  
<option> Pune </option>  
<option> Khargone </option>  
<option> Bhopal </option>  
<option> Mumbai </option> 
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<b>Dropdown 3</b>
<select name="drop3">
<option> Choose city</option>  
<option> Indore </option>  
<option> Pune </option>  
<option> Khargone </option>  
<option> Bhopal </option>  
<option> Mumbai </option> 
</select></form></center>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>$('select[name=drop1]').on('change', function() {
   var self = this;
   $('select[name=drop3]').find('option').prop('disabled', function() {
       return this.value == self.value
   });
});

$('select[name=drop1]').on('change', function() {
  var self = this;
  $('select[name=drop2]').find('option').prop('disabled', function() {
      return this.value == self.value
  });
});
$('select[name=drop2]').on('change', function() {
   var self = this;
   $('select[name=drop1]').find('option').prop('disabled', function() {
       return this.value == self.value
   });
});

$('select[name=drop2]').on('change', function() {
  var self = this;
  $('select[name=drop3]').find('option').prop('disabled', function() {
      return this.value == self.value
  });
});
$('select[name=drop3]').on('change', function() {
   var self = this;
   $('select[name=drop1]').find('option').prop('disabled', function() {
       return this.value == self.value
   });
});

$('select[name=drop3]').on('change', function() {
  var self = this;
  $('select[name=drop2]').find('option').prop('disabled', function() {
      return this.value == self.value
  });
});
</script>