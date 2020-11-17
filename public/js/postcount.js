"use strict";

function Length( str ) {
    
    const counter = document.getElementById("counter");
    
    counter.innerHTML = str.length + "文字";
    
    if(str.length > 500) {
        counter.style.color = 'red';
    } else {
        counter.style.color = 'black';
    }
}
function ShowLength( str ) {
    
    const counter = document.getElementById("inputlength");
    
    counter.innerHTML = str.length + "文字";
    
    if(str.length > 1500) {
        counter.style.color = 'red';
    } else {
        counter.style.color = 'black';
    }
}


