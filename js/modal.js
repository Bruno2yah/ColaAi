	//***********************************
	// Exibir modal de excluir 
	//***********************************
  function modalRemover($id, $elemento){
		const myModal = new bootstrap.Modal('#modalExcluir');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}


    
  $(document).ready(function() {
    $('#modalPadrao').modal('show');
  });

