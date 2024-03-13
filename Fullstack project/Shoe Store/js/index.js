//Responsive
// Function to toggle navigation bar
function toggleNavbar() {
  var navBar = document.querySelector('.nav_bar');
  navBar.classList.toggle('open');
}

// Add event listener to menu icon
document.querySelector('.menu_icon').addEventListener('click', toggleNavbar);



