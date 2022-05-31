// let printdrivershere = document.getElementById("rowdriverrating");
// let users = JSON.parse(localStorage.getItem("allEntries"));
// console.log(users[0]);
// let r=document.getElementsByClassName("rating");
// let z=document.getElementsByClassName("rating-label");    
// let rat=document.getElementsByClassName("my-rating");
// for(let i=0; i<users.length; i++){
   
    //  if(users[i].selcted =='Driver'){
    //             printdrivershere.innerHTML +=' <div class="col-lg-4 col-sm-12"> '
    //             +' <div class="container d-flex justify-content-center mt-5"> ' 
    //             +'    <div class="card text-center mb-5"> '
    //              +'       <div class="circle-image">'
    //              +'           <img src="http://bootdey.com/img/Content/avatar/avatar1.png" width="50">'
    //              +'       </div>'

    //              +'       <span class="name mb-1 fw-500">'+ users[i].fname + "  "+ users[i].lname  + '</span>'

    //              +'       <div class="rate bg-dark py-3 text-white mt-3" container="justify-content: center">'
    //              +'           <h6 class="mb-0">Rate your driver</h6>'
    //              + `
    //                             <div class="my-rating" style="align-items: center; justify-content: center">
    //             <label style="display: flex; align-items: center; justify-content: center" class="rating-label"><strong> <code></code></strong>
    //                 <input style="text-align: center;" class="rating" max="5" oninput="this.style.setProperty('--value', `+'`${this.valueAsNumber}`'+`)"
    //                     step="0.5" style="--value:2.5" type="range" value="2.5">
    //             </label>
    //         </div>
    //              `
    //             +'            <div class="buttons px-4 mt-0"> <button'
    //            +'                     class="btn btn-warning btn-block rating-submit">Submit</button>'
    //            +'             </div>'
    //           +'          </div>'
    //           +'      </div>'
    //           +'  </div>'}}
 
$(document).ready(function(){
    displayData();
});

function displayData(){
    let displayData="true";
    $.ajax({
        url:"RatingDriver.php",
        type:'post',
        data:{
            displaySend:displayData
        },
        success:function(data,status){
           
             console.log(data);
            $('#rowdriverrating').html(data);

        }
    })
}



            
 

