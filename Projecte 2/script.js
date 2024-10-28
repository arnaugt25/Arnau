// ----- Calendario -----
const calendarTable = document.getElementById('calendar-table');
const calendarBody = document.getElementById('calendar-body');
const monthYearDisplay = document.getElementById('month-year');

let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// Array para almacenar los eventos (se almacena en localStorage)
let events = JSON.parse(localStorage.getItem("events")) || [];
let likedEvents = JSON.parse(localStorage.getItem("likedEvents")) || [];

// Guardar eventos en localStorage
function saveEvents() {
    localStorage.setItem("events", JSON.stringify(events));
    localStorage.setItem("likedEvents", JSON.stringify(likedEvents));
}

function renderCalendar(month, year) {
    calendarBody.innerHTML = ""; // Limpiar el contenido anterior
    monthYearDisplay.innerText = `${months[month]} ${year}`;

    const firstDay = new Date(year, month).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let date = 1;
    for (let i = 0; i < 6; i++) { // Máximo 6 filas
        let row = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
            let cell = document.createElement("td");

            if (i === 0 && j < firstDay) {
                cell.classList.add("empty"); // Celdas vacías antes del primer día
                cell.innerText = "";
            } else if (date > daysInMonth) {
                cell.classList.add("empty"); // Celdas vacías después del último día
                cell.innerText = "";
            } else {
                cell.innerText = date;

                // Revisar si la fecha actual es el día de hoy
                if (date === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                    cell.classList.add("today");
                }

                // Contar el número de eventos en esta fecha
                const eventDate = `${year}-${String(month + 1).padStart(2, "0")}-${String(date).padStart(2, "0")}`;
                const eventCount = events.filter(event => event.date === eventDate).length;
                
                // Si hay eventos, mostrar el contador
                if (eventCount > 0) {
                    const eventIndicator = document.createElement("span");
                    eventIndicator.classList.add("event-count");
                    eventIndicator.innerText = `+${eventCount}`;
                    cell.appendChild(eventIndicator);
                }

                date++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
    }
}

// Navegación del calendario
document.getElementById('prev-month').addEventListener('click', () => {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    renderCalendar(currentMonth, currentYear);
});

document.getElementById('next-month').addEventListener('click', () => {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    renderCalendar(currentMonth, currentYear);
});

document.getElementById('prev-year').addEventListener('click', () => {
    currentYear--;
    renderCalendar(currentMonth, currentYear);
});

document.getElementById('next-year').addEventListener('click', () => {
    currentYear++;
    renderCalendar(currentMonth, currentYear);
});

// Inicializar el calendario
renderCalendar(currentMonth, currentYear);

document.addEventListener("DOMContentLoaded", () => {
    const loginModal = document.getElementById("login-modal");
    const mainContent = document.getElementById("main-content");
    const loginNextButton = document.getElementById("login-next");
    const loginSubmitButton = document.getElementById("login-submit");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const logoutButton = document.getElementById("logout-button");

    // Verificar si el usuario ya ha iniciado sesión
    let currentUsername = localStorage.getItem("username");
    if (currentUsername) {
        loginModal.classList.add("hidden");
        mainContent.classList.remove("hidden");
    } else {
        loginModal.classList.remove("hidden");
        mainContent.classList.add("hidden");
    }

    // Guardar el nombre de usuario en localStorage al hacer clic en "Next"
    loginNextButton.addEventListener("click", () => {
        const username = usernameInput.value.trim();
        if (username) {
            localStorage.setItem("username", username); // Guardar en localStorage
            currentUsername = username;
            document.getElementById("step1").classList.add("hidden");
            document.getElementById("step2").classList.remove("hidden");
        } else {
            alert("Please enter your username to continue.");
        }
    });

    // Finalizar inicio de sesión
    loginSubmitButton.addEventListener("click", () => {
        const password = passwordInput.value.trim();
        if (password) {
            loginModal.classList.add("hidden");
            mainContent.classList.remove("hidden");
        } else {
            alert("Please enter your password to continue.");
        }
    });

    // ----- Funciones de Publicación -----
    const postButton = document.getElementById("post-button");
    const postInput = document.getElementById("post-input");
    const postDateInput = document.getElementById("post-date");
    const feed = document.getElementById("feed");

    function addPost(content, date, owner) {
        const post = document.createElement("div");
        post.classList.add("post");

        const postHeader = document.createElement("div");
        postHeader.classList.add("post-header");

        const avatar = document.createElement("div");
        avatar.classList.add("post-avatar");
        avatar.innerText = owner.charAt(0).toUpperCase();

        const userInfo = document.createElement("div");
        userInfo.classList.add("post-user-info");

        const username = document.createElement("p");
        username.classList.add("post-username");
        username.innerText = `@${owner}`;

        const postDate = document.createElement("p");
        postDate.classList.add("post-date");
        postDate.innerText = `Event Date: ${date}`;

        userInfo.appendChild(username);
        userInfo.appendChild(postDate);

        postHeader.appendChild(avatar);
        postHeader.appendChild(userInfo);

        const postContent = document.createElement("div");
        postContent.classList.add("post-content");
        const postText = document.createElement("p");
        postText.innerText = content;

        postContent.appendChild(postText);

        const postActions = document.createElement("div");
        postActions.classList.add("post-actions");

        const likeButton = document.createElement("button");
        likeButton.innerHTML = `<i class="far fa-heart"></i>`;
        likeButton.classList.add("like-btn");

        // Verificar si el evento ya ha sido marcado como favorito
        const isLiked = likedEvents.some(event => event.content === content && event.date === date && event.owner === owner);
        if (isLiked) {
            likeButton.classList.add("liked"); // Cambiar estilo cuando está en favoritos
            likeButton.innerHTML = `<i class="fas fa-heart"></i>`;
        }

        likeButton.addEventListener("click", () => {
            const likedEvent = { content, date, owner };
            if (likeButton.classList.contains("liked")) {
                // Quitar de favoritos
                likeButton.classList.remove("liked");
                likeButton.innerHTML = `<i class="far fa-heart"></i>`;
                likedEvents = likedEvents.filter(event => !(event.content === content && event.date === date && event.owner === owner));
            } else {
                // Añadir a favoritos
                likeButton.classList.add("liked");
                likeButton.innerHTML = `<i class="fas fa-heart"></i>`;
                likedEvents.push(likedEvent);
            }
            saveEvents();
        });

        postActions.appendChild(likeButton);

        if (owner === currentUsername) {
            const deleteButton = document.createElement("button");
            deleteButton.innerHTML = `<i class="fas fa-trash-alt"></i>`;
            deleteButton.addEventListener("click", () => {
                events = events.filter(event => !(event.content === content && event.date === date && event.owner === owner));
                saveEvents();
                post.remove();
                renderCalendar(currentMonth, currentYear);
            });
            postActions.appendChild(deleteButton);
        }

        post.appendChild(postHeader);
        post.appendChild(postContent);
        post.appendChild(postActions);

        feed.prepend(post);
    }

    // Evento para publicar
    postButton.addEventListener("click", () => {
        const content = postInput.value.trim();
        const date = postDateInput.value;

        if (!content || !date) {
            alert("Please enter content and select a date for the event.");
            return;
        }

        events.push({ content, date, owner: currentUsername });
        saveEvents();
        addPost(content, date, currentUsername);
        renderCalendar(currentMonth, currentYear);

        postInput.value = "";
        postDateInput.value = "";
    });

    // Cerrar sesión
    logoutButton.addEventListener("click", () => {
        localStorage.clear();
        loginModal.classList.remove("hidden");
        mainContent.classList.add("hidden");
    });

    // Inicializar el calendario y mostrar eventos en el feed
    events.forEach(event => addPost(event.content, event.date, event.owner));
    renderCalendar(currentMonth, currentYear);
});
