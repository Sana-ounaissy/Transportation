let printdrivershere = document.getElementById("tbodyadmindriver");
let users = JSON.parse(localStorage.getItem("allEntries"));
console.log(users[0]);

    
for(let i=0; i<users.length; i++){
   
     if(users[i].selcted =='Driver'){
                printdrivershere.innerHTML += "<tr> <td>" + users[i].fname + "</td>" 
                            + "<td>"+ users[i].lname + "</td>" 
                            + "<td>"+ users[i].em + "</td>" 
                            + "<td>"+ users[i].ph + "</td>"
                            + "<td>"+ users[i].birth + "</td>" 
                            + "<td>"+ users[i].gen + "</td>"
                            + ' <td> <button onclick="Delete()" class="btn btn-outline-dark" type="button">Delete</button> </td> '
                            + "</tr>";
  

 }
  
  function Delete(){

      let td = event.target.parentNode; 
      let tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
      
    }


}







// printdrivershere.innerHTML = localStorage.getItem(user)