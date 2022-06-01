function displayData(){
  let displayData="true";
  $.ajax({
      url:"displaytripinfo.php",
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

function chatDriver(){
let sessionadd=$('#sessionchat').val();
let messageadd=$('#Mess').val();
$.ajax({
    url:"ChatSendDriver.php",
    type:"post",
    data:{
        sessionsend:sessionadd,
        messagesend:messageadd
    },
    success:function(data,status){
      console.log(sessionadd); 
    }
    })


}