const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
const menu = document.querySelector('.menu');
menuBtn && menuBtn.addEventListener('click', () => {
    console.log("clicked");
  if (!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
  if (menu && menuOpen) {
    menu.classList.add('active');
  } else {
    menu.classList.remove('active');
  }
});

