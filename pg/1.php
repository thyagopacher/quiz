<?php ob_start();?>
<section id="question-one">
    <div id="_p1" class="pagina-fluida wow fadeIn">
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
            <div class="pc15"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-3 g-3 m-4 p-12 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <p class="h3">O que você escolheria para o <strong>café da manhã</strong>?</p>
                    </div>
                    <div class="s-3"></div>
                    <div class="xg-9 g-9 m-8 p-12 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-1.png" class="img-questions" >
                    </div>
                    <div class="s-3"></div>
                </div>
            </div>
            <div class="xg-3 g-3 m-3 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12">
                        <p class="bg-danger js-feedback text-white rounded t_center invisible">
                            Selecione uma resposta para avançar
                        </p>
                        <div class="xg-12 g-12 m-12 p-6 s-6 tm_center">
                            <input type="radio" name="p1" id="p1_r1" class="css-checkbox" value="frutas" />
                            <label for="p1_r1" class="css-label radGroup1 radGroup1 h4 option">Frutas</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6 tm_center">
                            <input type="radio" name="p1" id="p1_r2" class="css-checkbox" value="doces" />
                            <label for="p1_r2" class="css-label radGroup1 radGroup1 h4 option">Doces</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xg-12 g-12 m-12 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12 tm_center td_right">
                        <div class="pc10 d"></div>
                        <div class="pc7 t"></div>
                        <div class="pc5 m"></div>
                        <p class="font-weight-normal button button-blue" onclick="pg_('2', $('input[name=p1]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/fibras-e-agua-sao-essenciais-para-uma-boa-digestao/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #ffd88d;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);