<?php 
require_once("cabecalho.php");
$data_atual = date('Y-m-d');
?>
<style type="text/css">
	.sub_page .hero_area {
		min-height: auto;
	}
</style>

</div>

<div class="footer_section" style="background: #020202; ">
	
	<!-- start Pricing Plan -->
	<section id="pricing" class="pricing section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap text-center"> 					
						<h4 class="section-title">ESCOLHA UM PLANO E FAÇA PARTE DA ASSINATURA!<br>✂️ Assinatura VIP para Estilo Incomparável! </h4>
						<div class="title-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text">
						<a style="color: #fff;">Na <?php echo $nome_sistema ?>, acreditamos que estilo e cuidado são inseparáveis. Apresentamos as Assinaturas Exclusivas para quem busca uma experiência premium. <br> Primeiro serviço por assinatura de tratamentos capilares, manutenção de protese, corte de cabelo, barba, bigode, sobrancelha e manicure-pedicure  confira...</a>
					</div>
				</div>
			</div>


			<!-- Service Start -->
			<div class="service">
				<div class="container">
					<div class="section-header text-center">
						
					</div>
					<div class="row">
						
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecbe3a6007e" target="_blank"> <img src="images/home/planos-plata.png" alt="Image"></a>
								</div>
								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecdd059007f" target="_blank"> <img src="images/home/planos-ouro.png" alt="Image"></a>
								</div> 
								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecef6960081" target="_blank"> <img src="images/home/planos-diamante.png" alt="Image"></a>
								</div> 
								
							</div>
						</div>
					</div>
				</div>


				<?php 
					$query5 = $pdo->query("SELECT * FROM grupo_assinaturas where ativo = 'Sim' ORDER BY id asc");
			$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
			$total_reg5 = @count($res5);
			if($total_reg > 0){

				for($i5=0; $i5 < $total_reg5; $i5++){

	$id = $res5[$i5]['id'];
	$nome = $res5[$i5]['nome'];	
	$ativo = $res5[$i5]['ativo'];
	
	
	if($ativo == 'Sim'){
			$icone = 'fa-check-square';
			$titulo_link = 'Desativar Item';
			$acao = 'Não';
			$classe_linha = '';
		}else{
			$icone = 'fa-square-o';
			$titulo_link = 'Ativar Item';
			$acao = 'Sim';
			$classe_linha = 'text-muted';
		}


		$query22 = $pdo->query("SELECT * FROM itens_assinaturas where grupo = '$id'");
	$res22 = $query22->fetchAll(PDO::FETCH_ASSOC);
	$total_itens = @count($res22);

	if($total_itens == 2){
		$col_md = 'col-md-6';
	}else if($total_itens == 3){
		$col_md = 'col-md-4';
	}else{
		$col_md = 'col-md-3';
		}

		
	
				 ?>
	

				<div class="title-wrap text-center"> 
					
					<h4 style="color: #fff;" id="barbeiro"><?php echo $nome ?></h4>
					
				</div>
				

				<!-- Pricing Section Start -->
				<div class="pricing--section pd--100-0-40">
					<!-- Pricing Background Image Start -->
					<div class="pricing--bg-img" data-bg-img="images/home/planos-diamante.png"></div>
					<!-- Pricing Background Image End -->

					<div class="container">
						<div class="row">

							<?php 
								$query = $pdo->query("SELECT * FROM itens_assinaturas where grupo = '$id' and ativo = 'Sim'");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			$total_reg = @count($res);
			if($total_reg > 0){

				for($i=0; $i < $total_reg; $i++){
	
	$id_item = $res[$i]['id'];
	$nome_item = $res[$i]['nome'];	
	$valor = $res[$i]['valor'];	
	$ativo = $res[$i]['ativo'];
	$c1 = $res[$i]['c1'];
	$c2 = $res[$i]['c2'];
	$c3 = $res[$i]['c3'];
	$c4 = $res[$i]['c4'];
	$c5 = $res[$i]['c5'];
	$c6 = $res[$i]['c6'];
	$c7 = $res[$i]['c7'];
	$c8 = $res[$i]['c8'];
	$c9 = $res[$i]['c9'];
	$c10 = $res[$i]['c10'];
	$c11 = $res[$i]['c11'];
	$c12 = $res[$i]['c12'];


	
	if($ativo == 'Sim'){
			$icone = 'fa-check-square';
			$titulo_link = 'Desativar Item';
			$acao = 'Não';
			$classe_linha = '';
		}else{
			$icone = 'fa-square-o';
			$titulo_link = 'Ativar Item';
			$acao = 'Sim';
			$classe_linha = 'text-muted';
		}
		
		$valorF = number_format($valor, 0, ',', '.');		


							 ?>

							<div class="<?php echo $col_md ?> col-xs-6 col-xxs-12">
								<!-- Pricing Item Start -->
								<div class="pricing--item ">
									<div class="header">
										<h2 style="color: #fff;" class="h5"><?php echo $nome_item ?></h2>

										<p class="price">R$<strong class="font--semibold"><?php echo $valorF ?></strong>/por mês*</p>
									</div>

									<div class="features">
										<ul>
											<?php if($c1 != ""){ ?>
											<li><?php echo $c1 ?></li>
											<?php } ?>
											<?php if($c2 != ""){ ?>
											<li><?php echo $c2 ?></li>
											<?php } ?>
											<?php if($c3 != ""){ ?>
											<li><?php echo $c3 ?></li>
											<?php } ?>
											<?php if($c4 != ""){ ?>
											<li><?php echo $c4 ?></li>
											<?php } ?>
											<?php if($c5 != ""){ ?>
											<li><?php echo $c5 ?></li>
											<?php } ?>
											<?php if($c6 != ""){ ?>
											<li><?php echo $c6 ?></li>
											<?php } ?>
											<?php if($c7 != ""){ ?>
											<li><?php echo $c7 ?></li>
											<?php } ?>
											<?php if($c8 != ""){ ?>
											<li><?php echo $c8 ?></li>
											<?php } ?>
											<?php if($c9 != ""){ ?>
											<li><?php echo $c9 ?></li>
											<?php } ?>
											<?php if($c10 != ""){ ?>
											<li><?php echo $c10 ?></li>
											<?php } ?>
											<?php if($c11 != ""){ ?>
											<li><?php echo $c11 ?></li>
											<?php } ?>
											<?php if($c12 != ""){ ?>
											<li><?php echo $c12 ?></li>
											<?php } ?>											
										</ul>
									</div>

									<div class="action">
										<form action="assinar.php" method="POST" target="_blank">
										<input type="hidden" name="id_item" value="<?php echo $id_item ?>">
										<button class="btn btn-custom" type="submit" >ASSINAR</button>
										</form>
									</div>
								</div>
								<!-- Pricing Item End -->
							</div>
							
						
							
							
							
						<?php } } ?>
						</div>
					</div>
				</div>
				<!-- Pricing Section End -->
				<?php } } ?>
				
				


				<section class="faq-section bd-bottom padding">
					<div class="container">
						<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
							<h4 style="color: #fff;">Encontre respostas para as dúvidas mais comuns dos nossos clientes</h4>
						</div>
						<div class="row">
							<div class="col-md-6 padding-15">
								<div id="accordion" class="faq-item">
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
													Como funciona exatamente?
												</button>
											</h5>
										</div>
										<div id="faq1" class="collapse" aria-labelledby="faq1" data-parent="#accordion">
											<div class="card-body" style="color: #000;">A assinatura recorrente para o salão de beleza. Ou seja, com um plano mensal, trimestral, semestral, você, faz manutenção da sua protese capilare, e trata seu  cabelo, e corta o cabelo e faz a barba e sobrancelha descontos exclusivos! Você impecável sempre!
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
													Beneficios na assinatura
												</button>
											</h5>
										</div>
										<div id="faq2" class="collapse" aria-labelledby="faq2" data-parent="#accordion">
											<div class="card-body" style="color: #000;">Presentes exclusivos. Cabelo sempre alinhado! Fazer tratamento, manutenção de protese capilar, e barba em casa nunca mais! Imagem pessoal impecável. Pagamento automatizado. Desconto nos produtos e serviços. <a href="agendamentos" target="_blank">"Agenda Online"</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
													Existe um limite de vezes que posso utilizar por mês?
												</button>
											</h5>
										</div>
										<div id="faq3" class="collapse" aria-labelledby="faq3" data-parent="#accordion">
											<div class="card-body" style="color: #000;">Conforme seu combo! Acreditamos que sua imagem pessoal vem em primeiro lugar, e nós estamos aqui para isso, prestar o melhor serviço quantas vezes for necessário.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="false" aria-controls="faq7">
													Tem taxa de adesão e fidelidade na contratação?
												</button>
											</h5>
										</div>
										<div id="faq7" class="collapse" aria-labelledby="faq7" data-parent="#accordion">
											<div class="card-body" style="color: #000;">Sem cobranças adicionais, aqui você é livre! Afinal queremos voçê em nosso clube que compartilhem do mesmo propósito que nós, apresentar nossa melhor versão sempre!
											</div>
										</div>
									</div>
								</div>
							</div><!--/. faq-item -->
							<div class="col-md-6 padding-15">
								<div id="accordion2" class="faq-item">
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">
													Eu tenho algum desconto além do plano contratado?
												</button>
											</h5>
										</div>
										<div id="faq4" class="collapse" aria-labelledby="faq4" data-parent="#accordion2">
											<div class="card-body" style="color: #000;">Sim, os clientes ocupam posição privilegiada em tudo! Damos desconto em todos os produtos comercializados em nossas unidades, tais como pomada, óleo, balm,  atendimento exclusivos.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5">
													É só pelo site que assino?
												</button>
											</h5>
										</div>
										<div id="faq5" class="collapse" aria-labelledby="faq5" data-parent="#accordion2">
											<div class="card-body" style="color: #000;">Não, você pode assinar na salão de beleza, procure o gerente e receba todo o suporte e instrução para entrar no grupo seleto de homens que prezam por estilo e elegância a todo momento.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6">
													Existe outra forma de pagamento que não seja cartão?

												</button>
											</h5>
										</div>
										<div id="faq6" class="collapse" aria-labelledby="faq6" data-parent="#accordion2">
											<div class="card-body" style="color: #000;">Sim, disponibilizamos combos mensal, trimestrais e semestral de todos os planos. Esses combos são pagos via débito, pix, dinheiro e o cliente que adere por este modo usufrui das mesmas vantagens que os demais, alterando apenas a forma de pagamento.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8">
													Se eu tiver dúvidas?

												</button>
											</h5>
										</div>
										<div id="faq8" class="collapse" aria-labelledby="faq8" data-parent="#accordion2">
											<div class="card-body" style="color: #000;">Você pode tirar todas as dúvidas via e-mail ou WhatsApp sempre que precisar, respondemos todas as suas questões relacionadas a sua agenda.   <a href="https://api.whatsapp.com/send/?phone=5545999882100&text=Ol%C3%A1%2C+tudo+bem%3F+Vim+atrav%C3%A9s+do+seu+site%2C+voc%C3%AA+pode+me+ajudar.&app_absent=0" class="btn-primary" target="_blank"><small>"Whatsapp"</small> </a>
											</div>
										</div>
									</div>
								</div> 
							</div><!--/. faq-item -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact section -->

		<section id="bottom-widget" class="home-section bg-white" style="margin-top: -200px">
			<?php require_once("rodape.php") ?>



			<!-- Modal Depoimentos -->
			<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Excluir Agendamento
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px" id="btn-fechar-excluir">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form id="form-excluir">
							<div class="modal-body">

								<span id="msg-excluir"></span>

								<input type="hidden" name="id" id="id_excluir">


								<br>
								<small><div id="mensagem-excluir" align="center"></div></small>
							</div>

							<div class="modal-footer">      
								<button type="submit" class="btn btn-danger">Excluir</button>
							</div>
						</form>

					</div>
				</div>
			</div>






			<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
			<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

			<style type="text/css">
				.select2-selection__rendered {
					line-height: 45px !important;
					font-size:16px !important;
					color:#000 !important;

				}

				.select2-selection {
					height: 45px !important;
					font-size:16px !important;
					color:#000 !important;

				}
			</style>  



			<script type="text/javascript">
				$(document).ready(function() {
					document.getElementById("botao_editar").style.display = "none";		
					$('.sel2').select2({

					});

					listarFuncionarios();
				});
			</script>


			<script type="text/javascript">

				function mudarFuncionario(){
					var funcionario = $('#funcionario').val();
					var data = $('#data').val();		
					var hora = $('#hora_rec').val();

					listarHorarios(funcionario, data, hora);
					listarFuncionario();	

				}
			</script>



			<script type="text/javascript">
				function listarHorarios(funcionario, data, hora){	


					$.ajax({
						url: "ajax/listar-horarios.php",
						method: 'POST',
						data: {funcionario, data, hora},
						dataType: "text",

						success:function(result){
							if(result.trim() === '000'){
								alert('Selecione uma data igual ou maior que hoje!');

								var dt = new Date();
								var dia = String(dt.getDate()).padStart(2, '0');
								var mes = String(dt.getMonth() + 1).padStart(2, '0');
								var ano = dt.getFullYear();
								dataAtual = ano + '-' + mes + '-' + dia;
								$('#data').val(dataAtual);
								return;
							}else{
								$("#listar-horarios").html(result);
							}

						}
					});
				}
			</script>



			<script type="text/javascript">

				function buscarNome(){
					var tel = $('#telefone').val();	
					listarCartoes(tel);	

					$.ajax({
						url: "ajax/listar-nome.php",
						method: 'POST',
						data: {tel},
						dataType: "text",

						success:function(result){
							var split = result.split("*");
							console.log(split[3])

							if(split[2] == "" || split[2] == undefined){

							}else{
								$("#funcionario").val(parseInt(split[2])).change();
							}


							if(split[5] == "" || split[5] == undefined){
								document.getElementById("botao_editar").style.display = "none";					
							}else{
								$("#servico").val(parseInt(split[5])).change();
								document.getElementById("botao_editar").style.display = "block";					
								$("#botao_salvar").text('Novo Agendamento');
							}

							$("#nome").val(split[0]);


							$("#msg-excluir").text('Deseja Realmente excluir esse agendamento feito para o dia ' + split[7] + ' às ' + split[4]);


							mudarFuncionario()



						}
					});	




				}
			</script>



			<script type="text/javascript">

				function salvar(){
					$('#id').val('');
				}
			</script>




			<script>

				$("#form-agenda").submit(function () {
					event.preventDefault();

					$('#btn_agendar').hide();
					$('#mensagem').text('Carregando!');

					var formData = new FormData(this);

					$.ajax({
						url: "ajax/agendar.php",
						type: 'POST',
						data: formData,

						success: function (mensagem) {

							$('#mensagem').text('');
							$('#mensagem').removeClass()
							if (mensagem.trim() == "Agendado com Sucesso") {                    
								$('#mensagem').text(mensagem)
								buscarNome()

								var nome = $('#nome').val();
								var data = $('#data').val();
								var hora = document.querySelector('input[name="hora"]:checked').value;
								var obs = $('#obs').val();
								var nome_func = $('#nome_func').val();
								var nome_serv = $('#nome_serv').val();

								var dataF = data.split("-");
								var dia = dataF[2];
								var mes = dataF[1];
								var ano = dataF[0];
								var dataFormatada = dia + '/' + mes + '/' + ano;

								var horaF = hora.split(':');
								var horaH = horaF[0];
								var horaM = horaF[1];
								var horaFormatada = horaH + ':' + horaM;


								window.location="meus-agendamentos.php";	

								var msg_agendamento = "<?=$msg_agendamento?>";

								if(msg_agendamento == 'Sim'){

									let a= document.createElement('a');
									a.target= '_blank';
									a.href= 'http://api.whatsapp.com/send?1=pt_BR&phone=<?=$tel_whatsapp?>&text= _Novo Agendamento_ %0A Funcionário: *' + nome_func + '* %0A Serviço: *' + nome_serv + '* %0A Data: *' + dataFormatada + '* %0A Hora: *' + horaFormatada + '* %0A Cliente: *' + nome + '*  %0A %0A ' + obs;
									a.click();
									return;		

								}


							}



							else {
					//$('#mensagem').addClass('text-danger')
					$('#mensagem').text(mensagem)
				}

				$('#btn_agendar').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

				});

			</script>





			<script type="text/javascript">

				function listarCartoes(tel){

					$.ajax({
						url: "ajax/listar-cartoes.php",
						method: 'POST',
						data: {tel},
						dataType: "text",

						success:function(result){
							$("#listar-cartoes").html(result);
						}
					});

				}
			</script>





			<script type="text/javascript">
				function listarFuncionario(){	
					var func = $("#funcionario").val();

					$.ajax({
						url: "ajax/listar-funcionario.php",
						method: 'POST',
						data: {func},
						dataType: "text",

						success:function(result){
							$("#nome_func").val(result);
						}
					});
				}
			</script>


			<script type="text/javascript">
				function mudarServico(){
					listarFuncionarios()	
					var serv = $("#servico").val();

					$.ajax({
						url: "ajax/listar-servico.php",
						method: 'POST',
						data: {serv},
						dataType: "text",

						success:function(result){
							$("#nome_serv").val(result);
						}
					});
				}
			</script>


			<script type="text/javascript">
				function listarFuncionarios(){	
					var serv = $("#servico").val();

					$.ajax({
						url: "ajax/listar-funcionarios.php",
						method: 'POST',
						data: {serv},
						dataType: "text",

						success:function(result){
							$("#funcionario").html(result);
						}
					});
				}
			</script>

