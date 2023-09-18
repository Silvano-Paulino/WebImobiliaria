
const navSlide = () => {
    
    const btnResponsividade = document.querySelector('.idBtnResponsividade');
    const navMenu = document.querySelector('.idNavSiteMenu');

    btnResponsividade.addEventListener('click', () => {
        
        navMenu.classList.toggle('activaNav');

    });

}

navSlide();