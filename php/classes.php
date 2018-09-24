<?php 



$nodeNumber = $_GET['nodes'] ?? 20;

$number = 1; 

$nodeType = array("male", "female");

class node {
    
    public $number;
    public $left; 
    public $top;
    public $gender;
}
    

for ($x = 1; $x <= $nodeNumber; $x++) {
   
            
            $node[$number] = new node(); 
            $node[$number]->number = $number;
            $node[$number]->left = rand(1,100);
            $node[$number]->top = rand(1,100);
            $node[$number]->gender = $nodeType[array_rand($nodeType)];
        
            $number++;
    
            
} 


    
        
        ?>
        