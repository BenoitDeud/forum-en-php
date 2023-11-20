let myCo = document.getElementById("formulaireConnexion");

myCo.addEventListener('submit', function (e) {

    let myEmai = document.getElementById("mai"); /*page de connexion */
    let adressMail = localStorage.getItem('mail');/* index*/
    console.log(adressMail);

    if (myEmai.value == "") {
        let myTrois = document.getElementById("trois");
        myTrois.innerHTML = " Veuillez remplir le champ mail";
        myTrois.style.color = 'red';
        myTrois.style.fontStyle = "italic";
        e.preventDefault("");

    } // regex mail 
    else if (myEmai.value !== adressMail) {
        let myError = document.getElementById("trois");
        myError.innerHTML = " l'identifiant n'a pas été reconnu";
        myError.style.color = 'red';
        myError.style.fontStyle = "italic";
        e.preventDefault("");
    } else {
        let myError = document.getElementById("trois");
        myError.innerHTML = " Sauce Andalouse";
        myError.style.color = 'green';
        myError.style.fontStyle = "italic";
      };

    //Mot de passe
    let myMdp = document.getElementById("motDP"); /*page connexion*/
    let motDePasse = localStorage.getItem('mdps');/*page index*/
    console.log(motDePasse);

    if (myMdp.value == "") {
        let myQuatre = document.getElementById("quatre");
        myQuatre.innerHTML = " Veuillez remplir le champ mot de passe";
        myQuatre.style.color = 'red';
        myQuatre.style.fontStyle = "italic";
        e.preventDefault("");

    }// regex Mdps 
    else if (myMdp.value !== motDePasse) {
        let myError = document.getElementById("quatre");
        myError.innerHTML = " Le mot de passe ne correspond pas";
        myError.style.color = 'red';
        myError.style.fontStyle = "italic";
        e.preventDefault("");
    }else {
        let myError = document.getElementById("quatre");
        myError.innerHTML = " Sauce barbecue";
        myError.style.color = 'green';
        myError.style.fontStyle = "italic";
      };
});