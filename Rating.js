let printdrivershere = document.getElementById("rowdriverrating");
let users = JSON.parse(localStorage.getItem("allEntries"));
console.log(users[0]);

    
for(let i=0; i<users.length; i++){
   
     if(users[i].selcted =='Driver'){
                printdrivershere.innerHTML +=' <div class="col-lg-4 col-sm-12"> '
                +' <div class="container d-flex justify-content-center mt-5"> ' 
                +'    <div class="card text-center mb-5"> '
                 +'       <div class="circle-image">'
                 +'           <img src="http://bootdey.com/img/Content/avatar/avatar1.png" width="50">'
                 +'       </div>'

                 +'       <span class="name mb-1 fw-500">'+ users[i].fname + "  "+ users[i].lname  + '</span>'

                 +'       <div class="rate bg-dark py-3 text-white mt-3">'
                 +'           <h6 class="mb-0">Rate your driver</h6>'
                 +'           <div class="rating">'
                 +'               <input type="radio" name="rating" value="5" id="5">'
                 +'               <label for="5">☆</label>'
                 +'               <input type="radio" name="rating" value="4" id="4">'
                 +'               <label for="4">☆</label>'
                  +'              <input type="radio" name="rating" value="3" id="3">'
                  +'              <label for="3">☆</label>'
                  +'              <input type="radio" name="rating" value="2" id="2">'
                  +'              <label for="2">☆</label>'
                  +'              <input type="radio" name="rating" value="1" id="1">'
                 +'               <label for="1">☆</label>'
                +'            </div>'
                +'            <div class="buttons px-4 mt-0"> <button'
               +'                     class="btn btn-warning btn-block rating-submit">Submit</button>'
               +'             </div>'
              +'          </div>'
              +'      </div>'
              +'  </div>'
  

 }
  

}

