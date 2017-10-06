var toggles = document.querySelectorAll('[data-toggle]'),
    i = toggles.length;

for (i;i--;) {
  
  toggles[i].addEventListener('click', function(e) {
  
    e.preventDefault();

    var i = toggles.length;

    for (i;i--;) {

      toggles[i].parentNode.classList.remove('active');

    }

    this.parentNode.classList.add('active');
  
  }, false);
  
}