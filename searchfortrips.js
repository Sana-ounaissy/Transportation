let printtripinfo = document.getElementById("_Tbodysearch");
let trips = JSON.parse(localStorage.getItem("alltrips"));
console.log(trips.length);

    
for(let i=0; i<trips.length; i++){
   
                printtripinfo.innerHTML += `<tr id="row1" onclick="window.location='yourtrip.html';" > <td>`+ trips[i].Id + "</td>" 
                            + "<td>"+ trips[i].From + "</td>" 
                            + "<td>"+ trips[i].FirstStop + "</td>" 
                            + "<td>"+ trips[i].SecondStop + "</td>"
                            + "<td>"+ trips[i].To + "</td>" 
                            + "<td>"+ trips[i].DateAndTime + "</td>"
                            + "<td>"+ trips[i].DriversName + "</td>"
                            +`</tr> `

}


function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  console.log(trips[0].From)
}

// 
// 
// 

// $('#myTable').on('click', 'tr', function() {

        
//     var values = $(this).find('td').map(function() {
//         return $(this).text();
//     });

//     console.log(values[0] + values[1] + values[2] + values[3]+ values[4] +  values[5] + values[6]);
    
//     window.location.replace("yourtrip.html");
    

// });





