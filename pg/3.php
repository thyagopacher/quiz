<?php ob_start();?>
<section id="question-three">
    <div id="_p3" class="pagina-fluida wow fadeIn">
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
            <div class="pc2 m"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-4 g-3 m-6 p-12 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <p class="h3">Complete a frase: Nosso corpo é composto por __ % de água.</p>
                    </div>
                    <div class="p-3 s-3"></div>
                    <div class="xg-8 g-9 m-6 p-6 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-3.png" class="img-questions" />
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
                            <input type="radio" name="p3" id="p3_r1" class="css-checkbox" value="25" />
                            <label for="p3_r1" class="css-label radGroup1 radGroup1 h4 option">25%</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p3" id="p3_r2" class="css-checkbox" value="50" />
                            <label for="p3_r2" class="css-label radGroup1 radGroup1 h4 option">50%</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p3" id="p3_r3" class="css-checkbox" value="75" />
                            <label for="p3_r3" class="css-label radGroup1 radGroup1 h4 option">75%</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p3" id="p3_r4" class="css-checkbox" value="100" />
                            <label for="p3_r4" class="css-label radGroup1 radGroup1 h4 option">100%</label>
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
                        <p class="font-weight-normal button button-blue" onclick="pg_('4', $('input[name=p3]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/quais-os-beneficios-de-beber-agua-em-jejum/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #C4C0F7;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);

