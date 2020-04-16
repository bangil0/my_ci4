<?php 

<script>
  
x = 5;
myString = "brw02300";
if (myString.replace(/[^0-9]/g,"").length >= x) {
	alert('valid');
} else {
	alert('not valid');
}

</script>

?>

