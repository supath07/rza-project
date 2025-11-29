const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');
const dropdownParents = document.querySelectorAll('.nav-parent');

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        navToggle.setAttribute('aria-expanded', isOpen);
    });
}

dropdownParents.forEach((btn) => {
    btn.addEventListener('click', (event) => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        const menu = btn.nextElementSibling;
        if (menu) {
            menu.style.display = expanded ? 'none' : 'block';
        }
        if (window.innerWidth > 960) {
            event.preventDefault();
        }
    });
});
