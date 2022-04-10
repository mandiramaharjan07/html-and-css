const form= document.getElementById('form');
const field=document.getElementById('field');
const list=document.querySelector("#list");

form.addEventListener('submit',function(e){
    e.preventDefault();
    const val=field.value.trim();
    if(val.length){
        createItem(val);
    }
})
function createItem(item){
    let html=`<li class="list-item">${item}
    <button class="btn delete"> Delete </button>
    </li>`;
    list.insertAdjacentHTML('beforeend',html);
    field.value='';
    field.focus();
}
list.addEventListener('click',function(e){
    if(e.target.classList.contains('delete')){
        e.target.parentElement.remove();
    }
})