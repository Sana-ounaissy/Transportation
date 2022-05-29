
function addtrip(){
    let FromAdd = $('#From').val();
    let FirstStopAdd = $('#FirstStop').val();
    let SecondStopAdd = $('#SecondStop').val();
    let ToAdd = $('#To').val();
    let DateAdd = $('#Date').val();

    $.ajax({
        url:"insertTrip.php",
        type:'post',
        data: {
            FromSend: FromAdd,
            FirstStopSend: FirstStopAdd,
            SecondStopSend: SecondStopAdd,
            ToSend: ToAdd,
            DateSend: DateAdd
        },
        success:function(data,status){
            $('#completeModal').modal('hide');
            console.log(status);
            displayData();
        }
    });
}

/////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    displayData();
});

function displayData(){
    let displayData="true";
    $.ajax({
        url:"displayTrip.php",
        type:"post",
        data:{
            displaySend:displayData
        },
        success:function(data,status){
            data = JSON.parse(data)
            $('#displayDataTable').html(data);

        }
    })
}

////////////////////////////////////////////////////

function DeleteUser(deleteid){
    $.ajax({
        url:"deleteTrip.php",
        type:'post',
        data:{
            deletesend:deleteid
        },
        success:function(data,status){
            displayData();
        }

    });
}
///////////////////////////////////////////////////for the update modal and displaying what we have in inputs
function GetDetails(updateid){
    $('#hiddendata').val(updateid);

    $.post("updateTrip.php",
    {updateid:updateid},
    function(data,status){
        let userid=JSON.parse(data);
        console.log(data);
        $('#updateFrom').val(userid.From);
        $('#updateFirstStop').val(userid.FirstStop);
        $('#updateSecondStop').val(userid.SecondStop);
        $('#updateTo').val(userid.To);
        $('#updateDate').val(userid.Date);


    }
    )
    $('#updateModal').modal('show');

}

////////////////////////////////////////////////// to update the input fields we got from database
function updateDetails(){
    let updateFrom=$('#updateFrom').val();
    let updateFirstStop=$('#updateFirstStop').val();
    let updateSecondStop=$('#updateSecondStop').val();
    let updateTo=$('#updateTo').val();
    let updateDate=$('#updateDate').val();
    let hiddendata=$('#hiddendata').val();

    $.post("updateTrip.php",
    {updateFrom:updateFrom,
     updateFirstStop:updateFirstStop,
     updateSecondStop:updateSecondStop,
     updateTo:updateTo,
     updateDate:updateDate,
     hiddendata:hiddendata
    },
    function(data,status){
        $('#updateModal').modal('hide');
        displayData();
    });


}