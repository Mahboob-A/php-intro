
<?php


$name = "mahboob alam";

$h1_color = "green"; 

echo "<h1 style='color:blue'>html in php <br/>My name is: $name <br/><h1/>";

echo "<h1 style='color:skyblue'>This is another 'html in php'<h1/>";

?>

<?php

$h3_color = "purple";

// another style of using varialbe - old php style 
echo "<h3 style='color:purple'><br/> This is in another php block. name: " . $name . "<h3/>";

// echo phpinfo();

?>



<!-- when writing php inside raw html, no need the main php  block, otherwise syntax error -->
<!-- wr can use variables in raw html, but we need to use echo to print it -->
<h1 style="color: <?php echo $h1_color; ?>">
        This is  raw html h1 tag. name is: <?php echo $name; ?> 
</h1>

<h3 style="color: <?php echo $h3_color; ?>">
        This is raw html h3 tag. The name is: <?php echo $name; ?>. This is another line. <br/> This is another line in br. 
</h3>