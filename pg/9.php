<?php ob_start();?>
<section id="question-nine">
    <div id="_p9" class="pagina-fluida wow fadeIn">
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
            <div class="pc5 m"></div>
            <div class="xg-8 g-7 m-9 p-12 s-12">
                <div class="sm">
                    <div class="xg-5 g-7 m-4 p-12 s-12 tm_center">
                        <div class="pc5 t"></div>
                        <p class="h3">Você possui o hábito de ingerir <strong>água mineral</strong> frequentemente?</p>
                    </div>
                    <div class="p-3 s-3"></div>
                    <div class="xg-6 g-5 m-8 p-6 s-6 t_center">
                        <div class="pc2"></div>
                        <img src="fatias/p-8.png" class="img-questions" >
                    </div>
                    <div class="p-3 s-3"></div>
                </div>
            </div>
            <div class="xg-4 g-5 m-3 p-12 s-12">
                <div class="sm">
                    <div class="xg-12 g-12 m-12 p-12 s-12">
                        <p class="bg-danger js-feedback text-white rounded t_center invisible">
                            Selecione uma resposta para avançar
                        </p>
                        <div class="xg-12 g-12 m-12 p-12 s-12">
                            <input type="radio" name="p9" id="p9_r1" class="css-checkbox" value="sede" />
                            <label for="p9_r1" class="css-label radGroup1 radGroup1 h4 option">Só bebo quando tenho sede</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-12 s-12">
                            <input type="radio" name="p9" id="p9_r2" class="css-checkbox" value="sempre" />
                            <label for="p9_r2" class="css-label radGroup1 radGroup1 h4 option">Sempre, já é um hábito</label>
                        </div>
                        <div class="xg-12 g-12 m-12 p-12 s-12">
                            <input type="radio" name="p9" id="p9_r3" class="css-checkbox" value="nao" />
                            <label for="p9_r3" class="css-label radGroup1 radGroup1 h4 option">Não bebo água, apenas outros líquidos</label>
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
                        <p class="font-weight-normal py-2 m-0 button button-blue" onclick="pg_res($('input[name=p9]:checked').val())">resultado <small class="fa fa-chevron-right"></small></p>
                        <div class="pc5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">body {background-color: #b8e7ff;}</style>
<?php
$html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html);