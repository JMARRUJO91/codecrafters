// Array de objetos para representar os dias do mês com lembretes
const lembretes = [
    { dia: 16, mes: 9, ano: 2023, texto: "Lembrete no dia 16/10/2023" },
    // Adicione mais lembretes conforme necessário
];

// Função para adicionar lembretes ao calendário
function adicionarLembretes() {
    const celulas = document.querySelectorAll("td");

    lembretes.forEach((lembrete) => {
        const dataLembrete = new Date(lembrete.ano, lembrete.mes, lembrete.dia);
        const dia = dataLembrete.getDate();

        celulas.forEach((celula) => {
            if (parseInt(celula.textContent) === dia) {
                celula.classList.add("lembrete");
                celula.title = lembrete.texto;
            }
        });
    });
}

// Função para preencher os dias do mês (exemplo simples)
function preencherDias() {
    const tabela = document.querySelector("tbody");
    const dataAtual = new Date();
    const ano = dataAtual.getFullYear();
    const mes = dataAtual.getMonth();
    const primeiroDia = new Date(ano, mes, 1);
    const ultimoDia = new Date(ano, mes + 1, 0);

    for (let dia = 1; dia <= ultimoDia.getDate(); dia++) {
        const celula = document.createElement("td");
        celula.textContent = dia;

        // Adicione classes para os fins de semana (sábado e domingo)
        if (primeiroDia.getDay() === 0) {
            celula.classList.add("domingo");
        } else if (primeiroDia.getDay() === 6) {
            celula.classList.add("sabado");
        }

        tabela.appendChild(celula);
        primeiroDia.setDate(primeiroDia.getDate() + 1);
    }
}

preencherDias();
adicionarLembretes();
