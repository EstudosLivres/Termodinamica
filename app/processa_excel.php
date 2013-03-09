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
    
    /** @return array Celulas de uma certa linha **/
    function getCelulasArray_PorLinha($linhas_aba) {
        $retorno = array();
        
        $celulas_iterator = $linhas_aba->getCellIterator();
        $celulas_iterator->setIterateOnlyExistingCells(true);
                
        foreach ($celulas_iterator as $celula)
            if(!is_null($celula)) array_push ($retorno, utf8_decode ($celula->getCalculatedValue()));
        
        return $retorno;
    }//fim do getCelulas
    
    /** Função que carrega o excel para a memória **/
    function carregaDados(){

        
        if(temXLSX()){
            //Percorrer as planilhas
            
        }else
            echo BR . "Arquivo XLSX não encontrado!";
    }//fim da função

    // classe para facilitar a entrada do form
    class ProcessadorExcel {
        //Atributos   
        public $entrada = array();//1
        public $volume = array();//2
        public $energia = array();//3
        public $entalpia = array();//4
        public $entropia = array();//5
        private $linha_valores_input = -1;
        
        private $ENTRADA = 1;
        private $VOLUME = 2;
        private $ENERGIA = 3;
        private $ENTALPIA = 4;
        private $ENTROPIA = 5;


        function __construct($index_linha, $linhas) {
            //$celulas = $linhas[$index_linha]->getCellIterator();
        }

        /** Função para o processador se procurar dentro do excel **/
        public function captura_cellsContents($linha){
            
        }//fim da encontra linha
        
        /** Função que seleciona o item de procura 
         *  @return int Opt -> Opção a ser buscada **/
        private function itemInput(){
            $retorno_error = -1;
            
            if(isset($this->entrada[0]) && isset($this->entrada[1]))
                return $this->ENTRADA;
            else if (isset($this->volume[0]) && isset($this->volume[1]))
                return $this->VOLUME;
            else if ((isset($this->energia[0]) && isset($this->energia[1]) && isset($this->energia[2])))
                return $this->ENERGIA;
            else if (isset($this->entalpia[0]) && isset($this->entalpia[1]) && isset($this->entalpia[2]))
                return $this->ENTALPIA;
            else if (isset($this->entropia[0]) && isset($this->entropia[1]) && isset($this->entropia[2]))
                return $this->ENTROPIA;
            else
                return $retorno_error;
        }//fim itemInput
        
        /** Função que busca na linha
         *  @param int $opt opção de busca (entrada, entalpia, entropia e etc...)
         *  @param array $inputs Valores que vieram da GUI
         *  @return int index da linha com os valores desejados -> Se -1 é porque nada foi encontrado **/
        public static function varreLinha($linhas){
            //Variáveis locais
            $count_linhas = 0;
            $count_linhas_erro = -1;
            
            //Varredura das celulas dentro das linhas
            foreach ($linhas as $linha){
                $celulas = $linha->getCellIterator();
                
                //percorre as celulas
                for ($i=0; $i < count($celulas); $i++) {
                    //Garantir que não estourar o vetor
                    if(isset($celulas[i+1])){
                        if($celulas[i] == $this->entrada[1] && $celulas[i-1] == $this->entrada[0]){
                            return $count_linhas;
                        }else if($celulas[i] == $this->volume[1] && $celulas[i-1] == $this->volume[0]){
                            return $count_linhas;
                        }else if($celulas[i] == $this->energia[2] && $celulas[i-1] == $this->energia[1] && $celulas[i-2] == $this->energia[0]){
                            return $count_linhas;
                        }else if($celulas[i] == $this->entalpia[2] && $celulas[i-1] == $this->entalpia[1] && $celulas[i-2] == $this->entalpia[0]){
                            return $count_linhas;
                        }else if($celulas[i] == $this->entropia[2] && $celulas[i-1] == $this->entropia[1] && $celulas[i-2] == $this->entropia[0]){
                            return $count_linhas;
                        }//fim do switch
                    }//fim if externo
                }//fim for celulas
                
                $count_linhas++;
            }//fim do foreach
            
            return $count_linhas_erro; //retorna o valor da linha, se for -1 é porque não achou em nenhuma das linhas
        }//fim do varre linha
        
    }//fim da classe
    
?>
