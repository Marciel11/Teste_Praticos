
// função calcula prazo, para aluno 5 dias e professor 10 dias
function valida_prazo(){
		var select = document.getElementById('acao').value
		if ('Aluno' == select) {
			var hoje = new Date();
			var cinco = new Date();
			cinco.setDate(hoje.getDate()+5);
			var dia = cinco.getDate();
			var mes = cinco.getMonth()+1; 
			var ano = cinco.getFullYear();
			if(dia<10){
				dia='0'+dia
			} if(mes<10){
				mes='0'+mes
			}
			hoje = ano+'-'+mes+'-'+dia;
			document.getElementById("dt_devolucao").value = hoje
			document.getElementById("dt_devolucao").readOnly = true;
			document.getElementById("tipo_usuario").value = 'Em andamento'

		} else if ('Professor' == select) {
			var hoje = new Date();
			var dez = new Date();
			dez.setDate(hoje.getDate()+10);
			var dia = dez.getDate();
			var mes = dez.getMonth()+1; 
			var ano = dez.getFullYear();
			if(dia<10){
				dia='0'+dia
			} if(mes<10){
				mes='0'+mes
			}

			hoje = ano+'-'+mes+'-'+dia;
			document.getElementById("dt_devolucao").value = hoje
			document.getElementById("dt_devolucao").readOnly = true;
			document.getElementById("tipo_usuario").value = 'Em andamento'
		}
	}