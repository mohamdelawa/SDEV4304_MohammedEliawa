<?php 
   $course = "Advanced software engineering SDEV4304";
   $name = "Mohammed Rafat eliawa ";
   $project_name = "Startup Application";
   $color = "rgb(197, 238, 49)";
   $background_color = "black"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Startup Application</title>
    </head>
    <body>
        <center>
           <div style="width:450px; background-color: <?php echo  $background_color; ?>; color: <?php echo $color; ?> ">
               <br />   
               <h2>Hellow </h2>
               <h3>Project Name : <?php echo $project_name; ?></h3>
               <h3>Course : <?php echo $course; ?>  </h3>
               <h3>Name :  <?php echo $name;?>  </h3>
             
               <br />
           </div>
        </center>
    </body>
</html>
