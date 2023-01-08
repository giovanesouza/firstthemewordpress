<!-- COMENTÁRIO PARA CRIAÇÃO DE MODELO (TEMPLATE) -->
<?php
// Template Name: Contato
?>

<!-- PEGA O CONTEÚDO DO ARQUIVO HEADER -->
<?php get_header(); ?>

</div>
</section>


<!-- SEÇÃO DE CONTATO -->
<section class="contato">

    <div class="center">
        <div class="w50 contato-info">
            <h2>A mais importante, <br /> primeira conversa.</h2>
            <p><strong>Telefone:</strong> (81) 98888-8888</p>
            <p><strong>Telefone:</strong> (81) 98888-8888</p>
            <p><strong>Telefone:</strong> (81) 98888-8888</p>


            <!-- ÁREA D MAPA -->
            <div class="mapa-container">

                <div id="mapa">


                </div>


            </div>
        </div>


        <!-- ÁREA DO FORMULÁRIO -->
        <div class="w50 contato-form">

            <!-- FORMULÁRIO DINÂMICO -->
            <?php the_content(); ?>

            <!-- <form>
                <input type="text" placeholder="Nome" />
                <input type="text" placeholder="E-mail" />
                <input type="text" placeholder="Telefone" />

                <select>
                    <option value="">Geral</option>
                    <option value="">Suporte</option>
                </select>

                <textarea placeholder="Mensagem"></textarea>

                <input type="submit" value="Enviar" />
            </form> -->

        </div>


        <div class="clear"></div>

    </div>


</section>

<!-- PEGA O CONTEÚDO DO ARQUIVO FOOTER -->
<?php get_footer(); ?>