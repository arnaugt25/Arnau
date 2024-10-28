document.addEventListener("DOMContentLoaded", () => {
    const profileName = document.getElementById("profile-name");
    const profileAvatarLarge = document.getElementById("profile-avatar-large");
    const profileUsername = document.getElementById("username");
    const fullName = document.getElementById("full-name");
    const logoutButton = document.getElementById("logout-button");

    // Verificar si el usuario ha iniciado sesión
    const currentUsername = localStorage.getItem("username");
    if (!currentUsername) {
        window.location.href = "index.html"; // Redirigir a la página de inicio de sesión
        return;
    }

    // Actualizar los elementos con el nombre de usuario
    profileName.innerText = currentUsername;
    profileAvatarLarge.innerText = currentUsername.charAt(0).toUpperCase();
    fullName.innerText = currentUsername;
    profileUsername.innerText = `@${currentUsername.toLowerCase().replace(/\s+/g, '')}`;

    // Cerrar sesión
    logoutButton.addEventListener("click", () => {
        localStorage.clear(); // Eliminar todos los datos de localStorage
        window.location.href = "index.html"; // Redirigir a la página de inicio de sesión
    });
});
