window.add_card = () => {
    let overview = document.getElementById("overview")
    let card = document.getElementById("card_content")
    let clone_card = card.cloneNode(true)
    let card_id = card.id
    clone_card.id = card_id + (new Date()).getTime()
    overview.appendChild(clone_card);
    clone_card.getElementsByTagName('input')[0].value=''
    clone_card.getElementsByTagName('textarea')[0].value=''
}

window.add_schedule = () => {
    let overview = document.getElementById("overview_s")
    let card = document.getElementById("card_content_s")
    let clone_card = card.cloneNode(true)
    let card_id = card.id
    let clone_card_id = card_id + (new Date()).getTime()
    clone_card.id = clone_card_id
    overview.appendChild(clone_card);
    // inputを初期化
    clone_card.getElementsByTagName('input')[0].value=''
    clone_card.getElementsByTagName('input')[1].value='10:00'
    clone_card.getElementsByTagName('input')[2].value=''
    clone_card.getElementsByTagName('textarea')[0].value=''
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