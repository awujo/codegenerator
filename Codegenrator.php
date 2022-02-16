<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <style>
            /* Created by Farhan[Hibernating] */

body {
    margin:0;
    height:100vh;
    width:100vw;
}
div{
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
    background:rgba(0,120,190,0.5);
}
input[type='text']{
    width:90%;
    margin-bottom:2vh;
    outline:none;
    border:none;
    border-bottom:1px solid rgba(0,120,190,0.5);
}
select{
    background:#fff;
    color:rgba(0,120,190,0.5);
    border:2px solid rgba(0,120,190,0.5);
    margin-left:1vw;
    outline:none;
}
p{
    border-bottom:1px solid #000;
}
input{
    background:#fff;
    color:rgba(0,120,190,0.5);
    border:2px solid rgba(0,120,190,0.5);
    outline:none;
    margin-top:1vh;
}
button{
    background:rgba(0,120,190,0.5);
    color:#fff;
    border:2px solid rgba(0,120,190,0.5);
    outline:none;
    margin-top:1vh;
}
        </style>
    </head>
    <body>
        <div align="center">
            <h2>Fiscal code generator</h2>
            <input type="text" placeholder="Name"><br>
            <input type="text" placeholder="Surname"><br>
            Gender:<select>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select><br>
            Date of birth:<input type="date"><br>
            <button id="submit">Submit</button>
            <h4>Your Fiscal code</h4>
            <p id="output"></p>
        </div> 
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