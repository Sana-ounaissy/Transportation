// let lowerCaseLetters = /[a-z]/g;
// let upperCaseLetters = /[A-Z]/g;
// let numbers = /[0-9]/g;
// let PhoneNumber=$('#_PhoneNumber').val();
// let Password=$('#_Password').val();
function validation(){
let FirstName = document.getElementById('_FirstName');
let LastName = document.getElementById('_LastName');
let Birthday = document.getElementById('_Birthday');
// let Male = document.getElementById('_Male');
// let Female = document.getElementById('_Female');
let Gender = document.querySelector('input[name="gender"]:checked');
let Email = document.getElementById('_Email');
let PhoneNumber = document.getElementById('_PhoneNumber');
let Password = document.getElementById('_Password');
let SelectType = document.getElementById('_SelectType').value;

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
    alert('please add 1 lovercase letter');}
    else{
        document.getElementById("msg").innerHTML=SelectType + "  "+"added successfully" ;}
    }
        function insertUser(){
    let _FirstNameAdd = $('#_FirstName').val();
    let _LastNameAdd = $('#_LastName').val();
    let _BirthdayAdd =$('#_Birthday').val();
    let _GenderAdd = $('.Gender').val();
    let _EmailAdd = $('#_Email').val();
    let _PhoneNumberAdd = $('#_PhoneNumber').val();
    let _PasswordAdd =$('#_Password').val();
    let _SelectTypeAdd = $('#_SelectType').val();
 
    $.ajax({
        url:"insertUser.php",
        type:'post',
        data: {
            _FirstNameSend: _FirstNameAdd,
            _LastNameSend:_LastNameAdd,
            _BirthdaySend:_BirthdayAdd,
            _GenderSend:_GenderAdd,
            _EmailSend:_EmailAdd,
            _PhoneNumberSend:_PhoneNumberAdd,
            _PasswordSend:_PasswordAdd,
            _SelectTypeSend:_SelectTypeAdd
        },
        success:function(data,status){           
            console.log(status);
          
        
        }
         
    });
   validation();
}
    