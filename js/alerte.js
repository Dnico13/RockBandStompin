


function del(){
     return confirm("Etes  vous certain de supprimer cet Elément?");
};

function mod(){
    return confirm("Merci de confirmer l'envoi des données?");
};

function deco(){
      return confirm(" Etes vous certain de vous déconnecter ?");
};

function send(){
    if (  confirm (" Votre message est pret a partir ?")){
          alert(" Votre message a bien été envoyé. Nous prendrons contact dans les plus brefs delais.");
    } else{
        return false;
    }
     
};

function sendContact() {
    return confirm("Confirmez-vous l'envoi de votre demande ?");

    
}