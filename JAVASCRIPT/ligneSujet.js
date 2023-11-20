// event clique local storage ajoute une ligne avec un lien cliquable
let ajouterUneLigne = document.getElementById("ajouterLigne")
let numeroLigne = 1

ajouterUneLigne.addEventListener('submit', function (e) {

    // empeche l'envoi du formulaire
    e.preventDefault("");

    //recup du sujet pour le rendre vide après la saisie
    let sujetVide = document.getElementById("sujet");

    // faire en sorte que le sujet ne s'envoie pas vide étape 1
    let subject = sujetVide.value.trim();

    //étape 2 on compare le sujet et si il n'est pas vide on l'enregistre dans le local storage et on applique le reste
    if (subject !== "") {
        localStorage.setItem("sujet", subject);


        // récup l'id du tableau
        let tableau = document.getElementById("tableau");

        // insert une la ligne du tableau à la fin du tableau
        let row = tableau.insertRow(-1);

        // les lignes qui seront ajoutées
        let cell0 = row.insertCell(0);
        let cell1 = row.insertCell(1);
        let cell2 = row.insertCell(2);
        let cell3 = row.insertCell(3);

        // création d'un lien pour l'associer avec le sujet
        let lien = document.createElement('a');
        lien.classList = ("sujet1")
        lien.href = "/HTML/commentaireSalade.html";
        lien.textContent = subject;

        // accrémentation et association de la cellule avec le numero
        cell0.textContent = numeroLigne;
        numeroLigne++;

        // association des cellules avec les données à renvoyer dans le tableau
        cell1.appendChild(lien);
        cell2.textContent = new Date().toLocaleDateString();
        cell3.textContent = localStorage.getItem('prenom') + (" ") + localStorage.getItem("nom");

        //nettoyage du champ sujet après la saisie
        sujetVide.value = "";

        //enlever l'erreur de saisie
        let myError = document.getElementById("error");
        myError.innerHTML = "";

    } else { // en cas de nom saisie de sujet 
        let myError = document.getElementById("error");
        myError.innerHTML = " Veuillez écrire le nom de votre sujet";
        myError.style.color = 'red';
        myError.style.fontStyle = "italic";
    }
});




