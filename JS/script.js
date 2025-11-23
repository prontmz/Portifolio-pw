import './rodape.js';
const menuItems = document.querySelectorAll('.menu-item');
        const conteiners = document.querySelectorAll('.conteiner');

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                // Atualiza a aula ativa
                menuItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');

                // Mostra/esconde contêineres
                const tab = item.getAttribute('data-tab');
                conteiners.forEach(c => c.classList.remove('activo'));
                const activeConteiner = document.getElementById(tab);
                if (activeConteiner) activeConteiner.classList.add('activo');
            });
        });
// Para cada container de aula
document.querySelectorAll('.conteiner').forEach(container => {
    const numTextos = 5 + Math.floor(Math.random() * 5); // entre 5 e 10 textos
    for (let i = 0; i < numTextos; i++) {
        const texto = document.createElement('div');
        texto.classList.add('bg-texto');
        texto.textContent = 'USTM'; // ou outro texto que quiseres

        // Posições aleatórias dentro do container
        const x = Math.random() * 80; // em %
        const y = Math.random() * 80; // em %
        const tamanho = 20 + Math.random() * 60; // tamanho de 20px a 80px
        const rotacao = -30 + Math.random() * 60; // rotação de -30 a 30 graus

        texto.style.left = x + '%';
        texto.style.top = y + '%';
        texto.style.fontSize = tamanho + 'px';
        texto.style.transform = `rotate(${rotacao}deg)`;

        container.appendChild(texto);
    }
});
