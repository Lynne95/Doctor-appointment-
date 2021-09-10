<?php

?>
<div class="pagetitle" >
    Schedule Appointment
</div>
<div class="calender">
    calender

</div>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker functionality</title>
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Javascript -->
<script>
$(function() {
$( "#datepick" ).datepicker();
});
</script>
</head>
<body>
<!-- HTML -->
Enter Date: <div id="datepick"></div>
</body>
</html>



<div class="schedule">
    <a href="confirmation.php "><button type="button" style="width: 20%;height:40px; background-color:darkturquoise;border-radius:8px; 
    text-align:center; margin-left:50px;">SCHEDULE</button></a>
</div>


<?php
include 'styles.html';
?>