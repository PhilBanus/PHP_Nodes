<?php 

include "php/classes.php";



?>

<!doctype html>

<html>
<head>
  <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
 
    
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
 
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    
    <script type="text/javascript" src="js/connectors.js"></script>

    
</head>

<body>
    
    <div class="count"><span id="count">0</span> Connection(s)</div>
    <button onClick="fastForward()">Fast Forward >></button>
    
    
    <div class="container">
    
    
    

        
      
        
        <?php 
    
    $count = count($node);
        
        foreach($node as $object) {
            
            if(--$count <= 0){
                
                echo '<div id="div['.$object->number.']" class="node '.$object->gender.'" onClick="nodeClick(this)" style="left: '.$object->left.'%; top: '.$object->top.'%" ></div>';
                
            }else{
                
                echo '<div id="div['.$object->number.']" class="node '.$object->gender.'" onClick="nodeClick(this)" style="left: '.$object->left.'%; top: '.$object->top.'%" ></div><br>';
            echo '<div class="line" id="connector['.$object->number.']"></div><br>';    
                
                ?> 

    
    
    <?php 
            
                
            }
            
            
          
}
        
        ?>
        
 
  
        
        </div>


    
    <?php 
     $countnodes = count($node);
      $start = 1;
    for ($y = 0; $y <= $countnodes; $y++) {
        
      
        
        ?>
    <script>
    
    
adjustLine(
  document.getElementById('div[<?php echo $start ?>]'), 
  document.getElementById('div[<?php echo $start+1 ?>]'),
  document.getElementById('connector[<?php echo $start ?>]')
);

    
    </script>

    
    <?php 
            
    $start++;
    
    } ?>
      
    
    
    
    
   
	
    
</body>
</html>