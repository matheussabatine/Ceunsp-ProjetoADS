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

/*botao de incremento*/ 
        //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        //taking value to increment decrement input value
        var valueCount
        //estoque
        var estoque
        //função que imprime valor atual do botão
        function Botaovalor() {
            valueCount = document.getElementById("quantity").value;
            document.getElementById("imprime").innerText = valueCount
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function()
        {
            //getting value of input
            valueCount = document.getElementById("quantity").value;
            // definindo um estoque
            estoque = 13

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount > 1){
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }
            // fazer condição if que impede que o contador ultrapasse o valor disponível no estoque
            if (valueCount == estoque){
                document.querySelector(".plus-btn").setAttribute("disabled", "disabled")
            }
        })

        //minus button
        document.querySelector(".minus-btn").addEventListener("click", function()
        {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value decrement by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1){
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
            // condição que libera button plus quando é possível adcionar estoque
            if (valueCount < estoque){
                document.querySelector(".plus-btn").removeAttribute("disabled");
                document.querySelector(".plus-btn").classList.remove("disabled")
            }
        })

