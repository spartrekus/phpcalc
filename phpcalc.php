<!DOCTYPE HTML>  
<html>
<head>
 <title> phpcalc PHP</title>
 <link rel="shortcut icon" href="favicon.ico" />
 <link href="styles.css" rel="stylesheet" />
 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<br>
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="quval" rows="1" cols="55"><?php echo $quval;?></textarea>
  <br>
  <br> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="submit" name="submit" value="submit">  
  <br> 
  <br>
 <br>
</form>



<?php
   //echo "Hello, ";
   //system(" linecalc \" cos( 12 ) * 3 \"   ");
   //echo "world!\n";
   if(isset($_POST['submit']))
   { 
          $input = $_POST['quval']; //get input text
          echo "|IM Sent!| You entered: " .$input . "<br>" ;
          echo '<br><br>' ;
          echo "|LINECALC (GNU) (L)|: ";
          system(  " linecalc " . "\""   . $input . "\" " );
          echo '<br><br>' ;
   }
?>



<br/><br/>
</body>
</html>



