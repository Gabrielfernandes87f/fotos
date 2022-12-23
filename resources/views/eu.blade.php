@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')


    <style>
        .banner-eu {
            border-radius: 30px;
            box-shadow: rgb(82, 80, 80) 5px 0px 20px;


        }

        body {
            background-color: #ebe8e8;
        }
        .text-eu {
            padding: 5%;
            text-align: justify;

        }
        .text-p-1 {
            font-weight: 800;
        }
        .card-title {
            font-size: 1.2rem;
            margin: 2% 0;
            font-family: 'Ubuntu';
            font-weight: 600;

        }
        .card-name{
            font-family: 'Ubuntu', sans-serif;
        }


    </style>


    <div class="container-fluid mt-5">
        <div class="img-fluid">
            <div class="container-fluid">
                <div class="container-fluid eu">
                    <a href="/image/_RSF7724.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img src="/image/_RSF7724.jpg" class="img-fluid banner-eu" alt="">
                    </a>
                </div>
            </div>
            <div class="text-eu">
                <h1 class="text-center mb-3 card-name">Gabriel Fernandes</h1>
                <p class="container text-center text-p-1">
                    Transformando ideias em soluções inovadoras 
                </p>
                <p class="description text-success container-fluid mt-3 flex-wap">
                    Sou engenheiro de software  qualificado e com experiência em desenvolvimento de aplicações web.
                    Sou especialista em tecnologias como JavaScript, Nuxt.js, Vue.js, PHP e Laravel, e tenho habilidades sólidas em banco de dados, como MySQL e SQL.
                    Além disso, tenho experiência em ferramentas de DevOps, como Docker, Sail e Linux, e estou sempre buscando maneiras de automatizar meus processos de build e deploy utilizando CI/CD.
                    Sou também proficiente em frameworks front-end, como Livewire e Filament, e possuo habilidades avançadas em HTML5, CSS3 e Git. Estou interessado em trabalhar como desenvolvedor 
                    web full stack. Estou pronto para me juntar a uma equipe que valorize a inovação e a colaboração.
                </p>
                <div class="container-fluid bg-grid">
                    <p class="text-center">
                        Buscando novas oportunidade em desenvolvimento web
                    </p>
                </div>

            </div>

        </div>
    </div>





@endsection
