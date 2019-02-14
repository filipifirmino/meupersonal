/*//Variaveis que recebem os dados do usuario
var user = getElementsByTagName('user-name');
var pass = getElementsByTagName('user-pass');

//Function que verifica a veracidado dos dados

Function verificaDados (user,pass){
	if (user && pass == true) {
		//Mosta o alerte de logado com sucesso
		alert("Logado com sucesso");
	}else{
		// indica  erro e solicita que o usuario insira seus dados corretos.
		alert("Email ou senha não conferem, tente novamente");

	}
}
*/
/*Graficos*/



             var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });

/*Graficos */

function cadastrar(){
	var user = getElementsByTagName('name-user');
	var email = getElementsByTagName('email-user');
	var senha = getElementsByTagName('pass-user');
	
	if(!empyt == user, email, senha){
		document.write(user, email,senha);
	}

}

function padraosenha(){
	alert("A senha deve conter de 6 a 8 caracteres alfanumericos")
}

