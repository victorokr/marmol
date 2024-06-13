document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                // Sólo cerrar el menú si el toggler está visible (es decir, en dispositivos móviles)
                navbarToggler.click();
            }
        });
    });
});



//este codigo cierra el boton toggle del nav cuando esta en dispositivos miviles despues de dar click en sus opciones
// Explicación
// DOMContentLoaded: Asegura que el código JavaScript se ejecute una vez que todo el DOM esté completamente cargado.
// navbarToggler: Selecciona el botón de colapso del menú.
// navLinks: Selecciona todos los enlaces dentro del menú.
// forEach: Recorre todos los enlaces del menú y añade un event listener para el evento click.
// window.getComputedStyle(navbarToggler).display !== 'none': Comprueba si el botón de colapso es visible (es decir, si estamos en una vista móvil).
// Este script hace que, cuando un usuario hace clic en cualquier enlace del menú, el menú colapsado se cierre automáticamente, proporcionando una experiencia de usuario fluida en dispositivos móviles.