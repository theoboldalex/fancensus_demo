const copyUrlBtn = document.querySelector('#copyUrlBtn');

copyUrlBtn.addEventListener('click', copyUrl);

function copyUrl() {
    const copyUrlText = document.querySelector('#copyUrlText');
    copyUrlText.focus();
    copyUrlText.select();

    try {
        document.execCommand('copy');
    } catch (err) {
        console.error(err);
    }
}
