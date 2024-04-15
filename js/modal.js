	//***********************************
	// Exibir modal de excluir 
	//***********************************
  function modalRemover($id, $elemento){
		const myModal = new bootstrap.Modal('#modalExcluir');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}

	function modalInfo($id, $elemento){
		const myModal = new bootstrap.Modal('#modalInfo');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}

	function modalAceitar($id, $elemento){
		const myModal = new bootstrap.Modal('#modalAceitar');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}
	function modalRestaurar($id, $elemento){
		const myModal = new bootstrap.Modal('#modalRestaurar');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}
  $(document).ready(function() {
    $('#modalPadrao').modal('show');
  });

