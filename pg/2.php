<?php ob_start();?>
<section id="question-two">
    <div id="_p2" class="pagina-fluida wow fadeIn">
        <div class="pagina">
            <div class="xg-12 g-12 m-12 p-12 s-12">
                <div class="sm">
                    <div class="pc5"></div>
                    <div class="xg-5 g-5 m-6 p-7 s-7">
                        <div id="images" class="images">
                            <?php include 'copos.php'; ?>
                        </div>
                    </div>
                    <div class="xg-7 g-7 m-6 p-5 s-5"></div>
                </div>
            </div>
            <div class="pc15 d"></div>
            <div class="pc10 t"></div>
            <div class="pc3 m"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="p-1 m"></div>
                    <div class="xg-3 g-3 m-6 p-10 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <p class="h3">A cada 8 horas sentado, quanto <strong>tempo de exercício</strong> nosso corpo precisa?</p>
                    </div>
                    <div class="p-1 m"></div>
                    <div class="p-3 s-3"></div>
                    <div class="xg-9 g-9 m-6 p-6 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-2.png" class="img-questions" />
                    </div>
                    <div class="p-3 s-3"></div>
                </div>
            </div>
            <div class="xg-3 g-3 m-3 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12">
                        <p class="bg-danger js-feedback text-white rounded t_center invisible">
                            Selecione uma resposta para avançar
                        </p>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p2" id="p2_r1" class="css-checkbox" value="30" />
                            <label for="p2_r1" class="css-label radGroup1 radGroup1 h4 option">30 min</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p2" id="p2_r2" class="css-checkbox" value="1hora" />
                            <label for="p2_r2" class="css-label radGroup1 radGroup1 h4 option">1 hora</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p2" id="p2_r3" class="css-checkbox" value="2horas" />
                            <label for="p2_r3" class="css-label radGroup1 radGroup1 h4 option">2 horas</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p2" id="p2_r4" class="css-checkbox" value="3horas" />
                            <label for="p2_r4" class="css-label radGroup1 radGroup1 h4 option">3h ou mais</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xg-12 g-12 m-12 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12 tm_center td_right">
                        <div class="pc10 d"></div>
                        <div class="pc7 t"></div>

                        <p class="font-weight-normal button button-blue" onclick="pg_('3', $('input[name=p2]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="http://g1.globo.com/bemestar/noticia/2016/07/cada-8-horas-sentado-e-necessario-1-hora-de-exercicio-diz-estudo.html" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #CBF0F4;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);