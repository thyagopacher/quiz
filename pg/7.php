<?php ob_start();?>
<section id="question-seven">
    <div id="_p7" class="pagina-fluida wow fadeIn">
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
            <div class="pc5 t"></div>
            <div class="pc4 m"></div>
            <div class="xg-9 g-9 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-6 g-6 m-6 p-12 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <div class="pc1 t"></div>
                        <p class="h3">A fonte da <strong>Água Mineral Treze Tílias</strong> é abastecida pelo <strong>Aquífero Guarani</strong>, o maior reservatório subterrâneo de água doce do planeta.</p>
                    </div>
                    <div class="s-3"></div>
                    <div class="xg-5 g-5 m-6 p-6 s-6 t_center">
                        <div class="pc1 m"></div>
                        <img src="fatias/p-6.png" class="img-questions" >
                    </div>
                    <div class="s-3"></div>
                </div>
            </div>
            <div class="xg-3 g-3 m-3 p-12 s-12">
                <div class="sm">
                    <div class="pc5 t"></div>
                    <div class="xg-12 g-12 m-12 p-12 s-12">
                        <p class="bg-danger js-feedback text-white rounded t_center invisible">
                            Selecione uma resposta para avançar
                        </p>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p7" id="p7_r1" class="css-checkbox" value="verdadeiro" />
                            <label for="p7_r1" class="css-label radGroup1 radGroup1 h4 option">Verdadeiro</label>
                        </div>

                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p7" id="p7_r2" class="css-checkbox" value="falso" />
                            <label for="p7_r2" class="css-label radGroup1 radGroup1 h4 option">Falso</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xg-12 g-12 m-12 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12 tm_center td_right">
                        <div class="pc5 d"></div>
                        <div class="pc5 t"></div>
                        <div class="pc3 m"></div>
                        <p class="font-weight-normal py-2 m-0 button button-blue" onclick="pg_('8', $('input[name=p7]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/descubra-qual-e-o-ph-ideal-da-agua-para-consumo/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #EFED83;}</style>

<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);