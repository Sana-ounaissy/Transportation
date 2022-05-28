
let selectedRow = null


// function exceuted when form is submitted
function onFormSubmit() {
    if (validate()) {
        let formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

// function to read recieve data submitted by user
function readFormData() {
    let formData = {};
    formData.Id = document.getElementById("_Id").value;
    formData.From = document.getElementById("_From").value;
    formData.FirstStop= document.getElementById("_Firststop").value;
    formData.SecondStop = document.getElementById("_Secondstop").value;
    formData.To = document.getElementById("_To").value;
    formData.DateAndTime = document.getElementById("_Dateandtime").value;
    formData.DriversName = document.getElementById("_Driversname").value;
    return formData; 
}

//function to display submitted data in a different table
function insertNewRecord(data) {
    let table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    // create a new row and insert data continuosly over the lenght of table
    let newRow = table.insertRow(table.length); // table.length for the subsquent data to be submitted
    cell1 = newRow.insertCell(0); 
    cell1.innerHTML = data.Id; //cell 1 of row 1
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.From; //cell 2 of row 1
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.FirstStop; //cell 3 of row 1
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.SecondStop;   //cell 4 of row 1
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.To; 
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.DateAndTime; 
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = data.DriversName; 
    cell8 = newRow.insertCell(7); 
    cell8.innerHTML = `<button class="btn ms-1" onclick="onEdit(this).style.display='block'">Edit</button>
                       <button class="btn ms-1" onclick="onDelete(this).style.display='block'">Delete</button>`;
}

function resetForm() {
    document.getElementById("_Id").value = "";
    document.getElementById("_From").value = "";
    document.getElementById("_Firststop").value = "";
    document.getElementById("_Secondstop").value = "";
    document.getElementById("_To").value = "";
    document.getElementById("_Dateandtime").value = "";
    document.getElementById("_Driversname").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("_Id").value = selectedRow.cells[0].innerHTML;
    document.getElementById("_From").value = selectedRow.cells[1].innerHTML;
    document.getElementById("_Firststop").value= selectedRow.cells[2].innerHTML;
    document.getElementById("_Secondstop").value  = selectedRow.cells[3].innerHTML;
    document.getElementById("_To").value  = selectedRow.cells[4].innerHTML;
    document.getElementById("_DateAandtime").value  = selectedRow.cells[5].innerHTML;
    document.getElementById("_Driversname").value   = selectedRow.cells[6].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.Id;
    selectedRow.cells[1].innerHTML = formData.From;
    selectedRow.cells[2].innerHTML = formData.FirstStop;
    selectedRow.cells[3].innerHTML = formData.SecondStop;
    selectedRow.cells[4].innerHTML = formData.To;
    selectedRow.cells[5].innerHTML = formData.DateAndTime;
    selectedRow.cells[6].innerHTML = formData.DriversName
}

function onDelete(td) {
    if (confirm('Are you sure to delete this trip?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}

function validate() {
    isValid = true;
    if (document.getElementById("_Id").value == "") {
        isValid = false;
        document.getElementById("_IdValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("_IdValidationError").classList.contains("hide"))
            document.getElementById("_IdValidationError").classList.add("hide");
    }
    return isValid;
}





localStorage.setItem('items', JSON.stringify(newRow));
const data = JSON.parse(localStorage.getItem('items'));
console.log ("items");
const liMaker = (text) => {
  const li = document.createElement('li');
  li.textContent = text;
  ul.appendChild(li);
}

localStorage.setItem('items',)

function submittrip(){
    var alltrips = [];
alltrips.push(trip);
        // Parse any JSON previously stored in allEntries
     var existingtrips = JSON.parse(localStorage.getItem("alltrips"));
        if(existingtrips == null) existingtrips = [];
       
        var trip= {
            "Id":document.getElementById("_Id").value,
            "From":document.getElementById('_From').value,
            "FirstStop":document.getElementById('_Firststop').value,
            "SecondStop":document.getElementById('_Secondstop').value,
            "To":document.getElementById('_To').value,
            "DateAndTime": document.getElementById('_Dateandtime').value,
            "DriversName": document.getElementById('_Driversname').value,
           
            
        };
        localStorage.setItem("trip", JSON.stringify(trip));
        // Save allEntries back to local storage
        existingtrips.push(trip);
        localStorage.setItem('alltrips', JSON.stringify(existingtrips));
}
