<section class="banner">
    <div class="banner">
        <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/hero_home_dance.jpg" />
        <div class="banner-letreiro">
            <h3>Dev</h3>
            <h2>LOSE <br />YOURSELF <br />TO</h2>
        </div>
    </div>
</section>

<section class="sobre">
    <div class="sobre">
        <div class="depoimento">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/testimonials_10.png" />
            <?php
                $depoimento = \modelos\homeModel::depoimentos();
                foreach($depoimento as $key => $value){
            ?>
            <p>„<?php echo $value['depoimento'] ?>”</p>
            <span><?php echo $value['nome'] ?></span>
            <h6><?php echo $value['data'] ?></h6>
        </div>
        <?php } ?>
        <div class="sobre-box">
            <span>ABOUT US</span>
            <h2>Dance Academy</h2>
            <p>Normcore proident sed selvage. Post-ironic ugh master cleanse etsy you probably haven’t heard of them mustache mollit readymade kombucha pug minim veniam. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
            <input type="submit" value="Apply today" />
        </div>
    </div>
</section>

<section class="cursos">
    <div class="cursos">

        <?php
            $items = \modelos\homeModel::getLojaItems();
            foreach ($items as $key => $value){
        ?>
        <div class="curso-single">
            <div class="imagem">
                <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem'] ?>" />
            </div>
            <div class="conteudo-curso">
                <span>HOR <br /><?php echo $value['horas']; ?></span>
                <h6><?php echo $value['nome']; ?></h6>
                <p><?php echo $value['descricao'] ?></p>
                <a href="">APPLY NOW <i data-feather="arrow-right"></i></a>
            </div>
        </div><!--curso-single-->
        <?php } ?>

    </div>
</section>

<section class="alunos">
    <h2>Our Classes</h2>
    <div class="alunos">
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_01.png" />
        </div>
        <div class="classe-single">    
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_02.png" />
        </div>            
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_03.png" />
        </div>            
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_07.png" />
        </div>            
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_04.png" />
        </div>            
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_05.png" />
        </div>            
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_08.png" />
        </div>           
        <div class="classe-single">
            <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/our_classes_image_06.png" />
        </div>    
    </div>
</section>

<section class="informacoes-curso">
    <div class="informacoes-curso">
            <div class="marketing-info">
                <span>New Class</span>
                <h2>Contemporary Ballet</h2>
                <h1>$199,99</h1>
                <ul>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>Monday</span>
                        <p>3AM = 5PM</p>
                    </li>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>Teacher</span>
                        <p>Maria Lopez</p>
                    </li>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>Duration</span>
                        <p>10 weeks</p>
                    </li>
                </ul>
                <a href="">Apply today</a>
            </div>
            <div class="imagem">
                <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/inner_hero_08.png" />
            </div>
    </div>
</section>
<section class="informacoes-curso-segundo">
    <div class="informacoes-curso">
        <div class="imagem">
                <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/05/inner_hero_09.png" />
            </div>
            <div class="marketing-info">
                <span>NEW MEMBERS</span>
                <h2>Ballet Duo Workshop</h2>
                <h1>$99</h1>
                <ul>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>TUESDAY</span>
                        <p>2AM - 4PM</p>
                    </li>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>Teacher</span>
                        <p>John Paul</p>
                    </li>
                    <li>
                        <i data-feather="check-circle"></i>
                        <span>Duration</span>
                        <p>8 weeks</p>
                    </li>
                </ul>
                <a href="">Apply today</a>
            </div>
        </div>
    </div>
</section>



<section class="planos">
    <div class="planos">
        
    <?php
        $servicos = \modelos\homeModel::servicos();
        foreach($servicos as $key => $value){
    ?>
        <div class="plano-single">
            <div class="imagem">
                <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem'] ?>" />
                <label>Ballet Single</label>
            </div>
            <div class="info">
                <p><?php echo $value['servico'] ?></p>
            </div>
        </div>
    <?php } ?>
    </div>
</section>


<section class="planos-pro">
    <img src="http://tabula.bold-themes.com/wavy/wp-content/uploads/sites/3/2019/04/Wave_white_top_left_shape_04.png" />
        <div class="planos-pro">
            
        <?php
            $items = \modelos\homeModel::getLojaItems();
            foreach($items as $key => $value){
        ?>
            <div class="pro-single">
                <span>From</span>
                <h2><?php echo Painel::convertMoney($value['preco']); ?></h2>
                <span>PAY AS YOU GO LESSION</span>
                <div class="divisao"></div>
                <p><?php echo $value['descricao']; ?></p>
            </div>
        <?php } ?>

        </div>
</section>

<section class="contato">
    <div class="contato">
        <div class="contato-texto">
            <h4>Get in touch today</h4>
            <p>Find out our next available admission programs and new members.</p>
        </div>
        <div class="contato-form">
            <input type="text" placeholder="Nome" />
            <input type="email" placeholder="Email" />
            <input type="number" placeholder="Telefone" />
            <input style="width:70%;" type="text" placeholder="Telefone" />
            <input type="submit" value="Enviar" />
        </div>
    </div>
</section>