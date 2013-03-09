<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Termodinâmica | Eficiência Termodinâmica</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <?php include_once 'public/includes_header.php'; ?>
    </head>
    <body>
        <?php    include_once './public/funcoes_excel.php'; ?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Termodinâmica</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Eng. Energia</a></li>
                            <li><a href="#">Professor: Manuel Nascimento Dias Barcelos Junior | Termodinâmica 1 - 168009</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <h4><a class="accordion-toggle text-success" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Sobre o Grupo</a></h4>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse out">
                            <div class="accordion-inner">
                                <div class="">
                                    <h3>Componentes</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome Completo</th>
                                                <th>Matrícula</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Alair P Freire</td>
                                                <td>10/43251</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Aluno 1</td>
                                                <td>00/00000</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Aluno 2</td>
                                                <td>00/00000</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Aluno 3</td>
                                                <td>00/00000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="">
                                    <h3>Sobre o Software</h3>
                                    <p>Este Software é uma ferramenta que auxilia na definição das propriedades de estado de um <em>sistema termodinâmico</em>. Dadas duas propriedade intensivas de estado de um sistema termodinâmico o software é capaz de retornar as demais propriedade de importância para a analise energética do processo termodinâmico executado por dispositivos ( turbina, bomba, compressor, válvula, caldeira, refrigeradores, difusores, bocais, motores) termodinâmicos.</p>
                                    <p>As propriedades são: <strong>Temperatura</strong> <em>T°</em> , <strong>Pressão P[k<em>Pa</em>]</strong>, <strong>Volume Específico</strong> <em>v[m<sup>3</sup>/kg]</em>, <strong>Energia Interna</strong> <em>u[hJ/kg]</em>, <strong>Entropia</strong> <em>s[kJ/kg*k]</em>, <strong>Entalpia</strong> <em>h[kJ/kg]</em>.
                                        Desta forma se conhecermos dois ponto do processo termodinâmicos do sistema, informando duas propriedade quaisquer o software será capaz de informar as demais propriedades em cada ponto, cabendo ao engenheiro de energia trabalhar estes pontos mediante as relações teórica da lei zero primeira e segunda lei  da termodinâmica afim de definir o balanço de energia do processo, com os estados inicial e final de energia poder calcular a eficiência do processo.
                                    </p>
                                    <p>Podemos dizer que esta ferramenta é indispensável ao <span class="text-success">Engenheiro de Energia</span>. Sua utilidade é aumentada devido a portabilidade, uma vez instalado num aparelho de pequenas dimensões tal como ipad  evita a necessidade de carregar os camalhaços expressos em papel. Por fim a natureza agradece.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>