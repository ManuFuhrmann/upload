<?php

namespace ManuFuhrmann\Upload\Views;

abstract class BasePage
{
    protected $title;
    protected $head;
    protected $body;

    public function __construct($title)
    {
        $this->title = $title;
        $this->head = '';
        $this->body = '';
    }

    protected function addHead($content)
    {
        $this->head .= $content;
    }

    protected function addBody($content)
    {
        $this->body .= $content;
    }

    public function render()
    {
        $html = '<!DOCTYPE html>';
        $html .= '<html>';
        $html .= '<head>';
        $html .= '    <title>' . $this->title . '</title>';
        $html .= $this->head;
        $html .= '</head>';
        $html .= '<body>';
        $html .= $this->body;
        $html .= '</body>';
        $html .= '</html>';

        return $html;
    }
}