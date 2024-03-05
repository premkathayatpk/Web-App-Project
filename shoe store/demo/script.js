document.addEventListener('DOMContentLoaded', function () {
  const navbarToggle = document.getElementById('navbarToggle');
  const navbarList = document.getElementById('navbarList');

  navbarToggle.addEventListener('click', function () {
    navbarList.classList.toggle('show');
  });
});
