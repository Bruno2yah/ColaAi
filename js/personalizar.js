
	//***********************************
	// Exibir modal de excluir 
	//***********************************
		function modalRemover($id, $elemento){
		const myModal = new bootstrap.Modal('#modalExcluir');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}





	//***********************************
	//atualizar fotop 
	//***********************************
	document.getElementById("foto").addEventListener("change", readImage, false);
		function readImage() {
			if (this.files && this.files[0]) {
				//FileReader é usado para ler arquivos selecionados pelo usuário.
				var file = new FileReader();
				//Esta linha define um evento que será acionado quando o processo de leitura do arquivo estiver concluído
				file.onload = function(e) {
				//Nesta linha, estamos atribuindo o resultado da leitura do arquivo à propriedade src de um elemento HTML com o ID "preview
					document.getElementById("preview").src = e.target.result;
				};
				file.readAsDataURL(this.files[0]);
			}
		}

		$(document).ready(function () {
			$('#myModal').modal('show');
	});


	



	//***********************************
	//Verificar Validações do form bootstrap 
	//***********************************
	
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()