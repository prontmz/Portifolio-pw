document.getElementById("buscar").addEventListener("click", async () => {
    const cidade = document.getElementById("cidade").value.trim();
    const resultado = document.getElementById("resultado");

    if (cidade === "") {
        resultado.innerHTML = "<p>Por favor, digite o nome da cidade.</p>";
        return;
    }

    resultado.innerHTML = "<p>A buscar dados do clima...</p>";

    try {
        const resposta = await fetch(`https://wttr.in/${cidade}?format=j1`);
        const dados = await resposta.json();

        const clima = dados.current_condition[0];
        const temperatura = clima.temp_C;
        const descricao = clima.weatherDesc[0].value;

        const iconesLocais = {
            "Sunny": "☀️",
            "Partly cloudy": "⛅",
            "Cloudy": "☁️",
            "Overcast": "☁️",
            "Light rain": "🌦️",
            "Rain": "🌧️",
            "Moderate rain": "🌧️",
            "Heavy rain": "🌧️",
            "Thunderstorm": "⛈️",
            "Mist": "🌫️",
            "Fog": "🌫️",
            "Clear": "🌙"
        };

        const icone = iconesLocais[descricao] || "❓";

        resultado.innerHTML = `
            <h2>${cidade}</h2>
            <p style="font-size:50px;">${icone}</p>
            <p><strong>Temperatura:</strong> ${temperatura}°C</p>
            <p><strong>Condição:</strong> ${descricao}</p>
        `;
    } catch (erro) {
        resultado.innerHTML = `<p style="color:red;">Erro ao buscar dados: ${erro.message}</p>`;
    }
});
