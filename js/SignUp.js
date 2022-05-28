
function store(){
    let FirstName = document.getElementById('_FirstName');
    let LastName = document.getElementById('_LastName');
    let Birthday = document.getElementById('_Birthday');
    // let Male = document.getElementById('_Male');
    // let Female = document.getElementById('_Female');
    let Gender = document.querySelector('input[name="gender"]:checked');
    let Email = document.getElementById('_Email');
    let PhoneNumber = document.getElementById('_PhoneNumber');
    let Password = document.getElementById('_Password');
    let SelectType = document.getElementById('_SelectType');

    let lowerCaseLetters = /[a-z]/g;
    let upperCaseLetters = /[A-Z]/g;
    let numbers = /[0-9]/g;

    if(FirstName.value.length == 0){
        alert('Please fill in First Name');

    }
    else if(LastName.value.length == 0){
        alert('Please fill in Last Name');

    }else if(Birthday.value.length == 0){
        alert('Please fill in your Birthday');

    }
    else if(Email.value.length == 0){
        alert('Please fill in a valid Email');

    }
    else if(PhoneNumber.value.length == 0){
        alert('Please fill in your Phone Number');

    }
    else if(PhoneNumber.value.length != 8){
        alert('Phone Number should be 8 numbers');

    }
    else if(Password.value.length == 0){
        alert('Please fill in a valid Email');

    }
    else if(Password.value.length > 8){
        alert('Max of 8');

    }else if(!Password.value.match(numbers)){
        alert('please add 1 number');

    }else if(!Password.value.match(upperCaseLetters)){
        alert('Password should contain 1 uppercase letter');

    }else if(!Password.value.match(lowerCaseLetters)){
        alert('please add 1 lovercase letter');

    }else{
        localStorage.setItem('_FirstName', FirstName.value);
        localStorage.setItem('_LastName', LastName.value);
        localStorage.setItem('_Birthday', Birthday.value);
        localStorage.setItem('Gender', Gender.value);
        localStorage.setItem('_Email', Email.value);
        localStorage.setItem('_PhoneNumber',  PhoneNumber.value);
        localStorage.setItem('_Password', Password.value);
        localStorage.setItem('SelectType', SelectType.value);
        alert('Your account has been created');
       
          
         
    
           var allEntries = [];
    allEntries.push(entry);
            // Parse any JSON previously stored in allEntries
         var existingEntries = JSON.parse(localStorage.getItem("allEntries"));
            if(existingEntries == null) existingEntries = [];
           
            var entry = {
                "fname":document.getElementById("_FirstName").value,
                "lname":document.getElementById('_LastName').value,
                "birth":document.getElementById('_Birthday').value,
                "gen":document.querySelector('input[name="gender"]:checked').value,
                "em":document.getElementById('_Email').value,
                "ph": document.getElementById('_PhoneNumber').value,
                "pw": document.getElementById('_Password').value,
                "selcted":document.getElementById('_SelectType').value,
                
            };
            localStorage.setItem("entry", JSON.stringify(entry));
            // Save allEntries back to local storage
            existingEntries.push(entry);
            localStorage.setItem('allEntries', JSON.stringify(existingEntries));

        }
} 
let user = JSON.parse(localStorage.getItem('entry'));
console.log(user.em);

// console.log(localStorage.getItem("allEntries"));
// console.log(localStorage.getItem("_FirstName"));
// console.log(localStorage.getItem("_LastName"));
// console.log(localStorage.getItem("_Birthday"));
// console.log(localStorage.getItem("Gender"));
// console.log(localStorage.getItem("_Email"));
// console.log(localStorage.getItem("_PhoneNumber"));
// console.log(localStorage.getItem("_Password"));
// console.log(localStorage.getItem("SelectType"));

// var __FOUND = -1;
// for(var i=0; i<allEntries.length; i++) {
//   if(allEntries[i].em == document.getElementById('_LoginEmail')) {
//     // __FOUND is set to the index of the element
//     __FOUND = i;
//     break;
//   }
// }

// On success __FOUND will contain the index of the element
// On failure it will contain -1  
// console.log(__FOUND); // 2

function check(){
    
  let LoginEmail = document.getElementById('_LoginEmail').value;
    let LoginPassword = document.getElementById('_LoginPassword').value; 
 let s = LoginEmail;
  let a = LoginPassword;
   
   console.log(user.em);
   console.log(user.selcted);

    //here we compare if its driver we take it to driver page if not we take it to passenger page
    if(s == 'admin' && a == 'admin'){
        window.location.href="admindriver.html";
    }
    else if(s == user.em &&  a == user.pw){
         if(user.selcted =='Driver'){
          window.location.href="Driver2.html";
        }
        else{
             window.location.href="Passenger2.html";
         }
         alert('You are logged in.');
    }else{
        alert('Error on login');
    }
}
// hon bs yfut l driver  3al edit profile bytl3lo l ma3lumet l da5ala b signUp w fi y3mela edit
function editProfileDriver(){

    document.getElementById("_InputEmail").placeholder=localStorage.getItem('_Email');
    document.getElementById("_InputFirstName").placeholder=localStorage.getItem('_FirstName');
    document.getElementById("_InputLastName").placeholder=localStorage.getItem('_LastName');
    document.getElementById("_InputPhoneNumber").placeholder=localStorage.getItem('_PhoneNumber');
    document.getElementById("_InputBirthday").placeholder=localStorage.getItem('_Birthday');
}
// hayde l function bs y8ayer shi l driver byn3amal update
function updatedProfileDriver(){

    let UpdatedEmail=document.getElementById("_InputEmail");
    let UpdatedFirstName=document.getElementById("_InputFirstName");
    let UpdatedLastName=document.getElementById("_InputLastName");
    let UpdatedPhoneNumber=document.getElementById("_InputPhoneNumber");
    let UpdatedBirthday=document.getElementById("_InputBirthday");
    if( UpdatedEmail.value!=""){ localStorage.setItem('_Email', UpdatedEmail.value)}
    if(UpdatedFirstName.value!=""){ localStorage.setItem('_FirstName', UpdatedFirstName.value)}
    if(UpdatedLastName.value!=""){localStorage.setItem('_LastName', UpdatedLastName.value)}
    if(UpdatedPhoneNumber.value!="") {localStorage.setItem('_PhoneNumber', UpdatedPhoneNumber.value)}
    if (UpdatedBirthday.value!="") { localStorage.setItem('_Birthday', UpdatedBirthday.value)}
   
 {
    console.log(localStorage.getItem("_Email"));
    console.log(localStorage.getItem("_FirstName"));
    console.log(localStorage.getItem("_LastName"));
    console.log(localStorage.getItem("_PhoneNumber"));
    console.log(localStorage.getItem("_Birthday"));}
}


function editProfilePassenger(){

    document.getElementById("_InputEmailP").placeholder=localStorage.getItem('_Email');
    document.getElementById("_InputFirstNameP").placeholder=localStorage.getItem('_FirstName');
    document.getElementById("_InputLastNameP").placeholder=localStorage.getItem('_LastName');
    document.getElementById("_InputPhoneNumberP").placeholder=localStorage.getItem('_PhoneNumber');
    document.getElementById("_InputBirthdayP").placeholder=localStorage.getItem('_Birthday');
}
// hayde l function bs y8ayer shi l driver byn3amal update
function updatedProfilePassenger(){

    let UpdatedEmailP=document.getElementById("_InputEmailP");
    let UpdatedFirstNameP=document.getElementById("_InputFirstNameP");
    let UpdatedLastNameP=document.getElementById("_InputLastNameP");
    let UpdatedPhoneNumberP=document.getElementById("_InputPhoneNumberP");
    let UpdatedBirthdayP=document.getElementById("_InputBirthdayP");
    if( UpdatedEmailP.value!=""){ localStorage.setItem('_Email', UpdatedEmailP.value)}
   if(UpdatedFirstNameP.value!=""){ localStorage.setItem('_FirstName', UpdatedFirstNameP.value)}
    if(UpdatedLastNameP.value!=""){localStorage.setItem('_LastName', UpdatedLastNameP.value)}
    if(UpdatedPhoneNumberP.value!="") {localStorage.setItem('_PhoneNumber', UpdatedPhoneNumberP.value)}
     if (UpdatedBirthdayP.value!="") { localStorage.setItem('_Birthday', UpdatedBirthdayP.value)}
   
 {
    console.log(localStorage.getItem("_Email"));
    console.log(localStorage.getItem("_FirstName"));
    console.log(localStorage.getItem("_LastName"));
    console.log(localStorage.getItem("_PhoneNumber"));
    console.log(localStorage.getItem("_Birthday"));}
 } 