<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>punto3</title>
</head>
<body>
    <center>
        
        <form action="">
            
            <h1>matriz elevada a 3</h1>
            
            <input type="text" name="fila" id="fila" placeholder="ingrese el valor matriz">
         
            
            <input type="submit" name="submit" id="submit">
            
            
        </form>
        
       
        
       <?php
        
      
    
          if(isset($_POST['submit'])) {
              
              $f=$_POST['fila'];
             
              $matriz[$f][$f];
             
              
             for($i=1;$i<$f;$i++){
                 for($j=1;$j<$f;$j++){
                     
                     
                     $temp=0;
                  for($x=1;$x<$f;$x++){
                      
                      $matriz[$i][$j]=rand()%256;
                      $temp+=$matriz[$i][$x]*$matriz[$x][$i];
                      $r[$i][$x]=$temp;
                      
                  }
              }
             } 
              
              for($i=1;$i<$f;$i++){
                     
                  for($j=1;$j<$f;$j++){
                      
                      echo "".$matriz[$i][$j];
              
                  }
              }
              
              
          }
       
        
        ?>
            
    
       
    </center>
    
</body>
</html>