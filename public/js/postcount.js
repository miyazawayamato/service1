"use strict";

function Length( str ) {
    
    const counter = document.getElementById("counter");
    
    counter.innerHTML = str.length + "文字";
    
    if(str.length > 150) {
        counter.style.color = 'red';
    } else {
        counter.style.color = 'black';
    }
}
function ShowLength( str ) {
    
    const counter = document.getElementById("inputlength");
    
    counter.innerHTML = str.length + "文字";
    
    if(str.length > 200) {
        counter.style.color = 'red';
    } else {
        counter.style.color = 'black';
    }
}


