<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once './includes/_head.php' ?>

    <link rel="stylesheet" href="./css/documentBanner/default/default.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/documentBanner/light/light.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/documentBanner/dark/dark.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/documentBanner/bar/bar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/documentBanner/nivo-slider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/documentBanner/style.css" type="text/css" media="screen"/>

    <script src="./js/jquery-1.9.0.min.js"></script>
    <script src="./js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
    </script>
    <title>Início - WM</title>
</head>
<body>
    <!-- Inclusão via PHP do HEADER HTML da página! -->
    <?php include_once './includes/_header.php'; ?>
    
    <main>
        <section class="bannerHome">
            <!-- <img src="./img/bannerINICIO.jpg" alt="Banner da Home Page" title="Banner da Home Page" class="imgBanner"> -->
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="./img/banner_1.jpg" data-thumb="./img/banner_1.jpg"  alt="Banner da Home Page"/>
                        <img src="./img/banner_2.jpg" data-thumb="./img/banner_2.jpg"  alt="Banner da Home Page"/>
                        <img src="./img/banner_3.jpg" data-thumb="./img/banner_3.jpg"  alt="Banner da Home Page"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="boxServices">
            <div class="wrap">
                <h2>Serviços</h2>
                <div class="gridServices">
                    <div>
                        <img src="./img/box_1.jpg" alt="Consultoria" title="Consultoria" class="imgServices">
                        <h3>Consultoria</h3>
                    </div>
                    <div>
                        <img src="./img/box_2.jpg" alt="Treinamentos" title="Treinamentos" class="imgServices">
                        <h3>Treinamentos</h3>
                    </div>
                    <div>
                        <img src="./img/box_3.jpg" alt="Infra e Redes" title="Infra e Redes" class="imgServices">
                        <h3>Infra e Redes</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="boxDepoimentos">
            <div class="wrap">
                <h2>Depoimentos</h2>
                <div>
                    <div class="alignText">
                        <img src="./img/user_1.png" alt="Depoimento: Maria DB." title="Depoimento: Maria DB." class="imgUser">
                        <div>
                            <h3>Maria DB.</h3>
                            <p style="text-align: justify; text-indent: 1.2rem;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                            </p>
                        </div>
                    </div>
                    <div class="alignText">
                        <img src="./img/user_2.png" alt="Depoimento: José DB." title="Depoimento: José DB." class="imgUser">
                        <div>
                            <h3>Maria DB.</h3>
                            <p style="text-align: justify; text-indent: 1.2rem;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore hic unde, repellat odit perferendis asperiores suscipit ullam quibusdam nostrum sed architecto sunt, esse vitae assumenda accusantium veniam cum impedit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Inclusão via PHP do FOOTER HTML da página! -->
    <?php include_once './includes/_footer.php'; ?>
</body>
</html>