//Procura dentro do documento form e add evento submit
document.querySelector("form").addEventListener("submit", Event => {
    console.log("Enviar o form")

    //Não vai enviar o form
    Event.preventDefault
})