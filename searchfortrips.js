

let searchtrip1 = { "_Leaving": 'Beirut', "_Going": 'Tyre', "_Day": 12/5/2022, "_Seat":'1' };
 localStorage.setItem('searchtrip1', JSON.stringify(searchtrip1)); 
 const choiceone = localStorage.getItem('searchtrip1');
 console.log('choiceone: ', JSON.parse(choiceone));

 let searchtrip2 = { "_Leaving": 'Tyre', "_Going": 'Nabatieh', "_Day": 13/5/2022, "_Seat":'2' };
 localStorage.setItem('searchtrip2', JSON.stringify(searchtrip2)); 
 let choicetwo = localStorage.getItem('searchtrip2');
 console.log('choicetwo: ', JSON.parse(choicetwo));

 let searchtrip3 = { "_Leaving": 'Nabatieh', "_Going": 'Saida', "_Day": 13/5/2022, "_Seat":'2' };
 localStorage.setItem('searchtrip3', JSON.stringify(searchtrip3)); 
 let choicethree = localStorage.getItem('searchtrip3');
 console.log('choicethree: ', JSON.parse(choicethree));


  window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    
