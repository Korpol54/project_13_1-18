(function () {
    const buttons = document.querySelectorAll('.btn')
    const deckOfCard = document.querySelectorAll('.deckOfCard')

    buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault()
            const filter = e.target.dataset.filter

            deckOfCard.forEach((item) => {
                if (filter === 'all') {
                    item.style.display = 'block'
                }
                else {
                    if (item.classList.contains(filter)) {
                        item.style.diaplay = 'block'
                    } else {
                        item.style.diaplay = 'none'
                    }
                }
            })
        })
    })
});
