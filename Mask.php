<?php

/**
 * Mask
 * Project: https://github.com/tigoCaval/example-documentbr
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class Mask
{
        
    /**
     * make
     *
     * @param  mixed $doc
     * @param  mixed $check
     * @return void
     */
    public function make($doc, $check)
    {       
        $maskCpf = "%s%s%s.%s%s%s.%s%s%s-%s%s";
        $maskCnpj = "%s%s.%s%s%s.%s%s%s/%s%s%s%s-%s%s";
        $data = str_split($doc);
        if($check == 1)
           return vsprintf($maskCpf,$data);
        if($check == 2)
           return vsprintf($maskCnpj,$data);   
    }
    
    /**
     * unmake
     *
     * @param  mixed $doc
     * @return void
     */
    public function unmake($doc)
    {
        $char = array(".","/","-");
        $value = str_replace($char,"",$doc);
        return $value;
    }

}