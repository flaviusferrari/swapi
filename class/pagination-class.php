<?php

class pagination 
{
    public $pag;


    public function __construct($list)   
    {
        $regPerPage = 10;        

        $this->pag = $this->initPagination();
        $this->pag .= $this->setPrevious($list->previous);

        if(isset($list->count)) {
            $contador = 0;
            $page = 1;
            while($contador < $list->count)
            {
                $this->pag .= $this->setItem('https://swapi.dev/api/people/?page='.$page, $page);
                $contador = $contador + $regPerPage;
                $page++;
            } 
        } else {
            $this->pag .= $this->setItem();
        }
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
        $disabled = '';
        if (empty($prev))
        {
            $prev = '#';
            $disabled = 'disabled';
        }

        $txtPrev = '<li class="page-item '.$disabled.'"><a class="page-link" href="'.$prev.'">Previous</a></li>';
        return $txtPrev;
    }

    private function setNext($next)
    {
        $disabled = '';
        if (empty($next))
        {
            $next = '#';
            $disabled = 'disabled';
        }

        $txtNext = '<li class="page-item '.$disabled.'"><a class="page-link" href="'.$next.'">Next</a></li>';
        return $txtNext;
    }

    private function setItem($item = null, $page = '1')
    {
        $disabled = '';
        if (empty($item))
        {
            $item = '#';
            $disabled = 'disabled';
        }

        $txtItem = '<li class="page-item '.$disabled.'"><a class="page-link" href="'.$item.'">'.$page.'</a></li>';
        return $txtItem;
    }

    public function viewPagination()
    {
        return $this->pag;
    }
}