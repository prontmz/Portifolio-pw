// Espera o HTML carregar antes de executar
document.addEventListener("DOMContentLoaded", function() {
  const nome = "Emerson Ibraimo Cardoso Paulino";
  const autorEl = document.getElementById("autor");

  // Efeito de digitação (letra por letra)
  let i = 0;
  function escreverNome() {
    if (i < nome.length) {
      autorEl.textContent += nome.charAt(i);
      i++;
      setTimeout(escreverNome, 100); // velocidade da digitação
    }
  }

  escreverNome();
});
