const form= document.querySelector('.form');
const feedback= document.querySelector('.feedback');

form.addEventListener('submit',e=>{
    e.preventDefault();

    const username=form.username.value;
  
    const usernamePattern=/^[a-zA-Z]{6,12}$/;
    
    if(usernamePattern.test(username)){

        feedback.textContent='This username is valid';
    }
        else
        feedback.textContent='Username is not valid';     
    
});
const forms= document.querySelector('.forms');
const feedbacks= document.querySelector('.feedbacks');

forms.addEventListener('submit',e=>{
    e.preventDefault();

    const usernames=forms.usernames.value;
  
    const usernamePattern=/^[0-9]{10}$/;
    
    if(usernamePattern.test(usernames)){

        feedbacks.textContent='This username is valid';
    }
        else
        feedbacks.textContent='Username is not valid';     
    
});
const forms1= document.querySelector('.forms1');
const feedbacks1= document.querySelector('.feedbacks1');

forms1.addEventListener('submit',e=>{
    e.preventDefault();

    const usernames1=forms1.usernames1.value;
  
    const usernamePattern=/[a-zA-Z0-9]*/;
    
    if(usernamePattern.test(usernames1)){

        feedbacks1.textContent='This username is valid';
    }
        else
        feedbacks1.textContent='Username is not valid';     
    
});

