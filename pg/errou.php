<?php 
//setcookie('respostas'); 
?>
<Script>document.cookie = "respostas=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";</Script>
		<section id="question-res">
			<div id="transition_res">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="">
							<symbol id="wave">
								<path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"></path>
								<path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"></path>
								<path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"></path>
								<path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"></path>
							</symbol>
						</svg>
						<div class="page" id="page">
							<div class="tracker">
								<div class="tracker__inner" id="tracker"></div>
							</div>
							<div class="water" id="water">
								<svg class="water__wave water__wave_back" viewBox="0 0 560 20">
								  <use xlink:href="#wave"></use>
								</svg>
								<svg class="water__wave water__wave_front" viewBox="0 0 560 20">
								  <use xlink:href="#wave"></use>
								</svg>
								<div class="water__inner">
									<div class="bubble bubble_1"></div>
									<div class="bubble bubble_2"></div>
									<div class="bubble bubble_3"></div>
								</div>
							</div>
						</div>
					</div>
			<div id="_p9" class="pagina-fluida wow fadeIn">
				<div class="pagina">
					<div class="xg-12 g-12 m-12 p-12 s-12">
						<div class="sm">
							<div class="pc20 d"></div>
							<div class="pc10 t"></div>
							<div class="pc5 m"></div>
							<div class="s-1 m"></div>
							<div class="xg-4 g-4 m-6 p-6 s-10">
								<h2 class="h2 text-white tm_center">Ops...</h2>
								<p class="h5 font-weight-normal text-white tm_center">Você não acertou nenhuma questão. Procure melhorar sua alimentação e beber mais água!</p>
								<div class="pc5"></div>
								<div class="images tm_center" id="images" >
									<?php include 'copos.php'; ?>
								</div>
								<div class="pc5 d"></div>
								<div class="pc2 t"></div>
								<div class="pc2 m"></div>
								<p class="font-weight-normal button button-blue" onclick="pg_new(1)">Jogar novamente</p>
							</div>
							<div class="s-1 m"></div>
							<div class="s-2 m"></div>
							<div class="xg-4 g-4 m-6 p-6 s-8 tm_center">
								<div class="pc2"></div>
								<img src="fatias/ops.png" class="img-questions" >
							</div>
							<div class="s-2 m"></div>
							<div class="xg-4 g-4 m-12 p-12 s-12">
								<div class="sm">
									<p class="h5 font-weight-normal text-white">Compartilhe seu resultado:</p>
									<div class="pc3"></div>
									<ul id="social" class="sm">
										<li class="xg-2 g-2 m-3 p-3 s-3">
											<a href="https://www.facebook.com/sharer.php?u=https://www.aguamineraltrezetilias.com.br/quiz/&t=Eu não acertei nenhuma questão sobre a Água, e você, quantas acerta?">
												<img src="img/fb.svg" class="img-questions">
												<img src="img/sombra.svg" class="sombra_social">
											</a>
										</li>
										<li class="xg-2 g-2 m-3 p-3 s-3">
											<a href="https://twitter.com/intent/tweet?via=aguamineraltrezetilias&text=Eu não acertei nenhuma questão sobre a água e você, quantas acerta?&url=https://aguamineraltrezetilias.com.br/quiz/
">
												<img src="img/tw.svg" class="img-questions">
												<img src="img/sombra.svg" class="sombra_social">
											</a>
										</li>
										<li class="xg-2 g-2 m-3 p-3 s-3">
											<a href="https://plus.google.com/share?url=https://aguamineraltrezetilias.com.br/quiz/">
												<img src="img/in.svg" class="img-questions">
												<img src="img/sombra.svg" class="sombra_social">
											</a>
										</li>
										<li class="xg-2 g-2 m-3 p-3 s-3">
											<a href="https://www.linkedin.com/cws/share?token&isFramed=false&url=https://aguamineraltrezetilias.com.br/quiz/">
												<img src="img/gp.svg" class="img-questions">
												<img src="img/sombra.svg" class="sombra_social">
											</a>
										</li>
									</div>
									<div class="pc6"></div>
									<p class="h5 font-weight-normal text-white">Alguns artigos sobre saúde que separamos para você:</p>
									<ul id="links">
										<li><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/o-que-devemos-beber-para-nos-hidratar-de-forma-eficiente/">O que devemos beber para nos hidratar de forma eficiente</a></li>
										<li><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/principais-beneficios-de-beber-agua-mineral/">Principais benefícios de beber água mineral</a></li>
										<li><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/dicas-para-voce-beber-mais-agua-durante-o-dia/">Dicas para você beber mais água durante o dia</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="xg-12 g-12 m-12 p-12 s-12">
							<a href="javascript:void(0)" class="esquerda off"> <img src="img/left.png" /> </a>
							<ul class="carrosel">
								<li class="on">
									Viver bem é ter hábitos saudáveis e praticá-los com frequência. Adotar um estilo de vida saudável, consumindo alimentos in natura, menos industrializados, praticando atividades físicas prazerosas e se hidratando de maneira adequada garante uma vida equilibrada e com mais qualidade.
								</li>
								<li>
									O café da manhã é a refeição mais importante do dia e isso muita gente já sabe. Mas por ser a mais importante, é preciso que ele seja repleto de alimentos saudáveis e que proporcione a você todos os nutrientes necessários para começar o dia bem! Por isso, procure sempre ingerir carboidratos saudáveis e fibras vindo de frutas, proteínas e gorduras saudáveis como ovos e iogurtes.
								</li>
								<li>
									Além disso, vencer o sedentarismo é outra atitude importante para saúde. A cada 8 horas sentado, é preciso 1 hora de exercício físico. Muitas pessoas trabalham o dia inteiro sentado, e sem associar à atividade física diária.					
								</li>
								<li>
									Apesar de nosso corpo ser 75% composto de água, a hidratação através dela é imprescindível, portanto, a água deve ser a bebida mais consumida para quem quer ser realmente saudável. E pra isso, é preciso buscar uma água mineral de qualidade.
								</li>
								<li>
									A Água Mineral Treze Tílias é abastecida pelo Aquífero Guarani, o maior reservatório de água subterrâneo do planeta. O pH também é algo importante e o ideal para o bom funcionamento do corpo humano é que ele seja entre 8,5 e 10. E o pH da Água Mineral Treze Tílias é de 9,45, portanto, beber água mineral alcalina frequentemente e manter-se hidratado, é o primeiro passo para uma saúde de ferro!
								</li>
							</ul>
							<a href="javascript:void(0)" class="direita"> <img src="img/right.png" /> </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<style type="text/css">
			body {background-color: #60C7E2; overflow-y: auto;}

			a.esquerda, a.direita{
				float: left;
				display: block;
				width: 4%;
				text-align: center;
				margin-top: 2%;
			}

			a.off{
				visibility: hidden;
			}

			.carrosel{
				width: 90%;
				overflow: hidden;
				float: left;
				color: #FFF;
				margin-top: 2%;
    			text-align: center;
			}

			.carrosel li{
				display: none;
			}
		</style>
		<script src="../js/jquery.min.js"></script>

		<script>
			var obj = $('.carrosel');
			$(obj).find('li:first-child').show();
			$('a.esquerda, a.direita').click(function(){
				if($(this).hasClass('direita')){
					$('a.esquerda').css('visibility', 'visible');
					
					$(obj).find('.on').removeClass('on').fadeOut(400).next().addClass('on').delay(500).fadeIn();

					if($(obj).find('.on').is(':last-child'))
						$('a.direita').css('visibility', 'hidden');
				}
				else{
					$('a.direita').css('visibility', 'visible');

					$(obj).find('.on').removeClass('on').fadeOut(400).prev().addClass('on').delay(500).fadeIn();

					if($(obj).find('.on').is(':first-child'))
						$('a.esquerda').css('visibility', 'hidden');
				}
			})
		</script>