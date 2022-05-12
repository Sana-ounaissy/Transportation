let printtripinfo = document.getElementById("_Tbodyripinfo");
let trips = JSON.parse(localStorage.getItem("alltrips"));
console.log(trips.length);

    
for(let i=0; i<trips.length; i++){
   
                printtripinfo.innerHTML += "<tr> <td>" + trips[i].Id + "</td>" 
                            + "<td>"+ trips[i].From + "</td>" 
                            + "<td>"+ trips[i].FirstStop + "</td>" 
                            + "<td>"+trips[i].SecondStop + "</td>"
                            + "<td>"+ trips[i].To + "</td>" 
                            + "<td>"+ trips[i].DateAndTime + "</td>"
                            + "<td>"+ trips[i].DriversName + "</td>"
                            +`<td> <button class="btn ms-1" onclick="document.getElementById('id01').style.display='block'">Done</button>
                            <div id="id01" class="modal">
                             <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                             <form class="modal-content" action="">
                               <div class="container">
                                 <h1>Trip Completed</h1>
                                 <p>Has the trip been completed?</p>
                               
                                 <div class="clearfix">
                                   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Yes</button>
                                   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">No</button>
                                 </div>
                               </div>
                             </form>
                           </div></td>
                             </tr>`

}

function driverChat(){
var allChats = [];
allChats.push(chat);
        // Parse any JSON previously stored in allEntries
     var existingChats = JSON.parse(localStorage.getItem("allChats"));
        if(existingChats == null) existingChats = [];
       
        var chat = {
           "liveChat":document.getElementById("Mess").value,
         
            };
        localStorage.setItem("chat", JSON.stringify(chat));
        // Save allEntries back to local storage
        existingChats.push(chat);
        localStorage.setItem('allChats', JSON.stringify(existingChats));
let dr = JSON.parse(localStorage.getItem('chat'));
console.log(dr.liveChat);}


