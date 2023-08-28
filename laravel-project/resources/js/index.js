window.add_card = () => {
    let overview = document.getElementById("overview")
    let card = document.getElementById("card_content")
    let clone_card = card.cloneNode(true)
    let card_id = card.id
    let clone_card_id = card_id + (new Date()).getTime()
    clone_card.id = clone_card_id
    let title = document.getElementById("view_title")
    title.value = ''
    let body = document.getElementById("view_body")
    body.value = ''
    overview.appendChild(clone_card);
}

window.add_schedule = () => {
    let overview = document.getElementById("overview_s")
    let card = document.getElementById("card_content_s")
    let clone_card = card.cloneNode(true)
    let card_id = card.id
    let clone_card_id = card_id + (new Date()).getTime()
    clone_card.id = clone_card_id
    let title = document.getElementById("view_title_s")
    title.value = ''
    let body = document.getElementById("view_body_s")
    body.value = ''
    overview.appendChild(clone_card);
}


window.remove_card = (e) => {
    var e = e || window.event;
    var elem = e.target || e.srcElement;
    var elemId = elem.id;
    let parent2 = elem.parentNode
    let parent = parent2.parentNode
    if (parent.id === 'card_content' || parent.id === 'card_content_s') {
        alert('これ以上削除できません。')
        return false;
    }
    if(confirm('削除しますか？')){
        parent.remove()
    }
};



