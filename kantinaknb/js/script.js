const cemilanBtn = document.getElementById('cemilan-btn');
const laukBtn = document.getElementById('lauk-btn');
const minumanBtn = document.getElementById('minuman-btn');

const cemilanMenu = document.getElementById('cemilan-menu');
const laukMenu = document.getElementById('lauk-menu');
const minumanMenu = document.getElementById('minuman-menu');

function showMenu(menuToShow) {
    cemilanMenu.style.display = 'none';
    laukMenu.style.display = 'none';
    minumanMenu.style.display = 'none';

    menuToShow.style.display = 'block';
}

cemilanBtn.addEventListener('click', () => showMenu(cemilanMenu));
laukBtn.addEventListener('click', () => showMenu(laukMenu));
minumanBtn.addEventListener('click', () => showMenu(minumanMenu));
