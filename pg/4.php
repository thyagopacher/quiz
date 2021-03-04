<?php ob_start();?>
<section id="question-four">
    <div id="_p4" class="pagina-fluida wow fadeIn">
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
                    <div class="xg-5 g-3 m-4 p-5 s-12 tm_center">
                        <div class="pc10 t"></div>
                        <p class="h3">Qual destes líquidos você mais bebe?</p>
                    </div>
                    <div class="s-3"></div>
                    <div class="xg-6 g-9 m-8 p-7 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-4.png" class="img-questions" />
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
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r1" class="css-checkbox" value="agua"  />
                            <label for="p4_r1" class="css-label radGroup1 radGroup1 h4 option">Água</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r2" class="css-checkbox" value="refrigerante"  />
                            <label for="p4_r2" class="css-label radGroup1 radGroup1 h4 option">Refrigerante</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r3" class="css-checkbox" value="leite"  />
                            <label for="p4_r3" class="css-label radGroup1 radGroup1 h4 option">Leite</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r4" class="css-checkbox" value="cha"  />
                            <label for="p4_r4" class="css-label radGroup1 radGroup1 h4 option">Café/chá</label>
                            <p class="h4 option"></p>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r5" class="css-checkbox" value="suco"  />
                            <label for="p4_r5" class="css-label radGroup1 radGroup1 h4 option">Sucos</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-6 s-6">
                            <input type="radio" name="p4" id="p4_r6" class="css-checkbox" value="cerveja"  />
                            <label for="p4_r6" class="css-label radGroup1 radGroup1 h4 option">Cerveja</label>
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
                        <p class="font-weight-normal button button-blue" onclick="pg_('5', $('input[name=p4]:checked').val())">avançar <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
            <div class="help"><a href="https://aguamineraltrezetilias.com.br/vida-saudavel/o-que-devemos-beber-para-nos-hidratar-de-forma-eficiente/" target="new"><img src="img/help.png"></a></div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #BEE58E;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);
