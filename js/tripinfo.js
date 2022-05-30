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
// function driverChat(){
// var allChats = [];
// allChats.push(chat);
//         // Parse any JSON previously stored in allEntries
//      var existingChats = JSON.parse(localStorage.getItem("allChats"));
//         if(existingChats == null) existingChats = [];
       
//         var chat = {
//            "liveChat":document.getElementById("Mess").value,
         
//             };
//         localStorage.setItem("chat", JSON.stringify(chat));
//         // Save allEntries back to local storage
//         existingChats.push(chat);
//         localStorage.setItem('allChats', JSON.stringify(existingChats));
// let dr = JSON.parse(localStorage.getItem('chat'));
// console.log(dr.liveChat);}


