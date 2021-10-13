/*botão para guardar e revelar navbar + animação da seta*/ 
$('.botao').click(function(){
    $(this).toggleClass("click");
    $('span').toggleClass("roda-seta");
    $('.sidebar').toggleClass("moverSB");
});

/*Funcionalidade de abrir e fechar a pasta masculina + girar seta da pasta
SHOW= mostra conteúdo da pasta ROTATE= roda seta da pasta*/
$('.pasta-homem').click(function(){
    $('nav ul .moda-homem').toggleClass("show");
    $('nav ul .seta-homem').toggleClass("rotate");
});

/*Funcionalidade de abrir e fechar a pasta feminina + girar seta da pasta*/
$('.pasta-mulher').click(function(){
    $('nav ul .moda-mulher').toggleClass("show");
    $('nav ul .seta-mulher').toggleClass("rotate");
});

/*caso um item já esteja selecionado/ativado, ele será destivado quando um novo item for selecionado/ativado,*/
$('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");

});


