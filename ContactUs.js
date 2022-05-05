function ContactUs(){
let ContactName=document.getElementById("_ContactName");
let ContactEmail=document.getElementById("_ContactEmail");
let ContactSubject=document.getElementById("_ContactSubject");
let ContactMessage=document.getElementById("_ContactMessage");

if(ContactName.value.length == 0){
    alert('Please fill in your Name');

}
else if(ContactEmail.value.length == 0){
    alert('Please fill in your Email');

}else if(ContactSubject.value.length == 0){
    alert('Please fill in your Subject');

}
else if(ContactMessage.value.length == 0){
    alert('Please fill in the Message');
}

else{
    localStorage.setItem('_ContactName', ContactName.value);
    localStorage.setItem('_ContactEmail', ContactEmail.value);
    localStorage.setItem('_ContactSubject', ContactSubject.value);
    localStorage.setItem('_ContactMessage', ContactMessage.value);
    
    alert('Your message has been sent');
}
console.log(localStorage.getItem("_ContactName"));
console.log(localStorage.getItem("_ContactEmail"));
console.log(localStorage.getItem("_ContactSubject"));
console.log(localStorage.getItem("_ContactMessage"));


}

