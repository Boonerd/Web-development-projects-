function findSum(){
	let number1 = 12;
	let number2 = 14;
	return number1 + number2;
}
let newSum =findSum();
console.log(newSum);

function getProduct(num1,num2){
	return num1*num2;
}

let myProduct;
myProduct=getProduct(5,4);
console.log("Product value is " + myProduct);

let age=18;
if(age<17){
	console.log("Too Young");
}
else if(age==18){
	console.log("Perfect");
}
else{
	console.log("Too old");
}
 for(let i=1;i<6;i++){
 	console.log("This is sentence ",i);
 }

 // get html elements
 //using an element's id
let number1 = document.getElementByid("number1");
//using a class
letourNumbers= 
document.getElementsByClassName("numbers");
//using a tag in html
let ourPars=
document.get.getElementByTagName('p');