let printdrivershere = document.getElementById("tbodyadmindriver");
let users = JSON.parse(localStorage.getItem("allEntries"));

    
for(let i=0; i<users.length;i++){
   
     if(users[i].selcted =='Driver'){
                printdrivershere.innerHTML += "<tr> <td>" + users[i].fname + "</td> " 
                            + "<td>"+ users[i].lname + "</td> " 
                            + "<td>"+ users[i].em + "</td> " 
                            + "<td>"+ users[i].ph + "</td> "
                            + "<td>"+ users[i].birth + "</td> " 
                            + "<td>"+ users[i].gen + "</td> "
                            + "<td>"+ `
                            <div class="rating">
                            <input type="radio" name="rating" value="5" id="5">
                            <label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4">
                             <label for="4">☆</label>
                           <input type="radio" name="rating" value="3" id="3">
                           <label for="3">☆</label>
                           <input type="radio" name="rating" value="2" id="2">
                           <label for="2">☆</label>
                           <input type="radio" name="rating" value="1" id="1">
                           <label for="1">☆</label>
                            </div> ` 
                            + "</td> "
                            + ' <td> <button onclick="Delete()" class="btn btn-outline-dark" type="button">Delete</button> </td>'
                            + "</tr> ";
  

 }
  
  function Delete(){

      let td = event.target.parentNode; 
      let tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
    }


}






