<?php 
require_once("cabecalho.php");
$data_atual = date('Y-m-d');
$id_item = @$_POST['id_item'];

$query = $pdo->query("SELECT * FROM itens_assinaturas where id = '$id_item' ");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			$total_reg = @count($res);			
	
	$id_item = $res[0]['id'];
	$nome_item = $res[0]['nome'];	
	$valor = $res[0]['valor'];	
	$ativo = $res[0]['ativo'];
	$c1 = $res[0]['c1'];
	$c2 = $res[0]['c2'];
	$c3 = $res[0]['c3'];
	$c4 = $res[0]['c4'];
	$c5 = $res[0]['c5'];
	$c6 = $res[0]['c6'];
	$c7 = $res[0]['c7'];
	$c8 = $res[0]['c8'];
	$c9 = $res[0]['c9'];
	$c10 = $res[0]['c10'];
	$c11 = $res[0]['c11'];
	$c12 = $res[0]['c12'];
	
		$valorF = number_format($valor, 0, ',', '.');	

?>
<style type="text/css">
	.sub_page .hero_area {
		min-height: auto;
	}

	.inputs_agenda{
  background: transparent !important; 
  border:none; border-bottom: 1px solid #FFF !important; 
  font-size: 14px !important; 
  color:#FFF !important; 
  padding:0 !important;
  margin:0px !important;
  margin-bottom:5px !important;
}
</style>

</div>

<div class="footer_section" style="background: #292929; ">
	<div class="container" >
		<div class="footer_content " >
			<form class="form_agendamento" id="form-agenda" method="post" style="margin-top: -25px !important">
			<div class="footer_form footer-col">
				<div class="row" style="margin-top: -40px">
					<div class="col-5">						
					<input onkeyup="buscarNome()" class="inputs_agenda cor_place" type="text" name="telefone" id="telefone" placeholder="Telefone com DDD" required />				
					</div>

					<div class="col-7 ">
						
					<input  onclick="" class="inputs_agenda cor_place" type="text" name="nome" id="nome" placeholder="Seu Nome" required />
				
					</div>
				</div>
				
			
				<br>


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
										<button id="btn_agendar" class="btn btn-custom" type="submit" >ASSINAR</button>
									</div>
								</div>
								<!-- Pricing Item End -->
							</div>
							

					 
                           

                <br><br>
               <small> <div id="mensagem" align="center"></div></small>	              
                <input type="hidden" id="id" name="id" value="<?php echo $id_item ?>">	    
			</div>



		</form>



		</div>


	</div>


</div>




<?php require_once("rodape.php") ?>


<script type="text/javascript">
	
	function buscarNome(){
		var tel = $('#telefone').val();	
				
		$.ajax({
			url: "ajax/listar-nome.php",
			method: 'POST',
			data: {tel},
			dataType: "text",

			success:function(result){

				var split = result.split("*");
				console.log(split[3])
				$("#nome").val(split[0]);

			}
		});	

	}
</script>





<script>

	$("#form-agenda").submit(function () {
		event.preventDefault();

		$('#btn_agendar').hide();
		$('#mensagem').text('Carregando!');

		var formData = new FormData(this);

		$.ajax({
			url: "ajax/assinatura.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {

				var msg = mensagem.split('*');
				var id_agd = msg[1];
				
				$('#mensagem').text('');
				$('#mensagem').removeClass()
				if (msg[0].trim() == "Salvo") {                    
					$('#mensagem').text(msg[0])
					buscarNome()

					window.location="plano/"+id_agd;

				}		

				 else {
					//$('#mensagem').addClass('text-danger')
					$('#mensagem').text(msg[0])
				}

				$('#btn_agendar').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});

</script>




