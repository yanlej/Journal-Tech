// Fonction qui permet d'avoir une preview sur le formulaire publier
function refreshIMG(){
    var preview = document.getElementById("preview").value;
    document.getElementById("ImgPreview").src = preview;
    
}
document.querySelector('form').addEventListener('change', refreshIMG);

// Fonction de validation du formulaire bootstrap

(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')
  
    
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()