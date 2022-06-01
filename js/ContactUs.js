// // let k=0;
// function ContactUs(){

// let ContactName=document.getElementById("_ContactName");
// let ContactEmail=document.getElementById("_ContactEmail");
// let ContactSubject=document.getElementById("_ContactSubject");
// let ContactMessage=document.getElementById("_ContactMessage");


// if(ContactName.value.length == 0){
//     alert('Please fill in your Name');

// }
// else if(ContactEmail.value.length == 0){
//     alert('Please fill in your Email');

// }else if(ContactSubject.value.length == 0){
//     alert('Please fill in your Subject');

// }
// else if(ContactMessage.value.length == 0){
//     alert('Please fill in the Message');
// }

// else{
   
//     // localStorage.setItem("User1", JSON.stringify({
//     //     NAME: ContactName,
//     //     EMAIL: ContactEmail,
//     //     SUBJECT: ContactSubject,
//     //     MESSAGE:ContactMessage
//     //  }));
    
// //     localStorage.setItem('_ContactName', ContactName.value);
// //     localStorage.setItem('_ContactEmail', ContactEmail.value);
// //     localStorage.setItem('_ContactSubject', ContactSubject.value);
// //     localStorage.setItem('_ContactMessage', ContactMessage.value);
    
// //     alert('Your message has been sent');
// //     }

// // // console.log(message);
// // // localStorage.setItem(k,JSON.stringify(message));
// // // k++;
// // // console.log(k);
// // console.log(localStorage.getItem("_ContactName"));
// // console.log(localStorage.getItem("_ContactEmail"));
// // console.log(localStorage.getItem("_ContactSubject"));
// // console.log(localStorage.getItem("_ContactMessage"));
// var allMessages = [];
// allMessages.push(message);
//         // Parse any JSON previously stored in allEntries
//      var existingMessages = JSON.parse(localStorage.getItem("allMessages"));
//         if(existingMessages == null) existingMessages = [];
       
//         var message = {
//            "Contact_Name":document.getElementById("_ContactName").value,
//            "Contact_Email":document.getElementById("_ContactEmail").value,
//            "Contact_Subject" :document.getElementById("_ContactSubject").value,
//            "Contact_Message":document.getElementById("_ContactMessage").value,
//             };
//         localStorage.setItem("message", JSON.stringify(message));
//         // Save allEntries back to local storage
//         existingMessages.push(message);
//         localStorage.setItem('allMessages', JSON.stringify(existingMessages));

//     }
// } 
// let User = JSON.parse(localStorage.getItem('message'));
// console.log(User.Contact_Name);



// // function displayMessages(){
// //     document.getElementById("_h5Name").innerHTML=localStorage.getItem('_ContactName');
// //     document.getElementById("_h5Email").innerHTML=localStorage.getItem('_ContactEmail');
// //     document.getElementById("_h5Subject").innerHTML=localStorage.getItem('_ContactSubject');
// //     document.getElementById("_h5Message").innerHTML=localStorage.getItem('_ContactMessage');
    
    
        
// //         console.log(localStorage.getItem("_ContactName"));
// //         console.log(localStorage.getItem("_ContactEmail"));
// //         console.log(localStorage.getItem("_ContactSubject"));
// //         console.log(localStorage.getItem("_ContactMessage"));

// //     }

function insertContactus(){
    let _ContactNameAdd = $('#_ContactName').val();
    let _ContactEmailAdd = $('#_ContactEmail').val();
    let _ContactSubjectAdd = $('#_ContactSubject').val();
    let _ContactMessageAdd = $('#_ContactMessage').val();


    $.ajax({
        url:"insertContactUs.php",
        type:'post',
        data: {
            _ContactNameSend: _ContactNameAdd,
            _ContactEmailSend: _ContactEmailAdd,
            _ContactSubjectSend:_ContactSubjectAdd,
            _ContactMessageSend: _ContactMessageAdd
        },
        success:function(data,status){           
            console.log(status);
            
        }
    });
}



function displayData(){
    let displayData="true";
    $.ajax({
        url:"displayContactUs.php",
        type:"post",
        data:{
            displaySend:displayData
        },
        success:function(data,status){
            data = JSON.parse(data);
            $('#DisplayContactUsTable').html(data);

        }
    })
     let displayChat="true";
    $.ajax({
        url:"displayMessageDriver.php",
        type:"post",
        data:{
            displayChatSend:displayChat
        },
        success:function(data,status){
            data = JSON.parse(data);
            $('#DisplayDriverMessage').html(data);

        }
    })
}
//hon display lla messages t3ul l driver
