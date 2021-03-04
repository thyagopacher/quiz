<?php ob_start();?>
<section id="question-six">
    <div id="_p6" class="pagina-fluida wow fadeIn">
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
            <div class="pc10 d"></div>
            <div class="pc10 t"></div>
            <div class="pc3 m"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-3 g-3 m-5 p-12 s-12 tm_center">
                        <div class="pc10 t"></div>
                        <p class="h3">Qual o <strong>pH</strong> ideal da água para consumo?</p>
                    </div>
                    <div class="p-3 s-3"></div>
                    <div class="xg-8 g-9 m-5 p-6 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-7.png" class="img-questions" >
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
                            <input type="radio" name="p6" id="p6_r1" class="css-checkbox" value="355" />
                            <label for="p6_r1" class="css-label radGroup1 radGroup1 h4 option">3 a 5,5</label>
                        </div>

                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p6" id="p6_r2" class="css-checkbox" value="557" />
                            <label for="p6_r2" class="css-label radGroup1 radGroup1 h4 option">5,5 a 7</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p6" id="p6_r3" class="css-checkbox" value="785" />
                            <label for="p6_r3" class="css-label radGroup1 radGroup1 h4 option">7 a 8,5</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p6" id="p6_r4" class="css-checkbox" value="8510" />
                            <label for="p6_r4" class="css-label radGroup1 radGroup1 h4 option">8,5 a 10</label>
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
                        <p class="font-weight-normal py-2 m-0 button button-blue" onclick="pg_('7', $('input[name=p6]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/qual-a-origem-da-agua-mineral-treze-tilias/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #FEB08C;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);