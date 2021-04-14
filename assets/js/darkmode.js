var element = document.body;
var icon = document.getElementById('btn-dark');

function switchMode() {
  element.classList.toggle("dark-mode");
  icon.classList.toggle("fa-sun");

  if (element.classList.contains('dark-mode')) { 
    localStorage.setItem('darkMode', 'enabled');
  } else {
    localStorage.setItem('darkMode', 'disabled');
  }
}

if (localStorage.getItem('darkMode') === 'enabled') {
  element.classList.add('dark-mode');
  icon.classList.add("fa-sun");
}
else {
  element.classList.remove('dark-mode');
  icon.classList.add("fa-moon");
}