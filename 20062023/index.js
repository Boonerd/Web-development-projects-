let number1=document.getElementById("number1");
let number2=document.getElementById("number2");
console.log(number1);
console.log(number2);
// function to get product
function getProduct(){
let ourProduct=number1.value * number2.value;
console.log(ourProduct);
//document.getElementById ("result").innerHTML
let ourResult= document.getElementById("result");
ourResult.innerHTML= "Product is " + ourProduct;
return false;
}
//get html elements by their tag name
let ourParagraphs =  document.getElementsByTagName('p');
console.log(ourParagraphs[1]);
//get html elements by class
let parClass= document.getElementsByClassName('parClass');


//change attribute of html elements using JS
function changeImage(){
    let img= document.getElementById("myImg");
    img.src="Prideandprejudice.jpg";
    return false;
}
// change the style of an element
let img= document.getElementById("myImg");
img.style.width= "200px";
img.style.borderWidth="2px";
img.style.borderStyle="solid";
img.style.borderColor="red";