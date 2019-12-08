window.onload = function(e) {
	fetch(
		'http://localhost:8080/SuSaude/paciente', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(paciente => {  
			var table = document.querySelector('#tablePaciente');
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var cpfColuna = row.insertCell(2); 
			idColuna.innerHTML = paciente.id;
			nomeColuna.innerHTML = paciente.nome;
			cpfColuna.innerHTML = paciente.cpf
		})
	}).catch(error => console.error(error))

	fetch(
		'http://localhost:8080/SuSaude/hospital', {
    }).then(response => response.json())
	.then(data => { 
		console.log(data);
		data.forEach(hospital => {
			var table = document.querySelector('#tableHospital');
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var enderecoColuna = row.insertCell(2); 
			var avaliacaoColuna = row.insertCell(3); 
			idColuna.innerHTML = hospital.id;
			nomeColuna.innerHTML = hospital.nome;
			enderecoColuna.innerHTML = hospital.endereco;
			avaliacaoColuna.innerHTML = hospital.avaliacao;
		})
	}).catch(error => console.error(error))
	
	fetch(
		'http://localhost:8080/SuSaude/paciente', {			
		}).then(response => response.json())
		.then(data => {
			console.log(data);
			data.forEach(paciente => {
				var ul = document.querySelector('#alterPaciente')
      	var li = createNode('li'),
          	span = createNode('span');
						span.innerHTML = `${paciente.nome} ${paciente.cpf}`;
						append(li, span);
						append(ul, li);
      });
    }  
  )  
  .catch(function(err) {  
    console.error('Fetch Error -', err);
  });
}

function enviarForm() {
	var form = document.querySelector('#adicionarHospital');
	var data = {};
	data['nome'] = form.nome.value
	data['endereco'] = form.cnpj.endereco;
	data['avaliacao'] = form.avaliacao.value;
	// console.log(JSON.stringify(data));
	fetch('http://localhost:8080/SuSaude/hospital', {
		method: 'POST',
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}

function voltar() {
	window.history.back();
}

function go() {
	window.history.go();
}

function pegarValor() {
	var valorCard = document.querySelector("a.card").properties.value();
	console.log(valorCard);
}

document.querySelector('.collapse').collapse();