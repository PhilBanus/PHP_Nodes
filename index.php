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
    <button onClick="fastForward()">>></button>
    
    
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
      
    
    
    
    <script>
        
 
         
        $('.count').hide();
  
        
        
        
         var clicked = false;
        var stoped = false; 
   

    function nodeClick(x)
   {
       
       if($(".secondSelect").length){ } else{
       
      if(clicked)
     {
       
           x.classList.add("secondSelect");
        var secondSelect = $(x).index(".node");
        var firstSelect = $(".firstSelect").index(".node");
        var timeout = 1000;
         
         $('.node').addClass('fade');
         $('.firstSelect').removeClass('fade');
         $('.secondSelect').removeClass('fade');
         
         
         
         
          
                    setTimeout(function(){
 runCalculations(firstSelect, secondSelect,timeout);
}, timeout);
       

     }
    else
    {
        
         x.classList.add("firstSelect");
       
       
      

    }
   clicked = !clicked;
           
       }
}
                     
     
        function fastForward() {
            $('#count').text("0");
            stoped = !stoped;
        var secondSelect = $(".secondSelect").index(".node");
        var firstSelect = $(".firstSelect").index(".node");
            var timeout = 0; 
            

                   
 FASTrunCalculations(firstSelect, secondSelect,timeout);

      
            
        }
        
        
        
        
        
        
        
        
   
        function runCalculations(first, second,timeout){
            
             if(stoped){}else{
            if(first > second){ 
                         
                $('.count').show()  
                
                
                 showBackwardPath(first,second,timeout);
                
            }else{
                
                
                showForwardPath(first,second,timeout);
                
                                
                
                
            }
                 
             }
            
            

            
        }
    
        
        
        
        function showForwardPath(first,second, timeout){
                         if(stoped){}else{

            if(first < second){
                
             $('.count').show()  
                
            $(".line:eq("+first+")").addClass("highlightLine");
            first++
            
            
            
                
            
                
                    setTimeout(function(){
highlightNodeForward(first,second, timeout)
}, timeout);
            }else{ 
            
                $('.count').addClass("frontAndCenter");
            
            }
            
        }
            
        }
        
        
        
        
        
        
        
         function showBackwardPath(first,second, timeout){
                         if(stoped){}else{

            if(first > second){
            first--;
            $(".line:eq("+first+")").addClass("highlightLine")

            
            
                
                
                setTimeout(function(){
 highlightNodeBack(first,second, timeout)
}, timeout);
            }else{ 
            
                $('.count').addClass("frontAndCenter");
            
            }
            
        }
             
         }
        
        
        
        
        function highlightNodeBack(first,second, timeout){
            
            
                         if(stoped){}else{

  if(first === $('.secondSelect').index(".node") ){}else{
            $(".node:eq("+first+")").addClass("highlightNode"); }
            
            var counter = parseFloat($('#count').html());
            counter++
            
            $('#count').text(counter);
                
            
                
                    setTimeout(function(){
showBackwardPath(first,second, timeout)
}, timeout);
            }
        }
        
        
        
         
        function highlightNodeForward(first,second, timeout){
                         if(stoped){}else{

            if(first === $('.secondSelect').index(".node") ){}else{
            $(".node:eq("+first+")").addClass("highlightNode"); }
            
            var counter = parseFloat($('#count').html());
            counter++
            
            $('#count').text(counter);
                
            
                
                    setTimeout(function(){
showForwardPath(first,second, timeout)
}, timeout);
            }
        }
            
            
    
        
        
        
        
         function FASTrunCalculations(first, second,timeout){
            
            
            if(first > second){ 
                         
                $('.count').show()  
                
                
                 FASTshowBackwardPath(first,second,timeout);
                
            }else{
                
                
                FASTshowForwardPath(first,second,timeout);
                
                                
                
                
            }
            
            

            
        }
    
        
        
        
        function FASTshowForwardPath(first,second, timeout){
            
            if(first < second){
                
             $('.count').show()  
                
            $(".line:eq("+first+")").addClass("highlightLine");
            first++
            
            
            
                
            
                
FASThighlightNodeForward(first,second, timeout)

            }else{ 
            
                $('.count').addClass("frontAndCenter");
            
            }
            
        }
        
        
        
        
        
        
        
         function FASTshowBackwardPath(first,second, timeout){
            
            if(first > second){
            first--;
            $(".line:eq("+first+")").addClass("highlightLine")

            
            
                
                
               
 FASThighlightNodeBack(first,second, timeout)

            }else{ 
            
                $('.count').addClass("frontAndCenter");
            
            }
            
        }
        
        
        
        
        function FASThighlightNodeBack(first,second, timeout){
            
            
            
  if(first === $('.secondSelect').index(".node") ){}else{
            $(".node:eq("+first+")").addClass("highlightNode"); }
            
            var counter = parseFloat($('#count').html());
            counter++
            
            $('#count').text(counter);
                
            
                
FASTshowBackwardPath(first,second, timeout)

            }
        
        
        
         
        function FASThighlightNodeForward(first,second, timeout){
            
            if(first === $('.secondSelect').index(".node") ){}else{
            $(".node:eq("+first+")").addClass("highlightNode"); }
            
            var counter = parseFloat($('#count').html());
            counter++
            
            $('#count').text(counter);
                
            
                
FASTshowForwardPath(first,second, timeout)
            }
            
            
        
        
    
    </script>
    
   
	
    
</body>
</html>