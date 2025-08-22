<?php get_header(); ?>
<!--Conteúdo do site -->
<main>
    <!-- Hero -->
    <?php
    $hero_title = get_theme_mod("set_hero_title", "Olá meu nome é Vinicius Henrique M dos Santos, ajudo a desenvolver sua presença online!");
    $hero_button_text_1 = get_theme_mod("set_hero_textbutton_1", "Ver portfólio");
    $hero_button_text_2 = get_theme_mod("set_hero_textbutton_2", "Entre em contato");
    $hero_button_link_1 = get_theme_mod("set_hero_button_link_1", "#");
    $hero_button_link_2 = get_theme_mod("set_hero_button_link_2", "#");
    $hero_background = wp_get_attachment_url(get_theme_mod("set_hero_background"));

    $solution_background = wp_get_attachment_url(get_theme_mod("solution_background"));
    ?>
    <section class="hero" style="background-image: url(<?= esc_url($hero_background); ?>);">
        <div class="container">
            <div class="content">
                <h1>
                    <!-- Olá meu nome é Vinícius Henrique, ajudo a desenvolver sua presença online! -->
                    <?= esc_html($hero_title); ?>
                </h1>
                <div class="content-links">
                    <a href="<?= esc_url($hero_button_link_1); ?>" class="btn-cta">
                        <?= esc_html($hero_button_text_1); ?>
                    </a>
                    <a href="<?= esc_url($hero_button_link_2); ?>" class="btn-cta-outiline">
                        <?= esc_html($hero_button_text_2); ?>
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->

    <section class="about">
        <span class="background-elipse">
            <svg width="120" height="196" viewBox="0 0 120 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22" cy="98" r="96.5" stroke="#06141B" stroke-width="3" stroke-dasharray="3 3" />
            </svg>
        </span>
        <span class="background-elipse-2">
            <svg width="250" height="509" viewBox="0 0 250 509" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="255" cy="244" r="212" stroke="#06141B" stroke-width="10" stroke-dasharray="5 5" />
                <circle cx="254.5" cy="254.5" r="253" stroke="#06141B" stroke-width="3" stroke-dasharray="3 3" />
            </svg>
        </span>
        <div class="container">
            <div class="content-01">
                <h2>Um pouco sobre mim</h2>
                <p>
                    Sou um Programador Full-Stack com foco em desenvolvimento de sistemas web e sites. Possuo 3 anos
                    de experiências com desenvolvimento de sites institucionais, trabalhando com agências de
                    Marketing Digital e projetos Freelance.
                </p>
                <div>
                    <a href="#" class="btn-cta">
                        Quero saber mais
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="content-02">
                <img src="https://avatars.githubusercontent.com/u/91447833?v=4" alt="Avatar">
            </div>
        </div>
    </section>

    <!-- Solutions -->
    <section class="solutions" style="background-image: url(<?= esc_url($solution_background); ?>);">
        <div class="container">
            <div class="content-01">
                <h2>
                    Principais Soluções
                </h2>
                <p>
                    Com uma abordagem completa para sua presença online, ofereço soluções que vão desde a criação de
                    sites e blogs, que divulgam sua empresa e engajam seu público com conteúdo relevante, até a
                    adição de funcionalidades personalizadas que transforma suas ideias em negócios reais. Para
                    garantir o destaque do seu site em um mercado competitivo, realizo otimizações de SEO que
                    melhoram sua visibilidade nos motores de busca, atraindo mais visitantes.
                </p>
                <div class="links-cta">
                    <a href="#" class="btn-cta-light">
                        Baixar catálogo
                    </a>
                    <a href="#" class="btn-cta-outiline-light">
                        Solicitar Orçamento
                        <span>
                            <svg width="16" height="16" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="content-02">
                <div class="column-01">

                    <div class="cards-solutions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <path
                                d="M45.8334 25C45.8334 36.5059 36.506 45.8333 25 45.8333M45.8334 25C45.8334 13.494 36.506 4.16663 25 4.16663M45.8334 25H4.16669M25 45.8333C13.4941 45.8333 4.16669 36.5059 4.16669 25M25 45.8333C19.6505 40.2163 16.6667 32.7568 16.6667 25C16.6667 17.2432 19.6505 9.78361 25 4.16663M25 45.8333C30.3495 40.2163 33.3334 32.7568 33.3334 25C33.3334 17.2432 30.3495 9.78361 25 4.16663M4.16669 25C4.16669 13.494 13.4941 4.16663 25 4.16663"
                                stroke="#CCD0CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>
                            Sites institucionais + Blog
                        </h3>
                        <p>
                            Crie um site institucional para divulgar sua empresa e um blog para compartilhar
                            conteúdo relevante. Essa combinação fortalece sua estratégia digital, engajando o
                            público e atraindo mais visitantes.
                        </p>
                    </div>

                    <div class="cards-solutions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <path
                                d="M30.2729 25.9771L13.7896 42.4583C12.9608 43.2871 11.8367 43.7527 10.6646 43.7527C9.49249 43.7527 8.3684 43.2871 7.5396 42.4583C6.71079 41.6295 6.24518 40.5054 6.24518 39.3333C6.24518 38.1612 6.71079 37.0371 7.5396 36.2083L24.0229 19.725M32.6792 8.98747C29.5339 7.02807 26.0066 5.76251 22.3331 5.27534C18.6596 4.78817 14.9244 5.09062 11.3771 6.16247C11.0613 6.36351 10.8055 6.64594 10.6366 6.98004C10.4677 7.31414 10.392 7.68758 10.4174 8.06108C10.4427 8.43458 10.5683 8.79435 10.7808 9.10254C10.9933 9.41074 11.2849 9.65598 11.625 9.81247C16.3696 11.4329 20.8162 13.8209 24.7875 16.8812M41.0125 17.3208C42.9718 20.4662 44.2373 23.9934 44.7244 27.6669C45.2116 31.3404 44.9092 35.0756 43.8375 38.6229C43.6363 38.9382 43.354 39.1935 43.0201 39.362C42.6863 39.5305 42.3132 39.6061 41.94 39.5807C41.5669 39.5554 41.2075 39.43 40.8995 39.2179C40.5915 39.0057 40.3463 38.7146 40.1896 38.375C38.5693 33.6297 36.1814 29.1824 33.1208 25.2104M36.875 7.70831C36.4856 7.32658 35.962 7.11277 35.4167 7.11277C34.8714 7.11277 34.3478 7.32658 33.9583 7.70831L24.375 17.2916C23.9933 17.6811 23.7795 18.2047 23.7795 18.75C23.7795 19.2953 23.9933 19.8189 24.375 20.2083L29.7917 25.625C30.1811 26.0067 30.7047 26.2205 31.25 26.2205C31.7953 26.2205 32.3189 26.0067 32.7083 25.625L42.2917 16.0416C42.6734 15.6522 42.8872 15.1286 42.8872 14.5833C42.8872 14.038 42.6734 13.5144 42.2917 13.125L36.875 7.70831Z"
                                stroke="#CCD0CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>
                            Funcionalidades Personalizadas
                        </h3>
                        <p>
                            Adicione recursos sob medida ao seu site, transformando suas ideias em negócios reais.
                            Personalizo funcionalidades para atender às suas necessidades, garantindo mais
                            eficiência e resultado.
                        </p>
                    </div>

                </div>
                <div class="column-02">

                    <div class="cards-solutions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <path
                                d="M12.5 16.6667H12.5209M20.8334 16.6667H20.8542M29.1667 16.6667H29.1875M8.33335 8.33337H41.6667C43.9679 8.33337 45.8334 10.1989 45.8334 12.5V37.5C45.8334 39.8012 43.9679 41.6667 41.6667 41.6667H8.33335C6.03217 41.6667 4.16669 39.8012 4.16669 37.5V12.5C4.16669 10.1989 6.03217 8.33337 8.33335 8.33337Z"
                                stroke="#CCD0CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>
                            Otimizações para SEO
                        </h3>
                        <p>
                            Aumente a visibilidade do seu site com otimizações de SEO. Posicione-se no topo dos
                            motores de busca, supere a concorrência e atraia mais clientes para o seu negócio.
                        </p>
                    </div>

                    <div class="cards-solutions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                            fill="none">
                            <path
                                d="M30.625 13.125C30.2433 13.5144 30.0295 14.038 30.0295 14.5833C30.0295 15.1286 30.2433 15.6522 30.625 16.0416L33.9583 19.375C34.3478 19.7567 34.8714 19.9705 35.4167 19.9705C35.962 19.9705 36.4856 19.7567 36.875 19.375L44.7292 11.5208C45.7767 13.8358 46.0939 16.4151 45.6385 18.9149C45.183 21.4147 43.9765 23.7163 42.1798 25.5131C40.383 27.3098 38.0814 28.5163 35.5816 28.9718C33.0817 29.4272 30.5025 29.1101 28.1875 28.0625L13.7917 42.4583C12.9629 43.2871 11.8388 43.7527 10.6667 43.7527C9.49457 43.7527 8.37047 43.2871 7.54167 42.4583C6.71287 41.6295 6.24725 40.5054 6.24725 39.3333C6.24725 38.1612 6.71287 37.0371 7.54167 36.2083L21.9375 21.8125C20.8899 19.4975 20.5727 16.9182 21.0282 14.4184C21.4837 11.9186 22.6902 9.61697 24.4869 7.82023C26.2837 6.02349 28.5853 4.817 31.0851 4.36152C33.5849 3.90605 36.1642 4.22324 38.4792 5.27081L30.625 13.125Z"
                                stroke="#CCD0CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>
                            Manutenção e aprimoramentos
                        </h3>
                        <p>
                            Garanta que seu site esteja sempre atualizado com serviços de manutenção e melhorias.
                            Ajusto e aprimoro funcionalidades, assegurando o melhor desempenho e resultados para o
                            seu negócio.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="projects">
        <div class="container">
            <h2>Principais projetos</h2>
            <span class="barra-horizontal"></span>
            <!-- Content -->
            <div class="content-01">

                <!-- card project -->
                <?php
                if (is_active_sidebar('projeto-1')) {
                    dynamic_sidebar('projeto-1');
                }
                ?>
                <!-- <div class="card-project">
                    <div class="content-01">
                        <img src="assets/images/project.jpg" alt="">
                    </div>
                    <div class="content-02">
                        <h3>
                            Projeto teste
                        </h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout
                        </p>
                        <div class="content-cta">
                            <a href="#" class="btn-cta">
                                Ver projeto
                                <span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>

                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="svg-github">
                                    <path
                                        d="M15 22V18C15.1391 16.7473 14.7799 15.4901 14 14.5C17 14.5 20 12.5 20 9C20.08 7.75 19.73 6.52 19 5.5C19.28 4.35 19.28 3.15 19 2C19 2 18 2 16 3.5C13.36 3 10.64 3 8 3.5C6 2 5 2 5 2C4.7 3.15 4.7 4.35 5 5.5C4.27187 6.51588 3.91847 7.75279 4 9C4 12.5 7 14.5 10 14.5C9.61 14.99 9.32 15.55 9.15 16.15C8.98 16.75 8.93 17.38 9 18M9 18V22M9 18C4.49 20 4 16 2 16"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div> -->

                <span class="barra-vertical"></span>

                <!-- card project -->
                <div class="card-project">
                    <div class="content-01">
                        <img src="assets/images/project.jpg" alt="">
                    </div>
                    <div class="content-02">
                        <h3>
                            Projeto teste
                        </h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout
                        </p>
                        <div class="content-cta">
                            <a href="#" class="btn-cta">
                                Ver projeto
                                <span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>

                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="svg-github">
                                    <path
                                        d="M15 22V18C15.1391 16.7473 14.7799 15.4901 14 14.5C17 14.5 20 12.5 20 9C20.08 7.75 19.73 6.52 19 5.5C19.28 4.35 19.28 3.15 19 2C19 2 18 2 16 3.5C13.36 3 10.64 3 8 3.5C6 2 5 2 5 2C4.7 3.15 4.7 4.35 5 5.5C4.27187 6.51588 3.91847 7.75279 4 9C4 12.5 7 14.5 10 14.5C9.61 14.99 9.32 15.55 9.15 16.15C8.98 16.75 8.93 17.38 9 18M9 18V22M9 18C4.49 20 4 16 2 16"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="call-to-action">
                <a href="#" class="btn-cta">
                    Ver projetos
                    <span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </section>

    <!-- FAQ -->
    <section class="FAQ">
        <span class="background-faq"></span>
        <div class="container">
            <h2>Perguntas frequentes</h2>
            <div class="content-01">

                <!-- Acordeon -->
                <button class="acordeon">
                    <h4>
                        Quantos você cobra por projeto?
                    </h4>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9.5L12 15.5L18 9.5" stroke="#06141B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
                <div class="acordeon-content">
                    <p>
                        Cada projeto é desenvolvido de forma a se ajustar com o que o cliente precisa, então o preço é visto conforme o tamanho do projeto proposto.
                    </p>
                </div>
                <!-- Acordeon -->
                <button class="acordeon">
                    <h4>
                        Você cobra revisões ou manutenção?
                    </h4>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9.5L12 15.5L18 9.5" stroke="#06141B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
                <div class="acordeon-content">
                    <p>
                        As manutenções de atualização de plugins e informações de contato não são cobradas, somente a adição de novas funcionalidades.
                    </p>
                </div>

                <!-- Acordeon -->
                <button class="acordeon">
                    <h4>
                        Como você gerencia a comunicação durante o projeto?
                    </h4>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9.5L12 15.5L18 9.5" stroke="#06141B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
                <div class="acordeon-content">
                    <p>
                        A comunicação é feita através de e-mail corporativo e whatsapp.
                        Qual é a frequência das atualizações que você fornece?

                    </p>
                </div>

                <!-- Acordeon -->
                <button class="acordeon">
                    <h4>
                        Qual é a frequência das atualizações que você fornece?
                    </h4>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9.5L12 15.5L18 9.5" stroke="#06141B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
                <div class="acordeon-content">
                    <p>
                        Realizo atualizações mensais para sempre manter o bom funcionamento.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <div class="content-01">
                <div class="group-01">
                    <h2>
                        Envie uma mensagem agora mesmo e vamos dar vida ao seu projeto
                    </h2>
                    <p>
                        Estou aqui para criar soluções web incríveis e fundamentais que atendam às suas
                        necessidades. Se
                        você possui uma ideia, um projeto em andamento ou precisa de um suporte, podemos trabalhar
                        juntos para alcançar seus objetivos.
                    </p>
                </div>
            </div>
            <div class="content-02">
                <div class="form-contact">
                    <h2>
                        Como posso te ajudar?
                    </h2>
                    <form action="" method="post">
                        <div class="group-01">
                            <input type="text" name="" id="" placeholder="Seu nome">
                            <input type="text" name="" id="" placeholder="Seu celular">
                        </div>
                        <div class="group-02">
                            <input type="email" name="" id="" placeholder="Seu e-mail">
                        </div>
                        <div class="group-03">
                            <textarea name="" id="" cols="30" rows="10"
                                placeholder="Informe sua necessidade"></textarea>
                        </div>
                        <div class="group-04">
                            <button href="#" class="btn-cta-outiline">
                                Enviar
                                <span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 5.30847H11.6667M11.6667 5.30847V11.9751M11.6667 5.30847L5 11.9751"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>