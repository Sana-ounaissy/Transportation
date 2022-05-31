$(document).ready(function(){
    displayData();
});

function displayData(){
    let displayData="true";
    $.ajax({
        url:"displaydriver.php",
        type:'post',
        data:{
            displaySend:displayData
        },
        success:function(data,status){
            data = JSON.parse(data)
            $('#displayDataTable').html(data);

        }
    })
}


function Deletedriver(deleteid){
    $.ajax({
        url:"deletedriver.php",
        type:'post',
        data:{
            deletesend:deleteid
        },
        success:function(data,status){
            displayData();
        }

    });
} 

function myFunction() {
    let x=$("#btn").val('Confirmed');
    $("#btn").css('backgroundColor','green');

  }
