const value=document.querySelector("#value");
const btns=document.querySelectorAll(".btn");
let count=0;
btns.forEach(function(bt){
    bt.addEventListener('click', function(e){
        const styles = e.currentTarget.classList;
        if(styles.contains("decrease")){
            count--;
        }
        else if(styles.contains("increase")){
            count++;
        }
        else{
            count=0;
        }
        value.textContent=count;
    });
});