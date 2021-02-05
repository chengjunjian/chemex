<?php


namespace App\Admin\Metrics;


use Closure;
use Dcat\Admin\Grid\LazyRenderable as LazyGrid;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Card;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;

class SoftwareWorth extends Card
{
    /**
     * @param string|Closure|Renderable|LazyWidget $content
     *
     * @return SoftwareWorth
     */
    public function content($content): SoftwareWorth
    {
        if ($content instanceof LazyGrid) {
            $content->simple();
        }
        $total = DB::select('SELECT SUM(price) as total from software_records WHERE deleted_at IS NULL');
        $total = $total[0]->total;
        if (empty($total)) {
            $total = 0;
        }
        $software_worth = admin_trans_label('Software Worth');
        $html = <<<HTML
<div class="small-box" style="margin-bottom: 0;background: rgba(34,34,51,0.5);border-radius: .25rem">
  <div class="inner">
    <h3 class="font-grey">{$total}</h3>
    <p class="font-grey">{$software_worth}</p>
  </div>
</div>
HTML;

        $this->content = $this->formatRenderable($html);
        $this->noPadding();

        return $this;
    }
}