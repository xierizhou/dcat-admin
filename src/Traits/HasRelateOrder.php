<?php

namespace Dcat\Admin\Traits;

trait HasRelateOrder
{
    public function disableSortWhenCreating()
    {
        if(isset($this->sortable['sort_when_creating'])){
            $this->sortable['sort_when_creating'] = false;
        }

    }
}
