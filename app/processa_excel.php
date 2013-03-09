<?php
    
    
    //Auxilia do include
    $dir_frame_excel = "app/excel_frame/Classes/";
    //Includes
    include_once $dir_frame_excel . "PHPExcel.php";
    include_once $dir_frame_excel . "PHPExcel/IOFactory.php";
    
    //Criando variáveis e inicializadas e 
    define('BR',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
    
    /** Função responsável por verificar se o xls foi encontrado **/
    function temXLSX(){
        if (!file_exists("termo.xlsx"))
            return FALSE;//"Planilha de termodinâmica não encontrada.\n"
        else
            return TRUE;//"Planilha de termodinâmica encontrada!\n"
    }//fim da função
    
    /** @return array Retorna as abas do xlsx **/
    function getAbasArray() {
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel = $objReader->load("termo.xlsx");
        $retorno = array();
        
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) 
            array_push($retorno, $worksheet);
        
        return $retorno;
    }//fim do getAbasArray
    
    /** @return array Linhas do xlsx **/
    function getLinhasArray_PorAba($aba) {
        $retorno = array();
        foreach ($aba->getRowIterator() as $linha)
            array_push ($retorno, $linha);
        
        return $retorno;
    }//fim do getLinhas
    
    // classe para facilitar a entrada do form
    class ProcessadorExcel {
        //Atributos   
        public $entrada = array();//1
        public $volume = array();//2
        public $energia = array();//3
        public $entalpia = array();//4
        public $entropia = array();//5
        private $linha_valores_input = -1;
        
        function __construct($linhas) {
            $this->preenchePrcessador();
            $array_linhas = array();
            
            //Varredura das celulas dentro das linhas
            foreach ($linhas as $linha)
                array_push ($array_linhas, $linha);
            
            $index_linha = $this->varreLinha($array_linhas);
            //echo "Index da linha encontrada: $index_linha";
            
            $this->carrega_celulas($index_linha, $array_linhas);
        }

        /** Função para o processador se procurar dentro do excel **/
        public function carrega_celulas($index_linha, $array_linhas){
            if($index_linha != -1){
                
                $celulas = $this->getCelulas($array_linhas[$index_linha]->getCellIterator());
                
                /*
                 * $i=0;
                foreach ($celulas as $celula){
                    echo "Valor da celula $i da linha $index_linha: " . $celula . "<br>";
                    $i++;
                }
                 * */

                $this->entrada[0] = $celulas[0];
                $this->entrada[1] = $celulas[1];

                $this->volume[0] = $celulas[2];
                $this->volume[1] = $celulas[3];

                $this->energia[0] = $celulas[4];
                $this->energia[1] = $celulas[5];
                $this->energia[2] = $celulas[6];

                $this->entalpia[0] = $celulas[7];
                $this->entalpia[1] = $celulas[8];
                $this->entalpia[2] = $celulas[9];

                $this->entropia[0] = $celulas[10];
                $this->entropia[1] = $celulas[11];
                $this->entropia[2] = $celulas[12];
                
            }else
                return "Algum valor ainda não foi preenchido";
        }//fim da encontra linha
        
        private function getCelulas($it_celula){
                $celulas = array();
                
                //Pegando as celulas da linha corrente
                foreach ($it_celula as $celula)
                    array_push ($celulas, $celula);
                return $celulas;
        }
        
        /** Função que busca na linha
         *  @param int $opt opção de busca (entrada, entalpia, entropia e etc...)
         *  @param array $inputs Valores que vieram da GUI
         *  @return int index da linha com os valores desejados -> Se -1 é porque nada foi encontrado **/
        public function varreLinha($array_linhas){
            //Variáveis locais
            $retorno = -1;
            $linha_encontrada = false;
            
            /*
            echo "Quantidade de linhas: " . count($array_linhas);
            
            $celulas_test = $this->getCelulas($array_linhas[6]->getCellIterator());
            if($celulas_test[0] == $this->entrada[0]) //5
                echo "<br><br>Tem um 5 aqui!<br>";
            if($celulas_test[1] == $this->entrada[1]) //0.8725
                echo "Tem um 0.8725 aqui!<br><br>";
            if($celulas_test[1] == "0,8725")
                echo "Tem um 0,8725 aqui!<br><br>";
             */
            
            for($count_linha=5; ($count_linha < count($array_linhas) && !$linha_encontrada); $count_linha++){
                $celulas = $this->getCelulas($array_linhas[$count_linha]->getCellIterator());

                
                //echo "Quantidade de celulas: " . count($celulas) . "<br>";
                
                for($current_line=0; $current_line<count($celulas); $current_line++) {
                    //echo "Valor da celula: " . $celulas[$current_line] . "<br>";
                    
                    if($current_line+2 < 14){
                        if(($celulas[$current_line] == $this->entrada[0]) && ($celulas[$current_line+1] == $this->entrada[1])){
                            $retorno = $count_linha;
                            $linha_encontrada = true;
                            break;
                        }else if(($celulas[$current_line] == $this->volume[0]) && ($celulas[$current_line+1] == $this->volume[1])){
                            $retorno = $count_linha;
                            $linha_encontrada = true;
                            break;
                        }else if(($celulas[$current_line] == $this->energia[0]) && ($celulas[$current_line+1] == $this->energia[1]) && ($celulas[$current_line+2] == $this->energia[2])){
                            $retorno = $count_linha;
                            $linha_encontrada = true;
                            break;
                        }else if(($celulas[$current_line] == $this->entalpia[0]) && ($celulas[$current_line+1] == $this->entalpia[1]) && ($celulas[$current_line+2] == $this->entalpia[2])){
                            $retorno = $count_linha;
                            $linha_encontrada = true;
                            break;
                        }else if(($celulas[$current_line] == $this->entropia[0]) && ($celulas[$current_line+1] == $this->entropia[1]) && ($celulas[$current_line+2] == $this->entropia[2])){
                            $retorno = $count_linha;
                            $linha_encontrada = true;
                            break;
                        }//fim do else
                    }
                }//fim do for
                
                //echo "Próxima linha " . ($count_linha+1) ." iniciada.<br>";
            }
            return $retorno;
        }//fim do varre linha
        
        
        private function preenchePrcessador(){
            array_push($this->entrada, @$_GET["entrada1"]);
            array_push($this->entrada, @$_GET["entrada2"]);

            array_push($this->volume, @$_GET["volume1"]);
            array_push($this->volume, @$_GET["volume2"]);

            array_push($this->energia, @$_GET["energia1"]);
            array_push($this->energia, @$_GET["energia2"]);
            array_push($this->energia, @$_GET["energia3"]);

            array_push($this->entalpia, @$_GET["entalpia1"]);
            array_push($this->entalpia, @$_GET["entalpia2"]);
            array_push($this->entalpia, @$_GET["entalpia3"]);

            array_push($this->entropia, @$_GET["entropia1"]);
            array_push($this->entropia, @$_GET["entropia2"]);
            array_push($this->entropia, @$_GET["entropia3"]);    
        }
        
        function __toString() {
            return "Entrada1 = $this->entrada[0], entrada2 = $this->entrada[1], volume1 = $this->volume[0], volume2 = $this->volume[1]
                    , energia1 = $this->energia[0], energia2 = $this->energia[1], energia3 = $this->energia[2], entalpia1 = $this->entalpia[0],
                    , entalpia2 = $this->entalpia[1], entalpia3 = $this->entalpia[2], entropia1 = $this->entropia[0], entropia2 = $this->entropia[1],
                    , entropia3 = $this->entropia[2].";
        }
    }//fim da classe
    
?>
