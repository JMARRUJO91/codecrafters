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

createCalendar();
updateCountdown();
setInterval(updateCountdown, 1000);
