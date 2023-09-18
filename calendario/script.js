document.addEventListener("DOMContentLoaded", function () {
    const countdownDate = new Date("2023-10-10T00:00:00Z").getTime();

    function updateCountdown() {
        const currentDate = new Date().getTime();
        const timeLeft = countdownDate - currentDate;

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
    }

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
            calendar.appendChild(dateCell);
        }
    }

    createCalendar();
    updateCountdown();
    setInterval(updateCountdown, 1000);
});