let selected = null;

const dragStart = (e) => {

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
