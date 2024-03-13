//Responsive
// Function to toggle navigation bar
function toggleNavbar() {
  var navBar = document.querySelector('.nav_bar');
  navBar.classList.toggle('open');
}

// Add event listener to menu icon
document.querySelector('.menu_icon').addEventListener('click', toggleNavbar);




function showPage(pageId) {
  // Hide all sections
  let pages = document.querySelectorAll('.page');
  pages.forEach(function (page) {
    page.style.display = 'none';
  });

  // Show the selected section
  var selectedpage = document.getElementById(pageId);
  if (selectedpage) {
    selectedpage.style.display = 'block';
  }
}
showPage('home');

//Login page
