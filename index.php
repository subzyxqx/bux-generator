<?php

error_reporting(0);

// require_once 'validar.php';

// $expiracao = $expira;

// $tokenizador = mt_rand();

// $tokenuser = md5($tokenizador);

// $lastLogin = "Sem informação!";

// $randomBytes = random_bytes(256);

// $base64Value = base64_encode($randomBytes);

// $username = md5(basename(__DIR__));

?>
<script type="text/javascript">
	var custo = "0";
	var descricao_chk = "Checker ALLBINS PRE-AUTH (Gate Amazon)";
	var audio = new Audio('live.mp3');
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Checker GG's | 38hx</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<style type="text/css">
		.nav-tabs{
			background-color:#232b4a;
		}
		.nav-tabs li a{
			color: #fff;
		}
		.tab-content{
			background-color:#0d0e24;
			color:#fff;
			padding:5px
		}
		.nav-tabs > li > a{
			border: medium none;
		}
		.nav-tabs > li > a:hover{
			background-color: #0d0e24 !important;
			border: medium none;
			border-radius: 0;
			color:#fff;
		}
		.active {
			background-color: #0d0e24 !important;
		}
		textarea{
			background: #232b4a;
			color: #fff;
			border: none;
			width: 100%;
			border: none;
			padding: 10px;
			resize: none;
		}
		textarea:focus{
			box-shadow: 0 0 0 0;
			border: 0 none;
			outline: 0;
		}
		.cookie-input {
			background: #14192e;
			color: #fff;
			border: none;
			width: 100%;
			border: none;
			padding: 10px;
			resize: none;
		}
		.cookie-input:focus {
			box-shadow: 0 0 0 0;
			border: 0 none;
			outline: 0;
		}
		.cookie-submit-btn {
			background-color: #0d0e24;
		}
		.cookie-submit-btn:hover {
			background-color: #14192e;
		}
		
		button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

button:hover {
  background-color: #45a049;
}
		
	</style>
</head>
<body style="background: #14192e;" class="p-3">
    
    <input type="hidden" value="<?php echo $base64Value; ?>" name="token_api" id="token_api">
    
	<div class="container p-0">
		<a href="../../" class="btn btn-dark shadow" style="background: #0d0e24;"><i class="fas fa-sign-out-alt"></i> Voltar</a>
	</div>
	<div class="container text-white rounded shadow p-3 my-4" style="background: #232b4a;">
		<!-- descrição -->
		<div class="container-fluid">
			<h3><i class="fas fa-cogs"></i> Checker GG"s | 38hx </h3>
			<span><b>Usuário: <?php echo $username; ?> | 38hx <?php echo $expira; ?> | ∞ <?php echo $lastLogin; ?></b></span>
		</div>
		<!-- botoes de ação -->
		<div class="container-fluid mt-3">
			<div class="buttons">
				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-start"><i class="fas fa-play"></i> Iniciar</button>
				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-pause" disabled><i class="fas fa-pause"></i> Pausar</button>
				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-stop" disabled><i class="fas fa-stop"></i> Parar</button>
				<button class="btn btn-dark" style="background: #0d0e24;" id="chk-clean"><i class="fas fa-trash-alt"></i> Limpar</button>
				<!--<button class="btn btn-dark" style="background: #0d0e24;" onclick="window.location.href = './salvarCookie.php'"><i class="fas fa-link"></i> Menu de Cookies </button>-->
			</div>
		</div>
		<!-- status do checker -->
		<div class="container-fluid mt-3">
			<span class="badge badge-warning" id="estatus">Aguardando inicio...</span>
		</div>
	</div>

	<!-- tabs -->
	<div class="container p-0 shadow">
		<ul class="nav nav-tabs" id="myTab" role="tablist" style="border: none;">
			<li class="nav-item">
				<a class="nav-link active" style="border: none;" id="home-tab" data-toggle="tab" href="#chk-home" role="tab" aria-controls="home" aria-selected="true"><i class="far fa-credit-card" style="color: #fff;"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="profile-tab" data-toggle="tab" href="#chk-lives" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-thumbs-up fa-lg" style="color: #fff;"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-dies" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-thumbs-down fa-lg" style="color: #fff;"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" style="border: none;" id="contact-tab" data-toggle="tab" href="#chk-errors" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-times fa-lg" style="color: #fff;"></i></a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<!-- HOME DO CHECKER -->
			<div class="tab-pane fade show active px-3 pt-4 pb-3" id="chk-home" role="tabpanel" aria-labelledby="home-tab">
				<div class="my-2">
					Aprovadas: <span class="val-lives" style="font-weight: bold;">0</span>
					Reprovadas: <span class="val-dies" style="font-weight: bold;">0</span>
					Errors: <span class="val-errors" style="font-weight: bold;">0</span>
					Testadas: <span class="val-tested" style="font-weight: bold;">0</span>
					Total: <span class="val-total" style="font-weight: bold;">0</span>
				</div>
				<!--<div class="container-fluid p-0 mt-2">-->
				<!--	<input type="text" id="cookie-input" placeholder="INSIRA COOKIE : AMAZON AL [ WALLET ]" class="cookie-input rounded shadow">-->
				<!--</div>-->
				<div class="container-fluid p-0 mt-2">
					<input type="text" id="cookie-input-2" placeholder="INSIRA COOKIE : AMAZON.COM" class="cookie-input rounded shadow">
				</div>
				<div class="container-fluid p-0 mt-2">
					<textarea id="lista_cartoes" placeholder="Insira sua lista..." rows="10" cols="rounded shadow"></textarea>
				</div>
			</div>
			
    			<script>
function apagarValoresLives() {
  var tabela = document.getElementById("lives");
  tabela.innerHTML = "";
}
</script>
			
			<!-- LIVES DO CHECKERS -->
			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-lives" role="tabpanel" aria-labelledby="home-tab">
				<h5>Aprovadas</h5>
				<span>Total: <span class="val-lives">0</span></span>
				<br>
				<button class="btn btn-dark" style="background: #0d0e24;" id="copyButton"><i class="fas fa-copy"></i></button>
				<button class="btn btn-dark" style="background: #0d0e24;" onclick="apagarValoresLives()"><i class="fas fa-trash-alt"></i></button>
				<br>
				<div id="lives" style="overflow:auto;">
				</div>
			</div>
			
				<script>
        const copyButton = document.getElementById('copyButton');
        const livesDiv = document.getElementById('lives');

        copyButton.addEventListener('click', () => {
            const range = document.createRange();
            range.selectNode(livesDiv);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);

            try {
                const successful = document.execCommand('copy');
                const message = successful ? 'Copiado para a área de transferência!' : 'Não foi possível copiar.';
                console.log(message);
            } catch (err) {
                console.error('Erro ao copiar: ', err);
            }

            window.getSelection().removeAllRanges();
        });
    </script>
			
			<script>
function apagarValoresDies() {
  var tabela = document.getElementById("dies");
  tabela.innerHTML = "";
}
</script>

			<script>
function apagarValoresErrors() {
  var tabela = document.getElementById("errors");
  tabela.innerHTML = "";
}
</script>
			
			<!-- DIES DO CHECKER -->
			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-dies" role="tabpanel" aria-labelledby="home-tab">
				<h5>Reprovadas</h5>
				<span>Total: <span class="val-dies">0</span></span>
				<br>
				<button class="btn btn-dark" style="background: #0d0e24;" onclick="apagarValoresDies()"><i class="fas fa-trash-alt"></i></button>
				<br>
				<div id="dies" style="overflow:auto;">
				</div>
			</div>
			<!-- ERRORS DO CHECKER -->
			<div class="tab-pane fade show px-3 pt-4 pb-3" id="chk-errors" role="tabpanel" aria-labelledby="home-tab">
				<h5>Erros</h5>
				<span>Total: <span class="val-errors">0</span></span>
				<br>
				<button class="btn btn-dark" style="background: #0d0e24;" onclick="apagarValoresErrors()"><i class="fas fa-trash-alt"></i></button>
				<br>
				<div id="errors" style="overflow:auto;">
				</div>
			</div>
			<!-- INFO DO CHECKER -->
		</div>	
	</div>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<!-- toastr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	
	 <!--<script>-->
  <!--      function contarLinhas(textarea) {-->
  <!--          const lines = textarea.value.split("\n");-->
  <!--          return lines.length;-->
  <!--      }-->

  <!--      function verificarLinhas() {-->
  <!--          const textarea = document.getElementById("lista_cartoes");-->
  <!--          const numLinhas = contarLinhas(textarea);-->

  <!--          if (numLinhas > 500) {-->
  <!--              alert("Limite ultrapassado de linhas.");-->
  <!--          }-->
  <!--      }-->
  <!--  </script>-->
	
<script type="text/javascript">
	$(document).ready(function() {
		// variaveis de informação
		var testadas = [];
		var total = 0;
		var tested = 0;
		var lives = 0;
		var dies = 0;
		var errors = 0;
		var stopped = true;
		var paused = true;
        var token_api = document.getElementById("token_api").value;
        // var selectedApi = $("#apiSelector").val();

		function removelinha() {
			var lines = $("textarea").val().split('\n');
			lines.splice(0, 1);
			$("textarea").val(lines.join("\n"));
		}

		function testar(tested, total, lista) {
			// verifica se nao está parado o checker
			if (stopped == true) {
				return false;
			}

			// verifica se nao está pausado o checker
			if (paused == true) {
				return false;
			}

			// verifica se ja terminou de testar
			if (tested >= total) {
				console.log('finalizado ' + tested + " de " + total);
				$("#estatus").attr("class", "badge badge-success").text("Teste finalizado");
				toastr["success"]("Teste de " + total + " itens finalizado");
				$("#chk-start").removeAttr('disabled');
				$("#chk-clean").removeAttr('disabled');
				$("#chk-stop").attr("disabled", "true");
				$("#chk-pause").attr("disabled", "true");
				return false;
			}

			// conteudo que será testado
			var conteudo = lista[tested];
// 			var parametroLista = conteudo + '|' + valorCookie;
            var token_api = document.getElementById("token_api").value;
            var inputElement = document.getElementById('cookie-input-2');
            var cookieValue = inputElement.value.trim();

            $.ajax({
                url: 'api.php',
                type: 'GET',
                // data: { lista: conteudo, token_api: token_api, cookie: cookieValue },
                data: { lista: conteudo, token_api: token_api, cookie: cookieValue},
			})
			.done(function(response) {
				// verifica se nao está parado o checker
				if (stopped == true) {
					return false;
				}

				// verifica se nao está pausado o checker
				if (paused == true) {
					return false;
				}

				tested++;

				// verifica o retorno
				if (response.indexOf("Aprovada") >= 0) {
					lives++
					$("#estatus").attr("class", "badge badge-success").text(conteudo + " -> LIVE");
					toastr["success"]("Aprovada! " + conteudo);
					$("#lives").append(response + "<br>");
					audio.play();
				} else if (response.indexOf("Reprovada") >= 0) {
					dies++
					$("#estatus").attr("class", "badge badge-danger").text(conteudo + " -> DIE");
					toastr["error"]("Reprovada! " + conteudo);
					$("#dies").append(response + "<br>");
				} else {
					errors++;
					$("#estatus").attr("class", "badge badge-warning").text(conteudo + " -> ERROR");
					toastr["warning"]("Ocorreu um erro! " + conteudo);
					$("#errors").append(response + "<br>");
				}

				// atualiza resultados
				$(".val-total").text(total);
				$(".val-lives").text(lives);
				$(".val-dies").text(dies);
				$(".val-errors").text(errors);
				$(".val-tested").text(tested);

				// remove linha
				removelinha();
				console.log(response);

				// executa a função novamente
				testar(tested, total, lista);
			})
			.fail(function() {
				return false;
			})
		}

		// ========== START ========== //
		function start() {
			var lista = $("textarea").val().trim().split('\n');
// 			var valorCookie = "cookie1-" + $("#cookie-input").val().trim() + "-cookie1|cookie2-" + $("#cookie-input-2").val().trim() + "-cookie2";
			var total = lista.length;

			$(".val-total").text(total);
			stopped = false;
			paused = false;
			toastr["success"]("Checker Iniciado.");
			$("#estatus").attr("class", "badge badge-success").text("Checker iniciado, aguarde...");

			// Libera os botões
			$("#chk-stop").removeAttr('disabled');
			$("#chk-pause").removeAttr('disabled');
			$("#chk-start").attr("disabled", "true");
			$("#chk-clean").attr("disabled", "true");

			// Inicia o teste
			testar(tested, total, lista);
		}


		$("#chk-start").click(function() {
			if ($('textarea').val().trim() == "") {
				$('textarea').focus();
			} else {
				start();
			}
		});

		// ========== PAUSE ========== //
		function pause() {
			$("#chk-start").removeAttr('disabled');
			$("#chk-pause").attr("disabled", "true");
			paused = true;
			console.log('checker pausado');
			toastr["info"]("Checker Pausado!");
			$("#estatus").attr("class", "badge badge-info").text("Checker pausado...");
		}

		$("#chk-pause").click(function() {
			pause();
		});

		// ========== STOP ========== //
		function stop() {
			stopped = true;
			$("#chk-start").removeAttr('disabled');
			$("#chk-clean").removeAttr('disabled');
			$("#chk-stop").attr("disabled", "true");
			$("#chk-pause").attr("disabled", "true");
			console.log('checker parado');
			toastr["info"]("Checker Parado!");
			$("#estatus").attr("class", "badge badge-secondary").text("Checker parado...");
		}

		$("#chk-stop").click(function() {
			stop();
		});

		// ========== CLEAN ========== //
		function clean() {
			testadas = [];
			total = 0;
			tested = 0;
			lives = 0;
			dies = 0;
			errors = 0;
			stopped = true;

			// atualiza resultados
			$(".val-total").text(total);
			$(".val-lives").text(lives);
			$(".val-dies").text(dies);
			$(".val-errors").text(errors);
			$(".val-tested").text(tested);
			$("textarea").val("");
			toastr["info"]("Checker Limpo!");
		}

		$("#chk-clean").click(function() {
			clean();
		});
	});
	
    // $(function() {
    //     // Carrega os valores salvos do localStorage quando a página é carregada
    //     var cookie1 = localStorage.getItem('cookie1');
    //     var cookie2 = localStorage.getItem('cookie2');

    //     if (cookie1 !== null) $('#cookie-input').val(cookie1);
    //     if (cookie2 !== null) $('#cookie-input-2').val(cookie2);

    //     // Salva os valores no localStorage sempre que eles são alterados
    //     $('#cookie-input').on('input', function() {
    //         localStorage.setItem('cookie1', $(this).val());
    //     });

    //     $('#cookie-input-2').on('input', function() {
    //         localStorage.setItem('cookie2', $(this).val());
    //     });
    // });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
