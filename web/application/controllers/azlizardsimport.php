<?php

/**
 * Created by PhpStorm.
 * User: a.ziethen
 * Date: 12.01.17
 * Time: 10:43
 */
class AzLizardsImport extends oxUBase
{
    protected $defaultVAT = 19;

    protected $products;

    public function render()
    {
        $this->_generateLizardsXML();

        return parent::render(); // TODO: Change the autogenerated stub
    }

    protected function _generateLizardsXML()
    {
        $articlelist = oxNew(oxArticleList::class);
        $select = 'SELECT oxid FROM oxarticles';
        $articlelist->selectString($select);

        dumpVar($articlelist);
        exit;
    }
}