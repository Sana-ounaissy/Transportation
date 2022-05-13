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
                            <div class="my-rating" style="align-items: center; justify-content: center">
                            <label style="display: flex; align-items: center; justify-content: center" class="rating-label"><strong> <code></code></strong>
                                <input style="text-align: center;" class="rating" max="5" oninput="this.style.setProperty('--value', `+'`${this.valueAsNumber}`'+`)"
                                    step="0.5" style="--value:2.5" type="range" value="2.5">
                            </label>
                        </div>`
                            + "</td> "
                            + ` <td style="width: 20%">
                                   <button style="margin-right:10px" onclick="Delete()" class="btn btn-outline-dark" type="button">Delete</button>
                                    <div>  </div>        
                                   <button onclick="alert("Driver Confirmed")" class="btn btn-outline-dark" type="button">Confirm</button>                            
                                </td>`
                            + "</tr> ";
                

 }
  
  function Delete(){

      let td = event.target.parentNode; 
      let tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
    }


}






