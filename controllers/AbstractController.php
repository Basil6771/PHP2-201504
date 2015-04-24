<?php


abstract class AbstractController
{

    protected function render($template, $data)
    {
        foreach ($data as $key => $value ){
            $$key = $value;
        }
        require $this->getTemplatePath() . '/' . $template . '.php';
    }

} 