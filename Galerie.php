<?php

class Galerie

/*
 *$slozka - cesta ke složce s obrázky
 * $sloupců - kolik sloupců se zobrazí na řádek
 */
{
    public function __construct(private string $slozka, private int $sloupcu) {
        
    }
    
private array $soubory = [];//nebo lze zapsat i takto $soubory = array();  


    public function nacti(): void 
    {
        $slozka = dir($this->slozka);//directory vytvoří instanci
        
        while ($polozka = $slozka->read())//read postupne nacte vsechny polozka a whilie cyklus se ukončí po načtení poslední
        {
          //if (strpos($polozka, '_nahled.') !== false) {            většinou je lepší zapsat takto
            if (strpos($polozka, '_nahled.') && is_file($this->slozka . '/' . $polozka)){//if strpos najde podřetězec 'nahled' v $položka, neboli načtená $složka
                $this->soubory[] = $polozka;                                               //ulož do soubory[] pole! z $polozka. soubory jsou vlastně private array $soubory pozor! array
            }                                                                            //funkce is_file kontroluje zda je položka skutečně soubor a ne adresář
        }
        
        $slozka->close();//ukončí čtení složky        funguje i be bez $slozka->close, protože while se ukončí po načtení poslední
    }
    
    public function vypis(): void
    {
        echo('<table class="galerie" id="galerie" border="1"><tr>');// lza stylovat rámeček border
        $sloupec = 0;
        foreach ($this->soubory as $soubor) {
            $nahled = $this->slozka . '/' . $soubor;
            $obrazek = $this->slozka . '/' . str_replace('_nahled.', '.', $soubor);
            echo('<td><a href="' . htmlspecialchars($obrazek) . '"><img src="' . htmlspecialchars($nahled) . '" alt=""></a></td>');
            $sloupec++;
            if ($sloupec >= $this->sloupcu) {
                echo('</tr><tr>');
                $sloupec = 0;
            }
        }
        echo('</tr></table>');
    }
    
    
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

