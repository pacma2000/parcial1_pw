<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>punto 1 fibonacci</title>
</head>
<body>
    <form action="#" method="POST">
    <center>
        <h1>INGRESE EL VALOR DE LA MATRIZ: </h1><br>
         <input type="text" name="p1" id="p1" >
     <input type="submit" name="submit"id="submit"  value="validar" >
      </center>
    
      </form>
      <br><br>
      <center>
          
          
           <?php
      if(isset($_POST['submit'])) {
          
      $n = $_POST['p1'];
    
   
      
          
       $f1 = 0;
       $f2 = 1;
       $f=1;
       for ($i = 1; $i <= $n; $i++) {
           for($j=1;$j<=$n;$j++){
               $matriz[$i][$j]=$f;
               $f = $f1 + $f2;
               $f1 = $f2;
                $f2 = $f;
            
           }
        
       }
        echo "serie Fibonacci de la matriz  $n x $n es:<br />";
       for ($i = 1; $i <= $n; $i++) {
           for($j=1;$j<=$n;$j++){
               echo "  ".$matriz[$i][$j];
               
           }

           echo"<br>";
       }
       
     }
  
       
       
       
   



  ?>
      </center>
     
    
    
      
    
    
</body>
</html>