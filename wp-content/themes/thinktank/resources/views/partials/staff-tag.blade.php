@php
    if (!empty($tags)) {
        $output = [];
        foreach ($tags as $tag) {
            array_push($output, $tag->name);
        }
        echo implode(', ', $output);
    }
@endphp
