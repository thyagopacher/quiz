<?php ob_start();?>
<section id="question-five">
    <div id="_p5" class="pagina-fluida wow fadeIn">
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
            <div class="pc5 m"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-3 g-3 m-4 p-12 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <p class="h3">Com qual das situações você mais se identifica?</p>
                    </div>
                    <div class="p-1 s-1"></div>
                    <div class="xg-9 g-9 m-8 p-10 s-10 t_center">
                        <div class="pc2"></div>
                        <div class="xg-6 g-6 m-6 p-6 s-6 t_center">
                            <img width="200px" src="fatias/p-5-b.png" >
                        </div>
                        <div class="xg-6 g-6 m-6 p-6 s-6 t_center">
                            <img width="200px" src="fatias/p-5-a.png" >
                        </div>
                    </div>
                    <div class="p-1 s-1"></div>
                </div>
            </div>
            <div class="xg-3 g-3 m-3 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12">
                        <p class="bg-danger js-feedback text-white rounded t_center invisible">
                            Selecione uma resposta para avançar
                        </p>
                        <div class="xg-12 g-12 m-12 p-6 s-6 t_center">
                            <input type="radio" name="p5" id="p5_r1" class="css-checkbox" value="a" />
                            <label for="p5_r1" class="css-label radGroup1 radGroup1 h4 option">A</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6 t_center">
                            <input type="radio" name="p5" id="p5_r2" class="css-checkbox" value="b" />
                            <label for="p5_r2" class="css-label radGroup1 radGroup1 h4 option">B</label>
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
                        <p class="font-weight-normal button button-blue" onclick="pg_('6', $('input[name=p5]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/beneficios-da-agua-mineral-alcalina-em-atividades-fisicas/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #AFF0C3;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);