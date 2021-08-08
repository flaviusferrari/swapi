<?php

class pagination 
{
    public $pag;


    public function __construct($list)   
    {
        $this->pag = $this->initPagination();
        $this->pag .= $this->setPrevious($list->previous);
        $this->pag .= '<li class="page-item"><a class="page-link" href="#">1</a></li>';
        $this->pag .= '<li class="page-item"><a class="page-link" href="#">2</a></li>';
        $this->pag .= $this->setNext($list->next);
        $this->pag .= $this->endPagination() ;
    }

    private function initPagination()
    {
        $init = '<nav aria-label="Page navigation example"><ul class="pagination">';
        return $init;
    }

    private function endPagination()
    {
        $end = '</ul></nav>';
        return $end;
    }

    private function setPrevious($prev)
    {
        $txtPrev = '<li class="page-item"><a class="page-link" href="'.$prev.'">Previous</a></li>';
        return $txtPrev;
    }

    private function setNext($next)
    {
        $txtNext = '<li class="page-item"><a class="page-link" href="'.$next.'">Next</a></li>';
        return $txtNext;
    }


    public function viewPagination()
    {
        return $this->pag;
    }
}