document.getElementById('search-button').addEventListener('click', searchResources);

function searchResources() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const resultsContainer = document.getElementById('results');
    resultsContainer.innerHTML = '';

    // Mock data for demo
    const categories = [
        { name: 'App Development', tools: ['Xcode', 'Android Studio', 'React Native'] },
        { name: 'Game Development', tools: ['Unity', 'Unreal Engine', 'Godot'] },
        // Add more categories here
    ];

    const filteredCategories = categories.filter(category => category.name.toLowerCase().includes(query));
    
    filteredCategories.forEach(category => {
        const card = document.createElement('div');
        card.className = 'result-card';
        card.innerHTML = `<h3>${category.name}</h3>`;
        card.onclick = () => showCategoryDetails(category);
        resultsContainer.appendChild(card);
    });
}

function showCategoryDetails(category) {
    const popup = document.getElementById('category-popup');
    const title = document.getElementById('category-title');
    const details = document.getElementById('category-details');

    title.textContent = category.name;
    details.innerHTML = '';
    
    category.tools.forEach(tool => {
        const toolItem = document.createElement('div');
        toolItem.className = 'tool-item';
        toolItem.innerHTML = `<p>${tool}</p>`;
        toolItem.onclick = () => showResourceDetails(tool);
        details.appendChild(toolItem);
    });

    popup.style.display = 'block';
}

function showResourceDetails(tool) {
    const popup = document.getElementById('resource-popup');
    const title = document.getElementById('resource-title');
    const details = document.getElementById('resource-details');

    title.textContent = tool;
    details.innerHTML = `
        <p>Videos on ${tool}</p>
        <p>PDFs on ${tool}</p>
        <p>Links on ${tool}</p>
    `;

    popup.style.display = 'block';
}

function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
}
