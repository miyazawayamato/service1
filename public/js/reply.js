"use strict";


const reply = document.querySelectorAll('.reply');
const names = document.querySelectorAll('.name');

for(let i = 0; i < reply.length; i++){
    reply[i].addEventListener('click',function(){
        const name = names[i].innerHTML;
        const respon = document.getElementById('area');
        respon.textContent = ">>" + name + "\n";
        
        const stan = document.getElementById('stan');
        stan.scrollIntoView({behavior: "smooth"});
    });
}

