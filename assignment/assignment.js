const form= document.getElementsByClassName('form');
const gender = document.getElementById('gender');
const female = document.getElementById('female');
const male = document.getElementById('male');
const others = document.getElementById('others');


let radio = document.querySelectorAll('input[name="gender"]');
const gender_op=document.getElementById("gender_op");
 radio.forEach(btn=>{
     console.log(btn)
     btn.addEventListener("click",function(e){
         gender_op.innerText=e.target.value
     })
 })
   
 let checkbox = document.querySelectorAll('input[type="checkbox"]');
 const education_op=document.getElementById("education_op");
  checkbox.forEach(btn=>{
      console.log(btn)
      btn.addEventListener("click",function(e){
          education_op.innerText=e.target.value
      })
  })
       
//  let text = document.querySelectorAll('input[name="name"]');
//  const name_op=document.getElementById("name_op");
     
//       name_op.addEventListener("keypress",function(e){
//           if(e.key === 'Enter'){
//             name_op.innerText=e.target.value
//           }
         
//       })

    