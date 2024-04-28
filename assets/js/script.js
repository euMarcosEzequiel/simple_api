const containerCards = document.getElementById('container-cards');   

fetch('http://localhost/simple_api/api.php').then(response => response.json()).then(products => {
    products.forEach(product => {
        const card = newCardProduct(product);
        containerCards.appendChild(card);
    });
});

function newCardProduct(product) {
    const card = document.createElement('div');
    card.classList.add('card-product');

    const id = document.createElement('h3');
    id.textContent = `ID: ${product.id}`;
    card.appendChild(id);

    const title = document.createElement('span');
    title.textContent = `Name: ${product.name}`;
    card.appendChild(title);

    return card;
}