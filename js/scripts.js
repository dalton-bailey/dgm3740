//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

$(document).on('ready', function() {
    $(".regular").slick({
      dots: true,
      arrows: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  });

let pageHREF = location.href.split('/')

currentPage = pageHREF[3]

let menu = document.querySelectorAll('ul#primaryNav li a')

let i 
for(i=0; i<menu.length; i++){
  let currentURLString = menu[i].getAttribute('href')
  console.log(currentURLString)
  
  if (currentURLString === currentPage) {
    menu[i].parentNode.className='active'

    menu[i].parentNode.parentNode.className='parent'
  }
  else {
    menu[i].parentNode.className=""
  }
}
