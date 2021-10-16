<section class="area-aluno">
    <div class="area-aluno-head">
        <h2>Seja bem vindo <?php echo $_SESSION['nome_aluno']; ?></h2>
        <p>JavaScript is the popular programming language which powers web pages and web applications. This course will get you started coding in JavaScript.</p>
        <ul>
            <li><i data-feather="user"></i> <?php echo $_SESSION['nome_aluno']; ?></li>
            <li><i data-feather="at-sign"></i> <?php echo $_SESSION['email_aluno']; ?></li>
            <li><i data-feather="key"></i> <?php echo $_SESSION['senha_aluno']; ?></li>
        </ul>
    </div><!--area-aluno-head-->

    <?php
        if(\modelos\homeModel::hasCursoById($_SESSION['id_aluno'])){
    ?>
    <div class="area-curso">
        <div class="aulas-container">
            <div class="aulas-box">
                <div class="links-tab">
                    <ul>
                        <li id="modulos">Módulos</li>
                        <li id="aulas">Aulas</li>
                        <li id="descricao">Descrição</li>
                        <li id="avaliacoes">Avaliações</li>
                    </ul>
                </div><!--links-tab-->
                <div class="conteudo-tab">
                    <ul>
                        <?php
                            $modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
                            $modulos->execute();
                            $modulos = $modulos->fetchAll();
                            foreach($modulos as $key => $value){
                        ?>
                            <li><button class="acordeao"> <?php echo $value['nome'] ?></button>
                        <?php
                            $aulas = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE modulo_id = $value[id]");
                            $aulas->execute();
                            $aulas = $aulas->fetchAll();
                            foreach($aulas as $key => $valueAulas){
                        ?>

                        <?php
                        $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if($URL_ATUAL == INCLUDE_PATH.'area_aluno/aula/'.$valueAulas['id']){ ?>
                            <div class="conteudo show">
                            <ul>
                            <li><a href="<?php echo INCLUDE_PATH ?>area_aluno/aula/<?php echo $valueAulas['id']; ?>"><i data-feather="eye"></i> <?php echo $valueAulas['nome']; ?></a></li>
                        <?php }else{ ?>
                            <div class="conteudo">
                            <ul>
                            <li><a href="<?php echo INCLUDE_PATH ?>area_aluno/aula/<?php echo $valueAulas['id']; ?>"><i data-feather="play"></i> <?php echo $valueAulas['nome']; ?></a></li>
                        <?php } ?>
                        </li>
                    </ul>
                </div>
                        <?php } ?>
                        <?php } ?>
                </div><!--conteudo-tab-->
            </div><!--aulas-box-->
        </div><!--aulas-box-->

        <div class="aula-atual-container">
            <div class="aula-box">
                <?php
                    $idAula = $arg[3];
                    $aula = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE id = ?");
                    $aula->execute(array($idAula));
                    $aula = $aula->fetch();
                ?>
                <iframe src="<?php echo $aula['link_aula']; ?>"></iframe>

                <h6><?php echo $aula['nome'] ?></h6>
                <input type="submit" value="Próxima Aula" />
                <input type="submit" value="Aula Anterior" />
            </div><!--aula-box-->
            <div class="inclusos-box">
                <h6>What’s included</h6>
                <ul>
                    <li><i data-feather="play"></i> 12 hours video</li>
                    <li><i data-feather="command"></i> Certificate</li>
                    <li><i data-feather="coffee"></i> 12 Article</li>
                    <li><i data-feather="codepen"></i> Watch Offline</li>
                    <li><i data-feather="loader"></i> Lifetime access</li>
                </ul>
            </div><!--inclusos-box-->
            <div class="info-aluno">
                <img src="https://codescandy.com/geeks-bootstrap-5/assets/images/avatar/avatar-1.jpg" />
                <h6>Jenny Wilson
                <p>Front-end Developer, Designer</p>
                <label>Instructor Rating</label>
                </h6>
                <ul>
                    <li>11,604 <br /><span>Students</span></li>
                    <li>32 <br /><span>Courses</span></li>
                    <li>12,230 <br /><span>Reviews</span></li>
                </ul>
                <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative resident at Figma explored the city of the future and how new technologies.</p>
            </div><!--info-aluno-->
        </div><!--aula-atual-curso-->
    </div><!--area-container-->

    <?php 
    }else{\Painel::redirect(INCLUDE_PATH);}
    ?>

</section>