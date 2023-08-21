window.add_card = () => {
    let card = document.getElementById("card");
    let clone_card = card.cloneNode(true)

    if(card.id == 'card') {
        clone_card.id = "card2"
    } else {
        let card_id = card.id.slice(-1)
        let clone_id = "card" + card_id + 1
        clone_card.id = clone_id
    }

    card.after(clone_card);
}
