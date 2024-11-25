// włączenie nasłuchiwania zdarzenia onclick na buttonach 
// let buttons = document.querySelectorAll("button")
const buttons = document.querySelectorAll("button")

buttons.forEach(button => {
    button.addEventListener("click", (element) => {
        const news = document.querySelectorAll(".news")
        news.forEach(div => {
            div.style.display = "none"
        })
        const nextElementDiv = button.nextElementSibling;
        nextElementDiv.style.display = "block"
    })
})
