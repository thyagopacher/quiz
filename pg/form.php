		<section id="inicio">
			<div class="pagina-fluida">
					<div class="pagina">
						<div class="xg-12 g-12 m-12 p-12 s-12">
							<div class="sm">
								<div class="pc20"></div>
								<div class="xg-4 g-4 m-5 p-6 s-6">
									<div class="sm">
										<div class="xg-12 g-12 m-12 p-12 s-12">
											<p class="h2 text-white text-center font-weight-normal">
												Primeiro, algumas perguntas para te conhecer melhor:
											</p>
										</div>
										<div class="xg-6 g-6 m-12 p-12 s-12">
											<div class="pc5"></div>
											<img src="fatias/apresentacao.png" class="img-questions img-fluid pt-4" alt="">
										</div>
										<div class="xg-6 g-6"></div>
									</div>
									
								</div>
								<div class="xg-6 g-6 m-7 p-6 s-6">
									<form id="conversion-form" class="dsb_frm" method="post"> <!-- onSubmit="return pg_ini('1')" -->
										<input type="hidden" name="token_rdstation" value="a31e6c03787e3ccebb31686f1a76785e" />
										<input type="hidden" name="identificador" value="quiz-agua-mineral-treze-tilias" />
										<label class="h4 text-white font-weight-normal">Nome:</label>
										<input type="text" name="nome" id="nome" required="" class="required" />
										<div class="pc3"></div>
										<label class="h4 text-white font-weight-normal">Email:</label>
										<input type="text" name="email" id="email" required="" class="required email" />
										<div class="pc3"></div>
										<input type="submit" class="ml-auto font-weight-normal button t_center button-green" id="cf_submit" value="iniciar"  /> <!-- onclick="pg_ini('1')"  -->
			      						<img src="//rdstation-static.s3.amazonaws.com/images/ajax-loader.gif" id="ajax-loader" class="invisible" alt="Enviando..." />
										<!--<button data-start-quizz class="ml-auto h3 font-weight-normal py-2 m-0 button text-center button-green">iniciar</button>-->
									</form>

								</div>
								<div class="xg-2 g-2 m-7"></div>

						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-7 col-lg-7 col-xl-8 py-3">
						
						
					</div>
				</div>
			</div>
		</section>

<script type ='text/javascript'>
	$(".dsb_frm").submit(function(evento){
		
		var form = $('#conversion-form');
		var inputNome = $('#nome').val();
		var inputEmail = $('#email').val();
	
		//if (inputNome.val() == null or inputEmail.val() == null or peso.val() == null) {
		//	$('.js-feedback').removeClass('invisible');
		//} else {
			var data_array = [
				{ name: 'email', value: inputEmail },
				{ name: 'identificador', value: 'quiz-agua-mineral-treze-tilias' },
				{ name: 'token_rdstation', value: 'a31e6c03787e3ccebb31686f1a76785e' },
				{ name: 'nome', value: inputNome }
			];
			RdIntegration.post(data_array, function () { pg_ini("1") });
			//location.href = 'https://aguamineraltrezetilias.com.br/quiz/_novo/?quiz=start';
			
		//}
		evento.preventDefault();
		
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>