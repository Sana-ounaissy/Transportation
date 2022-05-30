// let lowerCaseLetters = /[a-z]/g;
// let upperCaseLetters = /[A-Z]/g;
// let numbers = /[0-9]/g;
// let PhoneNumber=$('#_PhoneNumber').val();
// let Password=$('#_Password').val();



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
   
}
