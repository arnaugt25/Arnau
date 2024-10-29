document.addEventListener("DOMContentLoaded", function() {
    const eventsContainer = document.getElementById("events-container");

    // Función para cargar los posts favoritos de Local Storage
    function loadFavorites() {
        const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

        // Si no hay favoritos, mostrar un mensaje
        if (favorites.length === 0) {
            eventsContainer.innerHTML = "<p class='text-white'>No tienes eventos marcados como favoritos.</p>";
            return;
        }

        // Para cada post en favoritos, crear un elemento HTML y añadirlo al contenedor
        favorites.forEach(post => {
            const favoritePost = document.createElement("div");
            favoritePost.classList.add("post", "p-3", "mb-3", "bg-dark", "text-white", "rounded");

            // Agrega el contenido del post usando el nombre de usuario
            favoritePost.innerHTML = `
                <div class="d-flex align-items-center mb-2">
                    <img src="https://via.placeholder.com/50" alt="User Avatar" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                    <strong>${post.username}</strong>
                </div>
                <p>${post.content}</p>
            `;

            // Añade el post al contenedor de eventos
            eventsContainer.appendChild(favoritePost);
        });
    }

    loadFavorites(); // Llama a la función para cargar los favoritos al cargar la página
});
