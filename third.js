//onLoad event Handler
function loader(){
    alert("alert by onLoad : Welcome!!!");
}

//onUnload Event Handler
function unloader(){
    alert("alert by onUnload : Good bye !");
}

//onAbort Event Handler
function abortimg(){
    alert("alert by onAbort : Error Loading Image.");
}

//onError Event Handler
function errorimg(){
    alert("alert by onError : Error loading Image.");
}

//onBlur Event Handler
function blurip(){
    var ele=document.getElementById('ip1');
    ele.style.backgroundColor="white";
    var t = document.getElementById('ip1').value;
    var str = "confirm by onBlur : The entered text is : "+t + ". Do you want to keep it?";
    var x = confirm(str);
    if(!x)
    {
        document.getElementById('ip1').value="";
    }
}

//onFocus Event Handler
function focusip(){
    var ele=document.getElementById('ip1');
    ele.style.backgroundColor="lightgrey";
    console.log("alert by onFocus : the background color of the text field changes");
}

//onChange Event Handler
function changeip(){
    var p = document.getElementById('para');
    var ele = document.getElementById('ipf1');
    p.innerHTML = "By onChange : Entered value is : "+ele.value;
}

//onClick Event Handler
function clickbtn(){
    alert("alert by onClick : You clicked the button");
}

//onSelect Event Handler
function selectip(){
    alert("alert by onSelect : You selected some text");
}

//onMouseOver Event Handler
function mouseoverdiv(){
    var elep = document.getElementById('para1');
    elep.innerHTML='Get this mouse out of the house';
}

//onMouseOut Event Handler
function mouseoutdiv(){
    var elep = document.getElementById('para1');
    elep.innerHTML="It's gone. It's done. It's over.";
}

//onSubmit Event Handler
function submitform(){
    alert('alert by onSubmit : Your Request will be processed. Thank You.');
}
