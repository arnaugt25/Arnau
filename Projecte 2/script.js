document.addEventListener("DOMContentLoaded", function() {
    let username = ''; // Variable para almacenar el nombre de usuario

    // Modal de inicio de sesión
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'), {
        backdrop: 'static',
        keyboard: false
    });
    
    // Abrir el modal de inicio de sesión automáticamente
    loginModal.show();

    const btnSiguiente = document.getElementById("btn-siguiente");
    const usernameInput = document.getElementById("username-input");
    const postButton = document.getElementById("post-button");
    const postInput = document.getElementById("post-input");
    const dateInput = document.getElementById("date-input");
    const postsContainer = document.getElementById("posts-container");

    // Guardar el nombre de usuario en Local Storage cuando el usuario inicia sesión
    btnSiguiente.addEventListener("click", function() {
        username = usernameInput.value.trim();
        if (username) {
            localStorage.setItem("username", username); // Guardar el nombre de usuario
            loginModal.hide();
        } else {
            alert("Por favor, ingresa un nombre de usuario.");
        }
    });

    // Evento al hacer clic en el botón "Postear"
    postButton.addEventListener("click", function() {
        const postContent = postInput.value.trim();
        const postDate = dateInput.value;

        // Verificar si hay contenido en el campo de entrada y una fecha seleccionada
        if (postContent && postDate) {
            // Formatear la fecha seleccionada
            const formattedDate = new Date(postDate).toLocaleDateString("es-ES", {
                year: "numeric",
                month: "long",
                day: "numeric"
            });

            // Crear el nuevo post con el contenido, el nombre de usuario y la fecha
            const newPost = document.createElement("div");
            newPost.classList.add("post", "p-3", "mb-3", "bg-dark", "text-white", "rounded");

            // Agregar el contenido del post con la fecha al lado del título
            newPost.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/50" alt="User Avatar" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                        <strong>${username} - <span class="text-light">${formattedDate}</span></strong>
                    </div>
                    <button class="btn btn-outline-light btn-heart"><i class="far fa-heart"></i> Me gusta</button>
                </div>
                <p>${postContent}</p>
            `;

            // Añadir el nuevo post al contenedor de posts
            postsContainer.prepend(newPost);

            // Añadir evento de "Me gusta" al botón de corazón
            const heartButton = newPost.querySelector('.btn-heart');
            heartButton.addEventListener("click", function() {
                const icon = heartButton.querySelector("i");
                if (icon.classList.contains("far")) {
                    icon.classList.replace("far", "fas");
                    heartButton.classList.replace("btn-outline-light", "btn-danger");

                    // Guardar el post en Local Storage
                    saveToFavorites({ username, content: postContent, date: formattedDate });
                } else {
                    icon.classList.replace("fas", "far");
                    heartButton.classList.replace("btn-danger", "btn-outline-light");

                    // Eliminar el post de Local Storage
                    removeFromFavorites(postContent);
                }
            });

            // Limpiar el campo de entrada y el selector de fecha
            postInput.value = "";
            dateInput.value = "";
        }
    });

    // Función para guardar un post en Local Storage
    function saveToFavorites(post) {
        let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
        favorites.push(post);
        localStorage.setItem("favorites", JSON.stringify(favorites));
    }

    // Función para eliminar un post de Local Storage
    function removeFromFavorites(content) {
        let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
        favorites = favorites.filter(post => post.content !== content);
        localStorage.setItem("favorites", JSON.stringify(favorites));
    }
});
