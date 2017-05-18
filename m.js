function valName(){
var text ;
var war;
war = "Invalid Name";
var patt = /[0-9]/
text = document.forms["form"]["nm"].value;
if(text==""||patt.test(text)==true){
document.getElementById("name").innerHTML = war;}
//document.getElementById("nn").innerHTML = text;}
}
function valEmail(){
var war;
war = "Invalid Email Address";
    var x = document.forms["form"]["em"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("email").innerHTML = war;
        
    }
	else
		document.getElementById("email").innerHTML = "*";
}

function valMes(){
	var text ;
	var war;
war = "Write Something";
text = document.forms["form"]["mes"].value;
if(text==""){
document.getElementById("message").innerHTML = war;}
}