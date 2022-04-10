const score = document.getElementById('p');
const increment = document.getElementById('increment');
const decrement = document.getElementById('decrement');
const reset = document.getElementById('reset');

let count = 0;

function inc(){
    score.style.color = 'green';
    count++;
    score.textContent = count;
}

increment.addEventListener('click', inc)

decrement.addEventListener('click',function(){
    count--;
    score.textContent = count;
})


reset.addEventListener('click',function(){
    count =0;
    score.textContent = count;
})