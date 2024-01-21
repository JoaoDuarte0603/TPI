// Executa o código quando a página termina de carregar
window.onload = function () {
    window.addEventListener('scroll', function (e) {
        if (window.pageYOffset > 100) {
            document.querySelector("header").classList.add('is-scrolling');
        } else {
            document.querySelector("header").classList.remove('is-scrolling');
        }
    });

    const menu_btn = document.querySelector('.burger'); //Vai buscar o elemento .burger
    const mobile_menu = document.querySelector('.mobile-nav'); //Vai buscar o elemento .mobile-nav

    // Cria um evento para quando carrega no botão
    menu_btn.addEventListener('click', function () {

        // Mudar o modo do botão para "is-active"
        menu_btn.classList.toggle('is-active');

        // Retira o modo "is-active" do botão
        mobile_menu.classList.toggle('is-active');
    });
}
