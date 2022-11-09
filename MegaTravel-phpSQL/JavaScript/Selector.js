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

// submit.addEventListener('click',function(){
//     if(lname.value.trim()===''){
        
//         alert('Please do not submit the form without first name.')
        
//       }
      
//     else if(fname.value.trim()===''){
      
//          alert('Please do not submit the form without last name.')
       
//       }
    
//     else if(phone.value.trim()===''){
      
//          alert('Please do not submit the form without phone number.')
       
//       }
    
//     else if(date.value.trim()===''){
        
//         alert('Please do not submit the form without travel date.')
       
//       }

//     else if(email.value.trim()===''){
      
//          alert('Please do not submit the form without email address.')
        
//       }

//     else if(num.value.trim()===''){
      
//          alert('Please do not submit the form without number of tourists.')
        
//       }
// })
// resetbutton 
reset.addEventListener('click',function(){
    document.getElementById("ydl1").style.display = "block";
    document.getElementById("xxl1").style.display = "none";
    document.getElementById("medf1").style.display = "none";
    document.getElementById("mxg1").style.display="none";
})


