<?php
        echo "<h1>Sorteio</h1>";
        echo "<h3>Vencedor: </h3>";
        $sorteio[
            "JONAS SILVA JATOBA",   
            "MARCOS VINÍCIUS SANCHES CARDOSO",   
            "MARIANA DOS SANTOS",  
            "MATHEUS MARQUEZIM GENEBRA",     
            "RAFAEL TSUTAI MASSAKI", 
            "REBÉCA RODRIGUES DE OLIVEIRA",      
            "RODOLFO LEONARDO ROMO",
            "RODRIGO MIRANDA DOS SANTOS",    
            "SARAH VITÓRIA PEDROSO DA SILVA",  
            "TAYNA ADRIANA DA SILVA",
            "VANESSA ALVARES BERNARDO",      
            "VINICIUS GABRIEL GONÇALVES DOS SANTOS",    
            "VITOR TAKAYUKI HIROTOMI", 
            "WYLLIAM DOS SANTOS FLORENTINO"];

    $vencedor = array_rand($sorteio);

    echo "O vencedor sorteado foi: " + $sorteio[$vencedor];
    
?>