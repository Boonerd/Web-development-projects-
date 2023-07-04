// form validation
function validation(){
	let firstName = document.getElementById('firstname').value;
	let lastName = document.getElementById('lastname').value;
	let email = document.getElementById('useremail').value;
	let password = document.getElementById('userpassword').value;
	if (firstname == "" || lastname == "" || email == "" password == "" ) {alert("Field should not be blank") }
}
else if(firstname.match(/^[A-Za-z]+$/)) {
    document.getElementById('result1').innerHTML
    "First Name should have alpphabetic characters "
    return false;
}
else if (password.length < 8){
    document.getElementById("result2").innerHTML
    "Password should have at least 8 characters only"
    return false;
}else{
    alert("success");
}

	