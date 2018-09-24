function adjustLine(from, to, line){

var fT = from.offsetTop  + from.offsetHeight/2;
var tT = to.offsetTop 	 + to.offsetHeight/2;
var fL = from.offsetLeft + from.offsetWidth/2;
var tL = to.offsetLeft 	 + to.offsetWidth/2;

var CA   = Math.abs(tT - fT);
var CO   = Math.abs(tL - fL);
var H    = Math.sqrt(CA*CA + CO*CO);
var ANG  = 180 / Math.PI * Math.acos( CA/H );

if(tT > fT){
var top  = (tT-fT)/2 + fT;
}else{
var top  = (fT-tT)/2 + tT;
}
if(tL > fL){
var left = (tL-fL)/2 + fL;
}else{
var left = (fL-tL)/2 + tL;
}

if(( fT < tT && fL < tL) || ( tT < fT && tL < fL) || (fT > tT && fL > tL) || (tT > fT && tL > fL)){
ANG *= -1;
}
top-= H/2;

line.style["-webkit-transform"] = 'rotate('+ ANG +'deg)';
line.style["-moz-transform"] = 'rotate('+ ANG +'deg)';
line.style["-ms-transform"] = 'rotate('+ ANG +'deg)';
line.style["-o-transform"] = 'rotate('+ ANG +'deg)';
line.style["-transform"] = 'rotate('+ ANG +'deg)';
line.style.top    = top+'px';
line.style.left   = left+'px';
line.style.height = H + 'px';
}







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




