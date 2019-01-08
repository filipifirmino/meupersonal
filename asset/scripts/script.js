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

function cadastrar(){
	var user = getElementsByTagName('name-user');
	var email = getElementsByTagName('email-user');
	var senha = getElementsByTagName('pass-user');
	
	if(!empyt == user, email, senha){
		document.write(user, email,senha);
	}

}

