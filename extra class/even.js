const icon = document.querySelector('.icon');
icon.addEventListener("click" ,function(e){


var i;
for(i=1;i<=20; i++){
if(i%2==0){
    document.write(i +"<br/>");
}
}
});
const icons = document.querySelector('.icons');
icons.addEventListener("click" ,function(e){


var i;
for(i=1;i<=20; i++){
if(i%2==1){
    document.write(i +"<br/>");
}
}
});