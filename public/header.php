<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Termodin�mica | Efici�ncia Termodin�mica</title>
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
                    <a class="brand" href="#">Termodin�mica</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Eng. Energia</a></li>
                            <li><a href="#">Professor: Manuel Nascimento Dias Barcelos Junior | Termodin�mica 1 - 168009</a></li>
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
                                                <th>Matr�cula</th>
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
                                    <p>Este Software � uma ferramenta que auxilia na defini��o das propriedades de estado de um <em>sistema termodin�mico</em>. Dadas duas propriedade intensivas de estado de um sistema termodin�mico o software � capaz de retornar as demais propriedade de import�ncia para a analise energ�tica do processo termodin�mico executado por dispositivos ( turbina, bomba, compressor, v�lvula, caldeira, refrigeradores, difusores, bocais, motores) termodin�micos.</p>
                                    <p>As propriedades s�o: <strong>Temperatura</strong> <em>T�</em> , <strong>Press�o P[k<em>Pa</em>]</strong>, <strong>Volume Espec�fico</strong> <em>v[m<sup>3</sup>/kg]</em>, <strong>Energia Interna</strong> <em>u[hJ/kg]</em>, <strong>Entropia</strong> <em>s[kJ/kg*k]</em>, <strong>Entalpia</strong> <em>h[kJ/kg]</em>.
                                        Desta forma se conhecermos dois ponto do processo termodin�micos do sistema, informando duas propriedade quaisquer o software ser� capaz de informar as demais propriedades em cada ponto, cabendo ao engenheiro de energia trabalhar estes pontos mediante as rela��es te�rica da lei zero primeira e segunda lei  da termodin�mica afim de definir o balan�o de energia do processo, com os estados inicial e final de energia poder calcular a efici�ncia do processo.
                                    </p>
                                    <p>Podemos dizer que esta ferramenta � indispens�vel ao <span class="text-success">Engenheiro de Energia</span>. Sua utilidade � aumentada devido a portabilidade, uma vez instalado num aparelho de pequenas dimens�es tal como ipad  evita a necessidade de carregar os camalha�os expressos em papel. Por fim a natureza agradece.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>