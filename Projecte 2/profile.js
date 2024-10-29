document.addEventListener("DOMContentLoaded", function() {
    // Elementos de perfil en la página
    const profileName = document.getElementById("profile-name");
    const profileUsername = document.getElementById("profile-username");
    const tweetUsername = document.getElementById("tweet-username");
    const tweetHandle = document.getElementById("tweet-handle");
    const logoutButton = document.getElementById("logout-button");

    // Verificar si hay un usuario guardado en el localStorage
    let username = localStorage.getItem("username");
    if (!username) {
        // Si no hay usuario, redirigir al inicio de sesión
        window.location.href = "index.html";
    } else {
        // Mostrar el nombre de usuario en el perfil
        profileName.textContent = username;
        profileUsername.textContent = `@${username.toLowerCase()}`;
        tweetUsername.textContent = username;
        tweetHandle.textContent = username.toLowerCase();
    }

    // Función para cerrar sesión
    logoutButton.addEventListener("click", function() {
        localStorage.removeItem("username"); // Eliminar usuario de localStorage
        window.location.href = "index.html"; // Redirigir al inicio de sesión
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const profileImg = document.getElementById("profile-img");
    const bannerImg = document.getElementById("banner-img");
    const profileInput = document.getElementById("profile-input");
    const bannerInput = document.getElementById("banner-input");
    const changeProfileBtn = document.getElementById("change-profile");
    const changeBannerBtn = document.getElementById("change-banner");

    // Cargar imágenes de localStorage al cargar la página
    const storedProfileImg = localStorage.getItem("profileImg");
    const storedBannerImg = localStorage.getItem("bannerImg");

    if (storedProfileImg) {
        profileImg.src = storedProfileImg;
    }
    if (storedBannerImg) {
        bannerImg.src = storedBannerImg;
    }

    // Cambiar imagen de perfil
    changeProfileBtn.addEventListener("click", () => profileInput.click());
    profileInput.addEventListener("change", function() {
        const file = profileInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImg.src = e.target.result;
                localStorage.setItem("profileImg", e.target.result); // Guardar en localStorage
            };
            reader.readAsDataURL(file);
        }
    });

    // Cambiar imagen de banner
    changeBannerBtn.addEventListener("click", () => bannerInput.click());
    bannerInput.addEventListener("change", function() {
        const file = bannerInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                bannerImg.src = e.target.result;
                localStorage.setItem("bannerImg", e.target.result); // Guardar en localStorage
            };
            reader.readAsDataURL(file);
        }
    });
});
