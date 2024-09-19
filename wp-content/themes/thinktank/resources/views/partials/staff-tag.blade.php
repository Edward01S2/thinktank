@php
    if (!empty($tags)) {
        $output = [];
        $lpc_tag = null;
        $lcdc_tag = null;
        foreach ($tags as $tag) {
            if (stripos($tag->name, 'LPC') !== false) {
                $lpc_tag = $tag;
            } elseif (stripos($tag->name, 'LCDC') !== false) {
                $lcdc_tag = $tag;
            } else {
                array_push($output, $tag->name);
            }
        }
        if ($lpc_tag) {
            array_unshift($output, $lpc_tag->name);
        }
        if ($lcdc_tag) {
            array_push($output, $lcdc_tag->name);
        }
        echo implode(', ', $output);
    }
@endphp
