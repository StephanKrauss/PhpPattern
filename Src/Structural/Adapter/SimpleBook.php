<?php

namespace App\Structural\Adapter;

/**
 *
 * Beispiel von sourcemaking
 *
 * @link https://sourcemaking.com/design_patterns/adapter/php  Quelle
 * @link https://mywiki.grp.haufemg.com/display/KBKHD/definition+of+done Eintrag Haufe-Wiki
 *
 */
class SimpleBook {
    private $author;
    private $title;
    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}
