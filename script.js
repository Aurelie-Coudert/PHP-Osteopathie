/* fonction pour modifier le logo dans la navbar */
function changeLogo(hovered) {
    const logoImg = document.getElementById('logo-img');
    
    if (hovered) {
        logoImg.src = 'images/logo-hover.png'; 
    } else {
        logoImg.src = 'images/logo-normal.png'; 
    }
}

