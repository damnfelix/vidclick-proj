const tipTrigger = document.querySelector('#showTip');
const tip = document.querySelector('.tip');
tipTrigger.addEventListener('focus', () => {
    tip.classList.remove('hide');
})
tipTrigger.addEventListener('blur', () => tip.classList.add('hide'));