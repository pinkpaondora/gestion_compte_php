// validation envoie des données

function confirmationEnvoi() {
  if (confirm("Êtes-vous sûr de vouloir envoyer ce formulaire ?")) {
    
  } else {
    
    event.preventDefault();
  }
}


document.getElementById("myForm").addEventListener("submit", function() {
  window.location.href = "formulaire.html";
});