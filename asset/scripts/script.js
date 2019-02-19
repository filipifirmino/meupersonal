
/*Graficos*/
var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart (ctx, {
                    //Tipo do grafico 
                    type: 'line',
                    //Dados dos graficos
                    data: {
                        labels: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out", "Nov", "Dez"],
                            datasets: [
                                {
                                label: "TAXAS DE CONVERÇÃO - 2018",
                                data: [5,10,12,68,15,44,09,22,13,10,5,91],
                                borderWidth:1,
                                borderColor: 'rgba(77,166,253,0.85)',
                                backgroundColor: 'transparent',

                                },
                                {
                                label: "TAXAS DE CONVERÇÃO - 2019", // titulo do grafico
                                data: [9,10,18,68,18,44,15,22,100,10,90,91], // Indices de aferimento
                                borderWidth:1, // Espessura da linha
                                borderColor: 'rgba(19,160,13,0.85)', // Cor da linha do grafico
                                backgroundColor: 'transparent' // Cor de fundo do objeto.
                                },
                                {
                                label: "TAXAS DE CONVERÇÃO - 2017",
                                data: [1,10,20,68,50,44,55,55,100,60,90,100],
                                borderWidth:1,
                                borderColor: 'rgba(255, 0, 0,0.85)',
                                backgroundColor: 'transparent'
                                }
                                ]
                

                    },
                    //Configuraçãos das options aqui
                    option:{

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

