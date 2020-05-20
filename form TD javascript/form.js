function validation(){
	ch=document.getElementById("debdialog");
	x1=document.getElementById("participant").checked;
	x2=document.getElementById("paper").checked;
	x3=document.getElementById("tuto1").checked;
	x4=document.getElementById("tuto2").checked;
	fname=document.getElementById("fname").value;
	lname=document.getElementById("lname").value;
	company=document.getElementById("company").value;
	uplo=document.getElementById("uplo").value;
	city=document.getElementById("city").value;
	code=document.getElementById("code").value;
	email=document.getElementById("email").value;
	office=document.getElementById("office").value;
	if (fname==""){
		document.getElementById("champ").innerHTML = "first name" ;
		ch.showModal();
		return 0;}
	if (lname==""){
		document.getElementById("champ").innerHTML = "last name " ;
		ch.showModal();
		return 0;}
	if (company==""){
		document.getElementById("champ").innerHTML = "company name " ;
		ch.showModal();
		return 0;}
	if (x1==false && x2==false){
		document.getElementById("champ").innerHTML = "participant/paper presenter" ;
		ch.showModal();
		return 0;}
	if (uplo==""){
		document.getElementById("champ").innerHTML = " CV " ;
		ch.showModal();
		return 0;}
	if (city==""){
		document.getElementById("champ").innerHTML = " city " ;
		ch.showModal();
		return 0;}
	if (code==""){
		document.getElementById("champ").innerHTML = " code " ;
		ch.showModal();
		return 0;}
	if (email==""){
		document.getElementById("champ").innerHTML = " email " ;
		ch.showModal();
		return 0;}
	if (office==""){
		document.getElementById("champ").innerHTML = " office " ;
		ch.showModal();
		return 0;}
	if (x3==false && x4==false){
		document.getElementById("champ").innerHTML = "tutorial select" ;
		ch.showModal();
		return 0;}
	f1();
}
function f1(){ 
	ch=document.getElementById("findialog");
	x=document.getElementById("conf1").checked;
	if (x==true){
		bi="AI-Advance Registration";
		x1=parseInt(document.getElementById("conf1").value);}
	else{x1=0;}

	x=document.getElementById("conf2").checked;
	if (x==true){
		bi=="AO-Advance Registration";
		x2=parseInt(document.getElementById("conf2").value);}
	else{x2=0;}

	x=document.getElementById("conf3").checked;
	if (x==true){
		bi=="LI-Late Registration";
		x3=parseInt(document.getElementById("conf3").value);}
	else{x3=0;}

	x=document.getElementById("conf4").checked;
	if (x==true){
		bi=="LO-Late Registration";
		x4=parseInt(document.getElementById("conf4").value);}
	else{x4=0;}
	/*------------------------------*/
	x=document.getElementById("conf5").checked;
	if (x==true){
		bi2="EN-Extra copy of tutorial notes";
		x5=parseInt(document.getElementById("conf5").value);}
	else{x5=0;}

	x=document.getElementById("conf6").checked;
	if (x==true){
		bi2="EC-Extra copy of conference proceeding And or CDROM";
		x6=parseInt(document.getElementById("conf6").value);}
	else{x6=0;}

	x=document.getElementById("conf7").checked;
	if (x==true){
		bi2="ED-Accompanying guest to banquet dinner";
		x7=parseInt(document.getElementById("conf7").value);}
	else{x7=0;}

	x=document.getElementById("conf8").checked;
	if (x==true){
		bi2="FE-Administration Fee";
		x8=parseInt(document.getElementById("conf8").value);}
	else{x8=0;}
	s1=x1+x2+x3+x4;
	s2=x5+x6+x7+x8;
	s=x1+x2+x3+x4+x5+x6+x7+x8;
	document.getElementById("fee").innerHTML =  s ;
	document.getElementById("fee1").innerHTML=bi+ "=" + s1;
	document.getElementById("fee2").innerHTML=bi2+ "=" +s2;

	ch.showModal();
}

