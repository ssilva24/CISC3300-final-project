console.log('calling homepage');

document.addEventListener('DOMContentLoaded', function() {

    const menuContainer = document.querySelector('.pages');
    menuContainer.addEventListener('click', function(event) {

        if (event.target.classList.contains('menu-item')) {

            const sectionId = event.target.getAttribute('id').replace('-item', '');

            scrollToSection(sectionId);
        }
    });


    menuContainer.addEventListener('mouseover', function(event) {
        if (event.target.classList.contains('menu-item')) {
            event.target.classList.add('hover-effect');
        }
    });

    menuContainer.addEventListener('mouseleave', function(event) {
        if (event.target.classList.contains('menu-item')) {
            event.target.classList.remove('hover-effect');
        }
    });


    const footerContainer = document.querySelector('.footer');
    footerContainer.addEventListener('click', function(event) {
        const sectionId = event.target.getAttribute('id');
        if (sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });

    footerContainer.addEventListener('mouseover', function(event) {
        event.target.classList.add('hover-effect');
    });

    footerContainer.addEventListener('mouseleave', function(event) {
        event.target.classList.remove('hover-effect');
    });
});

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth'
        });
    }
}
