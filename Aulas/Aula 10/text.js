var nTitulo="The Computer"
    var nAutor = document.querySelector("h1")
    nAutor.textContent=nTitulo;
window.addEventListener("DOMContentLoaded", () => {

  const imagem = document.querySelector("img");

  imagem.addEventListener("mousedown", () => {

    alert("Clicaste na imagem");
    console.log("Clicaste");

  });

  const img = document.querySelector("img");

  img.addEventListener("mousedown", (event) => {

    const x = event.offsetX;
    const y = event.offsetY;

    alert(`Clicaste nas coordenadas X:${x} e Y:${y}`);
    alert("Fechou");
  });
});


