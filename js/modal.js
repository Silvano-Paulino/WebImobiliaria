





var tabs = document.querySelectorAll(".linkNavIm");
var contents = document.querySelectorAll(".caixaFormIm");

tabs.forEach((tab, index) =>{
  tab.addEventListener('click', () =>{

    // To remove active class form previous tab
    tabs.forEach(tab => tab.classList.remove("actL"))



    tab.classList.add("actL");

    // To show content according to tab selected


    // To hide previous tab content
    contents.forEach((c) => c.classList.remove("actC"));

    contents[index].classList.add("actC");
  })
});


// To run the animation initially when the page loads 
//tabs[0].click();
