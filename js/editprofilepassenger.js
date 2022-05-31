function editProfilePassenger(updateid){
    let sessionadd=$('#sessionresult').val();
    console.log(sessionadd);

    $.post("getPassengerDetails.php",
    {updateid:updateid,
    sessionsend:sessionadd},
    function(data,status){
        let userid=JSON.parse(data);
        console.log(data);
        $('#_InputEmailP').val(userid.Email);
        $('#_InputFirstNameP').val(userid.Firstname);
        $('#_InputLastNameP').val(userid.Lastname);
        $('#_InputPhoneNumberP').val(userid.Phonenb);
        $('#_InputBirthdayP').val(userid.Dateofbirth);

    }
    )
    
}

function updatedProfilePassenger(){

    let updateInputEmailP=$('#_InputEmailP').val();
    let updateInputFirstNameP=$('#_InputFirstNameP').val();
    let updateInputLastNameP=$('#_InputLastNameP').val();
    let updateInputPhoneNumberP=$('#_InputPhoneNumberP').val();
    let updateInputBirthdayP=$('#_InputBirthdayP').val();
    console.log(updateInputEmailP);

    $.post("getPassengerDetails.php",
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