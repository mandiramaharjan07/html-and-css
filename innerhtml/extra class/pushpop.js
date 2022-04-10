const animals=[];
const form = document.querySelector('#form');
const field = document.querySelector('#field');

const container= document.querySelector('#container');



form.addEventListener('submit',e=>{
    e.preventDefault();
    let value=field.value;
    animals.push(value);
    animals.forEach(function(value){
        if(value==1) animals.push
    })
    document.write(animals);
});
