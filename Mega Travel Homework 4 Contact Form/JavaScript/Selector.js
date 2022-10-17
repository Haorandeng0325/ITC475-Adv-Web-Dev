function select_event(value) {
    document.getElementById("ydl1").style.display = "none";
    document.getElementById("xxl1").style.display = "none";
    document.getElementById("medf1").style.display = "none";
    document.getElementById("mxg1").style.display="none";
    if (value === "ydlselect") {
        document.getElementById("ydl1").style.display = "";
    } else if (value === "xxlselect") {
        document.getElementById("xxl1").style.display = "";
    }   else if (value === "medfselect") {
        document.getElementById("medf1").style.display = "";
    }   else if( value==="mxgselect") {
        document.getElementById("mxg1").style.display="";
    }

}

// 获取元素
let submit =document.querySelector('.submitbtn')
let reset=document.querySelector('.resetbtn')
let lname=document.querySelector('.lname')
let phone=document.querySelector('.phone')
let fname=document.querySelector('.fname')
let email=document.querySelector('.email')
let num=document.querySelector('.num')
let date=document.querySelector('.date')
//firstname:
submit.addEventListener('click',function(){
    if(lname.value.trim()===''){
        lname.value===''
       
        return alert('Please do not submit the form without first name.')
      }
      
})
//lastname:
submit.addEventListener('click',function(){
   if(fname.value.trim()===''){
       fname.value===''
       return alert('Please do not submit the form without last name.')
     }
     
})
//phone:
submit.addEventListener('click',function(){
   if(phone.value.trim()===''){
       phone.value===''
       return alert('Please do not submit the form without phone number.')
     }
})
//date:
submit.addEventListener('click',function(){
   if(date.value.trim()===''){
       date.value===''
       return alert('Please do not submit the form without travel date.')
     }
})
//email:
submit.addEventListener('click',function(){
   if(email.value.trim()===''){
       email.value===''
       return alert('Please do not submit the form without email address.')
     }
})
//number of people:
submit.addEventListener('click',function(){
   if(num.value.trim()===''){
       num.value===''
       return alert('Please do not submit the form without number of tourists.')
     }
})
// resetbutton 
reset.addEventListener('click',function(){
    document.getElementById("ydl1").style.display = "block";
    document.getElementById("xxl1").style.display = "none";
    document.getElementById("medf1").style.display = "none";
    document.getElementById("mxg1").style.display="none";
})


//test: 
// let inputs=document.querySelectorAll('.in')
// for(let i=0;i<inputs.length;i++){
// submit.addEventListener('click',function(){
    
// if(inputs[i].value.trim()===''){
//     inputs[i]===''
//     return alert('Please do not submit the form with blanks.')

// }
// })}