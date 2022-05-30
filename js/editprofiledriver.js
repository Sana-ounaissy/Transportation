function editProfileDriver(updateid){

    $.post("getDriverDetails.php",
    {updateid:updateid},
    function(data,status){
        let userid=JSON.parse(data);
        console.log(data);
        $('#_InputEmail').val(userid.Email);
        $('#_InputFirstName').val(userid.Firstname);
        $('#_InputLastName').val(userid.Lastname);
        $('#_InputPhoneNumber').val(userid.Phonenb);
        $('#_InputBirthday').val(userid.Dateofbirth);

    }
    )
    
}

function updatedProfileDriver(){

    let updateInputEmailP=$('#_InputEmail').val();
    let updateInputFirstNameP=$('#_InputFirstName').val();
    let updateInputLastNameP=$('#_InputLastName').val();
    let updateInputPhoneNumberP=$('#_InputPhoneNumber').val();
    let updateInputBirthdayP=$('#_InputBirthday').val();
    console.log(updateInputEmailP);

    $.post("getDriverDetails.php",
    {updateInputEmailPs:updateInputEmailP,
     updateInputFirstNamePs:updateInputFirstNameP,
     updateInputLastNamePs:updateInputLastNameP,
     updateInputPhoneNumberPs:updateInputPhoneNumberP,
     updateInputBirthdayPs:updateInputBirthdayP
    },
    function(data,status){
        
        //refreshpage
    });




}