function montrerMdp() {
    var mdpField = document.getElementById("mdp");
    var showPasswordCheckbox = document.getElementById("showPassword");

    // Change le type de champ de mot de passe en texte si la case est cochée
    if (showPasswordCheckbox.checked) {
        mdpField.type = "text"; // Affiche le mot de passe en texte
    } else {
        mdpField.type = "password"; // Masque le mot de passe
    }
}

function checkPassword() {
    const password = document.getElementById("mdp").value;

    // Exigences
    const minLength = password.length >= 8;
    const maxLength = password.length <= 20;
    const hasLowercase = /[a-z]/.test(password);
    const hasUppercase = /[A-Z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSpecial = /[!£$€]/.test(password);

    // Vérifie chaque condition et met à jour les styles
    document.getElementById("length").style.color = minLength ? "green" : "red";
    document.getElementById("maxLength").style.color = maxLength ? "green" : "red";
    document.getElementById("lowercase").style.color = hasLowercase ? "green" : "red";
    document.getElementById("uppercase").style.color = hasUppercase ? "green" : "red";
    document.getElementById("number").style.color = hasNumber ? "green" : "red";
    document.getElementById("special").style.color = hasSpecial ? "green" : "red";

        // Vérification globale de la validité du mot de passe
        const isValid = minLength && maxLength && hasLowercase && hasUppercase && hasNumber && hasSpecial;

        // Récupérer le bouton d'envoi
        const submitButton = document.querySelector('button[type="submit"]');
    
        // Activer ou désactiver le bouton d'envoi selon la validité
        submitButton.disabled = !isValid;
}