document.addEventListener('DOMContentLoaded', () => {
    console.log("Script carregado e DOM pronto!");

    const campuses = document.querySelectorAll('.campus');
    const infoDiv = document.getElementById('info');

    if (campuses.length === 0) {
        console.error("Nenhum elemento .campus encontrado!");
    } else {
        console.log(`${campuses.length} elementos .campus encontrados!`);
    }

    campuses.forEach(campus => {
        campus.addEventListener('mouseover', () => {
            const name = campus.getAttribute('data-name');
            const historia = campus.getAttribute('data-historia');
            console.log(`Campus: ${name}`);
            infoDiv.innerHTML = `<strong>${name}</strong>: ${historia}`;
        });

        campus.addEventListener('mouseout', () => {
            infoDiv.innerHTML = '';
        });
    });
});
