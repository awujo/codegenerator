<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
		    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <style>
            /* Created by Farhan[Hibernating] */

.bod {
    margin:0;
    height:100vh;
    width:100vw;
}
.div{
    position:absolute;
    top:50%;
    left:50%;
    width:80vw;
    transform:translate(-50% , -50%);
    box-shadow:2px 2px 5px #efefef;
}
h2{
    width:100%;
    color:#fff;
    background-color:green;
}
input[type='text']{
    width:90%;
    margin-bottom:2vh;
    outline:none;
    border:none;
    border-bottom:1px solid rgba(0,225,0,0.5);
}
select{
    background:#fff;
    color:rgba(0,225,0,0.5);
    border:2px solid rgba(0,225,0,0.5);
    margin-left:1vw;
    outline:none;
}
p{
    border-bottom:1px solid #000;
}
input{
    background:#fff;
    color:rgba(0,225,0,0.5);
    border:2px solid rgba(0,225,0,0.5);
    outline:none;
    margin-top:1vh;
}
button{
    background-color:green;
    color:#fff;
    border:2px solid rgba(0,120,190,0.5);
    outline:none;
    margin-top:1vh;
}
.lo{text-align:center;
  margin-buttom: 20px;  
}
.btn btn-custom {
    background-color:green;
    color:#fff;
    border:2px solid rgba(0,120,190,0.5);
    outline:none;
    margin-top:1vh;
}
        </style>
    </head>
    <body><div class="lo">
	<img src="https://i.ibb.co/b7wZJbR/how-bruteforce-works.jpg" height="150px" width="260px" alt="how-bruteforce-works" border=""><div class="bod">
        <div class="div" align="center">
		<p style="color:green;"><b>How our Bruteforce attack works</b></p>
            <h2>Hack attack key generator</h2>
			<img src="https://www.freepnglogos.com/uploads/hacker-png/hacker-png-png-foto-24.png" width="200" alt="hacker png png foto" />
            <input type="text" placeholder="Name" required><br>
            <input type="text" placeholder="Surname" required><br>
            Gender:<select>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select><br>
            Date of birth:<input type="date" required><br>
            <button id="submit">Generate key</button>
            <h4>Copy your Hack attack id key for this session. You will need it later.</h4>
            <p id="output"></p><a href="https://hackattackmainvictimdata.herokuapp.com/"><button type="button" class="btn btn-custom"><p style="color:green";>SUBMIT KEY</p></button></a>
			<div></div>
        </div></div>
        <script>
            // Created by Farhan[Hibernating]

onload=()=>{
var consonant=['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'];
var vowel=['A','E','I','O','U'];
//var months=['January','February','March','April','May','June','July','August','September','October','November','December'];
var letters=['A','B','C','D','E','H','L','M','P','R','S','T'];




var submit=document.getElementById("submit");
var input=document.getElementsByTagName("input");
var name_split;
var name="";
var sur_split;
var surname="";
var date_split;
var sel=document.getElementsByTagName("select")[0];
var output=document.getElementById("output");
var code="";
var year;
var month;
var date;


submit.onclick=()=>{
    name="";
    surname="";
    code="";
    if(input[0].value!=""){
        if(input[1].value!=""){
            if(input[2].value!=""){
                
                
                
                
                
                name_split=input[0].value.toUpperCase().split("");
                sur_split=input[1].value.toUpperCase().split("");
                date_split=input[2].value.split("-");
                year=date_split[0];
                month=date_split[1];
                date=date_split[2];
                
               
        
            sur_split.forEach(i=>{
                consonant.forEach(j=>{
                    if(i.includes(j)){
                        surname+=i;
                    }
                });
            });
            if(surname.length<3){
                sur_split.forEach(i=>{
                vowel.forEach(j=>{
                    if(i==j){
                        surname+=i;
                    }
                });
            });
            }
            if(surname.length<3){
                surname+="X"
            }
        
            
            name_split.forEach(i=>{
                consonant.forEach(j=>{
                    if(i.includes(j)){
                        name+=i;
                    }
                });
            });
            if(name.length<3){
                name_split.forEach(i=>{
                vowel.forEach(j=>{
                    if(i==j){
                        name+=i;
                    }
                });
            });
            }
            if(name.length<3){
                name+="X"
            }
            if(sel.options[sel.selectedIndex].value=="F"){
                date=Number(date)+40;
            }
        
                            
                
         output.innerText=surname.slice(0,3)+name.slice(0,3)+year.slice(2,4)+letters[month-1]+date;
         
         
                
            }
            else{
                alert("Please fill out date of birth");
            }
        }
        else{
            alert("Please fill out the surname");
        }
    }
    else{
        alert("Please fill out the name");
    }
}
}
        </script>       
    </body>
</html>
