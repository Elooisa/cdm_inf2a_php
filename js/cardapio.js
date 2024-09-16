document.getElementById('menuForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const date = document.getElementById('date').value;
    const food = document.getElementById('food').value;
    const nutrition = document.getElementById('nutrition').value;

    const menuItem = document.createElement('li');
    menuItem.textContent = `Data: ${date} - Alimento: ${food} - Valores Nutricionais: ${nutrition}`;

    document.getElementById('menuList').querySelector('ul').appendChild(menuItem);

    document.getElementById('menuForm').reset();
});

