var element = document.body;
var icon = document.getElementById('btn-dark');

function switchMode() {
  element.classList.toggle("dark-mode");
  icon.classList.toggle("fa-sun");

  if (element.classList.contains('dark-mode')) { //when the body has the class 'dark' currently
    localStorage.setItem('darkMode', 'enabled'); //store this data if dark mode is on
  } else {
    localStorage.setItem('darkMode', 'disabled'); //store this data if dark mode is off
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