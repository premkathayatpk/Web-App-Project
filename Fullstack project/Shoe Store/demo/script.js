document.addEventListener('DOMContentLoaded', function () {
  const navbarToggle = document.getElementById('navbarToggle');
  const navbarList = document.getElementById('navbarList');

  navbarToggle.addEventListener('click', function () {
    navbarList.classList.toggle('show');
  });
});

function toggleContent() {
  var content = document.getElementById('content');
  // Toggle the 'hidden' class on the content element
  content.classList.toggle('hidden');
}