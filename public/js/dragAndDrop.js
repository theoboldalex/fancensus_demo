let selected = null;

const dragStart = (e) => {
    e.dataTransfer.effectAllowed = 'move'
    e.dataTransfer.setData('text/plain', null)
    selected = e.target
}

const dragOver = (e) => {
    if (isBefore(selected, e.target)) {
        e.target.parentNode.insertBefore(selected, e.target)
    } else {
        e.target.parentNode.insertBefore(selected, e.target.nextSibling)
    }
}

const dragEnd = () => {
    selected = null;
}

const isBefore = (el1, el2) => {

}
