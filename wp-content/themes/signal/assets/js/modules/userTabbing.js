// to detect whether user is a keyboard user so I can add focus outline for them (default is set to none for everyone else in elements.scss)
function handleFirstTab(e) {
  if (e.keyCode === 9) { // the tab key
      document.body.classList.add('user-is-tabbing');
      window.removeEventListener('keydown', handleFirstTab);
  }
}

window.addEventListener('keydown', handleFirstTab);