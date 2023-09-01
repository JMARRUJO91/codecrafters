function atualizarContagemRegressiva() {
    const dataAlvo = new Date('2023-10-16T07:30:00');
    const agora = new Date();
    const diferenca = dataAlvo - agora;

    const segundos = Math.floor((diferenca / 1000) % 60);
    const minutos = Math.floor((diferenca / 1000 / 60) % 60);
    const horas = Math.floor((diferenca / (1000 * 60 * 60)) % 24);
    const dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));

    document.getElementById('dias').textContent = dias.toString().padStart(2, '01');
    document.getElementById('horas').textContent = horas.toString().padStart(2, '0');
    document.getElementById('minutos').textContent = minutos.toString().padStart(2, '0');
    document.getElementById('segundos').textContent = segundos.toString().padStart(2, '0');
}

atualizarContagemRegressiva();
setInterval(atualizarContagemRegressiva, 1000);
