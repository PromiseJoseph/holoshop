<?php
    $datalistOptions = $getDatalistOptions();

    $affixLabelClasses = [
        'whitespace-nowrap group-focus-within:text-primary-500',
        'text-gray-400' => ! $errors->has($getStatePath()),
        'text-danger-400' => $errors->has($getStatePath()),
    ];
?>

<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => $getId(),'label' => $getLabel(),'label-sr-only' => $isLabelHidden(),'helper-text' => $getHelperText(),'hint' => $getHint(),'hint-action' => $getHintAction(),'hint-color' => $getHintColor(),'hint-icon' => $getHintIcon(),'required' => $isRequired(),'state-path' => $getStatePath()]); ?>
    <div <?php echo e($attributes->merge($getExtraAttributes())->class(['filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group'])); ?>>
        <?php if(($prefixAction = $getPrefixAction()) && (! $prefixAction->isHidden())): ?>
            <?php echo e($prefixAction); ?>

        <?php endif; ?>

        <?php if($icon = $getPrefixIcon()): ?>
            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(filled($label = $getPrefixLabel())): ?>
            <span class="<?php echo \Illuminate\Support\Arr::toCssClasses($affixLabelClasses); ?>">
                <?php echo e($label); ?>

            </span>
        <?php endif; ?>

        <div class="flex-1">
            <input
                <?php if (! ($hasMask())): ?>
                    x-data="{}"
                    <?php echo e($applyStateBindingModifiers('wire:model')); ?>="<?php echo e($getStatePath()); ?>"
                    type="<?php echo e($getType()); ?>"
                <?php else: ?>
                    x-data="textInputFormComponent({
                        <?php echo e($hasMask() ? "getMaskOptionsUsing: (IMask) => ({$getJsonMaskConfiguration()})," : null); ?>

                        state: $wire.<?php echo e($applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')', lazilyEntangledModifiers: ['defer'])); ?>,
                    })"
                    type="text"
                    wire:ignore
                    <?php echo $isLazy() ? "x-on:blur=\"\$wire.\$refresh\"" : null; ?>

                    <?php echo $isDebounced() ? "x-on:input.debounce.{$getDebounce()}=\"\$wire.\$refresh\"" : null; ?>

                <?php endif; ?>
                dusk="filament.forms.<?php echo e($getStatePath()); ?>"
                <?php echo ($autocapitalize = $getAutocapitalize()) ? "autocapitalize=\"{$autocapitalize}\"" : null; ?>

                <?php echo ($autocomplete = $getAutocomplete()) ? "autocomplete=\"{$autocomplete}\"" : null; ?>

                <?php echo $isAutofocused() ? 'autofocus' : null; ?>

                <?php echo $isDisabled() ? 'disabled' : null; ?>

                id="<?php echo e($getId()); ?>"
                <?php echo ($inputMode = $getInputMode()) ? "inputmode=\"{$inputMode}\"" : null; ?>

                <?php echo $datalistOptions ? "list=\"{$getId()}-list\"" : null; ?>

                <?php echo ($placeholder = $getPlaceholder()) ? "placeholder=\"{$placeholder}\"" : null; ?>

                <?php echo ($interval = $getStep()) ? "step=\"{$interval}\"" : null; ?>

                <?php if(! $isConcealed()): ?>
                    <?php echo filled($length = $getMaxLength()) ? "maxlength=\"{$length}\"" : null; ?>

                    <?php echo filled($value = $getMaxValue()) ? "max=\"{$value}\"" : null; ?>

                    <?php echo filled($length = $getMinLength()) ? "minlength=\"{$length}\"" : null; ?>

                    <?php echo filled($value = $getMinValue()) ? "min=\"{$value}\"" : null; ?>

                    <?php echo $isRequired() ? 'required' : null; ?>

                <?php endif; ?>
                <?php echo e($getExtraAlpineAttributeBag()); ?>

                <?php echo e($getExtraInputAttributeBag()->class([
                    'filament-forms-input block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:ring-1 focus:ring-inset disabled:opacity-70',
                    'dark:bg-gray-700 dark:text-white' => config('forms.dark_mode'),
                ])); ?>

                x-bind:class="{
                    'border-gray-300 focus:border-primary-500 focus:ring-primary-500': ! (<?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?> in $wire.__instance.serverMemo.errors),
                    'dark:border-gray-600 dark:focus:border-primary-500': ! (<?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?> in $wire.__instance.serverMemo.errors) && <?php echo \Illuminate\Support\Js::from(config('forms.dark_mode'))->toHtml() ?>,
                    'border-danger-600 ring-danger-600 focus:border-danger-500 focus:ring-danger-500': (<?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?> in $wire.__instance.serverMemo.errors),
                    'dark:border-danger-400 dark:ring-danger-400 dark:focus:border-danger-500 dark:focus:ring-danger-500': (<?php echo \Illuminate\Support\Js::from($getStatePath())->toHtml() ?> in $wire.__instance.serverMemo.errors) && <?php echo \Illuminate\Support\Js::from(config('forms.dark_mode'))->toHtml() ?>,
                }"
            />
        </div>

        <?php if(filled($label = $getSuffixLabel())): ?>
            <span class="<?php echo \Illuminate\Support\Arr::toCssClasses($affixLabelClasses); ?>">
                <?php echo e($label); ?>

            </span>
        <?php endif; ?>

        <?php if($icon = $getSuffixIcon()): ?>
            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(($suffixAction = $getSuffixAction()) && (! $suffixAction->isHidden())): ?>
            <?php echo e($suffixAction); ?>

        <?php endif; ?>
    </div>

    <?php if($datalistOptions): ?>
        <datalist id="<?php echo e($getId()); ?>-list">
            <?php $__currentLoopData = $datalistOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($option); ?>" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </datalist>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\Holoshop\vendor\filament\forms\src\/../resources/views/components/text-input.blade.php ENDPATH**/ ?>