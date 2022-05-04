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
    }
}
console.log(localStorage.getItem("_FirstName"));
console.log(localStorage.getItem("_LastName"));
console.log(localStorage.getItem("_Birthday"));
console.log(localStorage.getItem("Gender"));
console.log(localStorage.getItem("_Email"));
console.log(localStorage.getItem("_PhoneNumber"));
console.log(localStorage.getItem("_Password"));
console.log(localStorage.getItem("SelectType"));


function check(){
    let storedEmail = localStorage.getItem('_Email');
    let storedPassword = localStorage.getItem('_Password'); 

   let LoginEmail = document.getElementById('_LoginEmail');
   let LoginPassword = document.getElementById('_LoginPassword'); 
    //here we compare if its driver we take it to driver page if not we take it to passenger page
    if(LoginEmail.value == storedEmail && LoginPassword.value == storedPassword){
        if(localStorage.getItem("SelectType") == 'Driver'){
            window.location.replace("Driver2.html");
        }
        else{
            window.location.replace("Passenger2.html");
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
   else if(UpdatedFirstName.value!=""){ localStorage.setItem('_FirstName', UpdatedFirstName.value)}
   else if(UpdatedLastName.value!=""){localStorage.setItem('_LastName', UpdatedLastName.value)}
   else if(UpdatedPhoneNumber.value!="") {localStorage.setItem('_PhoneNumber', UpdatedPhoneNumber.value)}
    else if (UpdatedBirthday.value!="") { localStorage.setItem('_Birthday', UpdatedBirthday.value)}
   
 {
    console.log(localStorage.getItem("_Email"));
    console.log(localStorage.getItem("_FirstName"));
    console.log(localStorage.getItem("_LastName"));
    console.log(localStorage.getItem("_PhoneNumber"));
    console.log(localStorage.getItem("_Birthday"));}
}
