let printdrivershere = document.getElementById("tbodyadmindriver");
let users = JSON.parse(localStorage.getItem("allEntries"));
console.log(users.length);

    
for(let i=0; i<users.length; i++){
   
     if(users[i].selcted =='Driver'){
                printdrivershere.innerHTML += "<tr> <td>" + users[i].fname + "</td>" 
                            + "<td>"+ users[i].lname + "</td>" 
                            + "<td>"+ users[i].em + "</td>" 
                            + "<td>"+ users[i].ph+ "</td>"
                            + "<td>"+ users[i].birth + "</td>" 
                            + "<td>"+ users[i].gen + "</td> </tr>";
    }


}





// printdrivershere.innerHTML = localStorage.getItem(user)