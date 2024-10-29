document.addEventListener("DOMContentLoaded", function() {
    const calendar = document.getElementById("calendar");
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    function renderCalendar(month, year) {
        // Meses y días de la semana
        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        const dayNames = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];

        // Calcular el primer día del mes
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Header del calendario
        calendar.innerHTML = `
            <div class="calendar-header">
                <button id="prev-month">&#9664;</button>
                <span>${monthNames[month]} ${year}</span>
                <button id="next-month">&#9654;</button>
            </div>
            <table>
                <thead>
                    <tr>${dayNames.map(day => `<th>${day}</th>`).join('')}</tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        `;

        // Añadir eventos de clic para cambiar el mes
        document.getElementById("prev-month").addEventListener("click", () => changeMonth(-1));
        document.getElementById("next-month").addEventListener("click", () => changeMonth(1));

        // Generar los días
        const tbody = calendar.querySelector("tbody");
        let date = 1;
        for (let i = 0; i < 6; i++) { // Máximo 6 semanas
            const row = document.createElement("tr");

            for (let j = 0; j < 7; j++) {
                const cell = document.createElement("td");

                // Ajuste para que el lunes sea el primer día
                const adjustedDay = (firstDay === 0 ? 6 : firstDay - 1);
                
                if (i === 0 && j < adjustedDay) {
                    cell.innerHTML = "";
                } else if (date > daysInMonth) {
                    break;
                } else {
                    cell.innerHTML = date;
                    date++;
                }
                row.appendChild(cell);
            }
            tbody.appendChild(row);
        }
    }

    function changeMonth(step) {
        currentMonth += step;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear -= 1;
        } else if (currentMonth > 11) {
            currentMonth = 0;
            currentYear += 1;
        }
        renderCalendar(currentMonth, currentYear);
    }

    renderCalendar(currentMonth, currentYear);
});
