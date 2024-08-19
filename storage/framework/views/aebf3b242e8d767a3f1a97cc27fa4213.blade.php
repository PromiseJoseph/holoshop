<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['id','label','labelSrOnly','helperText','hint','hintAction','hintColor','hintIcon','required','statePath'])
<x-forms::field-wrapper :id="$id" :label="$label" :label-sr-only="$labelSrOnly" :helper-text="$helperText" :hint="$hint" :hint-action="$hintAction" :hint-color="$hintColor" :hint-icon="$hintIcon" :required="$required" :state-path="$statePath" >
<x-slot name="labelPrefix" >{{ $labelPrefix }}</x-slot>
{{ $slot ?? "" }}
</x-forms::field-wrapper>