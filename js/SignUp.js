
function signUp(){
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

    }else{ $(document).ready(function(){
        var data = {
          FirstName: $("#_FirstName").val(),
          Lastname: $("#_LastName").val(),
          Birthday: $("#_Birthday").val(),
         Gender:$(':checked').val(),
         Email: $("#_Email").val(),
        Password: $("#_Password").val(),
        SelectType: $(":selected").val(),
        PhoneNumber:$("#_PhoneNumber").val()
        };
  
        $.ajax({
          url: 'functionSignUp.php',
          type: 'post',
          data: data,
          success:function(response){
            alert(response);
            if(response == "Login Successful"){
              window.location.reload();
            }
          }
        });
      }); 
    }}