function createCalendar() {
    const calendar = document.getElementById("calendar");
    const currentDate = new Date();
    const currentMonth = currentDate.getMonth();
    const daysInMonth = new Date(currentDate.getFullYear(), currentMonth + 1, 0).getDate();
    const firstDayOfMonth = new Date(currentDate.getFullYear(), currentMonth, 1).getDay();

    for (let i = 0; i < firstDayOfMonth; i++) {
        const emptyCell = document.createElement("div");
        emptyCell.classList.add("date-cell", "disabled");
        calendar.appendChild(emptyCell);
    }

    for (let i = 1; i <= daysInMonth; i++) {
        const dateCell = document.createElement("div");
        dateCell.textContent = i;
        dateCell.classList.add("date-cell");

        if (i === currentDate.getDate() && currentMonth === currentDate.getMonth()) {
            dateCell.classList.add("current-day");
        }

        if (i === 17) {
            dateCell.classList.add("highlighted"); // Adiciona a classe "highlighted" para o dia 17.
        }

        calendar.appendChild(dateCell);
    }
}

function updateCountdown() {
    const currentDate = new Date();
    const targetDate = new Date("2023-10-17T00:50:07Z");

    if (currentDate < targetDate) {
        const timeLeft = targetDate - currentDate;

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("countdown-timer").textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    } else {
        document.getElementById("countdown-timer").textContent = "Já chegou o dia 17!";
    }
}

createCalendar();
updateCountdown();
setInterval(updateCountdown, 1000);