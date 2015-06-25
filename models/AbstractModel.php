<?php

namespace app\models;

use yii\helpers\ArrayHelper;
use Yii;

class AbstractModel {
    /**
     * Renders a list of checkbox toggle buttons.
     * @see http://getbootstrap.com/javascript/#buttons-checkbox-radio
     *
     * @param array $items the data item used to generate the checkboxes.
     * The array values are the labels, while the array keys are the corresponding checkbox values.
     * Note that the labels will NOT be HTML-encoded, while the values will.
     * @param array $options options (name => config) for the checkbox list. The following options are specially handled:
     *
     * - unselect: string, the value that should be submitted when none of the checkboxes is selected.
     *   By setting this option, a hidden input will be generated. If you do not want any hidden input,
     *   you should explicitly set this option as null.
     * - separator: string, the HTML code that separates items.
     * - item: callable, a callback that can be used to customize the generation of the HTML code
     *   corresponding to a single item in $items. The signature of this callback must be:
     *
     * ~~~
     * function ($index, $label, $name, $checked, $value)
     * ~~~
     *
     * where $index is the zero-based index of the checkbox in the whole list; $label
     * is the label for the checkbox; and $name, $value and $checked represent the name,
     * value and the checked status of the checkbox input.
     * @return static the field object itself
     */
    public function checkboxToggleList($items, $options = [])
    {
        if (!isset($options['template'])) {
            $this->template = $this->inlineCheckboxListTemplate;
        } else {
            $this->template = $options['template'];
            unset($options['template']);
        }
        if (!isset($options['class'])) {
            $options['class'] = 'btn-group';
        }
        $options['data-toggle'] = 'buttons';
        if (!isset($options['itemOptions'])) {
            $options['itemOptions'] = [
                'labelOptions' => ['class' => 'btn btn-default'],
            ];
        }
        if (!isset($options['item'])) {
            $options['item'] = function ($index, $label, $name, $checked, $value) use ($options){
                $labelOptions = ArrayHelper::getValue($options, 'itemOptions.labelOptions');
                if ($checked) {
                    Html::addCssClass($labelOptions, 'active');
                }
                return Html::checkbox($name, $checked, ['label' => $label, 'labelOptions' => $labelOptions, 'value' => $value]);
            };
        }
        parent::checkboxList($items, $options);
        return $this;
    }

    /**
     * Renders a list of radio toggle buttons.
     * @see http://getbootstrap.com/javascript/#buttons-checkbox-radio
     *
     * A radio button toggle list is like a checkbox toggle button list, except that it only allows single selection.
     * The selection of the radio buttons is taken from the value of the model attribute.
     * @param array $items the data item used to generate the radio buttons.
     * The array values are the labels, while the array keys are the corresponding radio values.
     * Note that the labels will NOT be HTML-encoded, while the values will.
     * @param array $options options (name => config) for the radio button list. The following options are specially handled:
     *
     * - unselect: string, the value that should be submitted when none of the radio buttons is selected.
     *   By setting this option, a hidden input will be generated. If you do not want any hidden input,
     *   you should explicitly set this option as null.
     * - separator: string, the HTML code that separates items.
     * - item: callable, a callback that can be used to customize the generation of the HTML code
     *   corresponding to a single item in $items. The signature of this callback must be:
     *
     * ~~~
     * function ($index, $label, $name, $checked, $value)
     * ~~~
     *
     * where $index is the zero-based index of the radio button in the whole list; $label
     * is the label for the radio button; and $name, $value and $checked represent the name,
     * value and the checked status of the radio button input.
     * @return static the field object itself
     */
    public function radioToggleList($items, $options = [])
    {
        if (!isset($options['template'])) {
            $this->template = $this->inlineRadioListTemplate;
        } else {
            $this->template = $options['template'];
            unset($options['template']);
        }
        if (!isset($options['class'])) {
            $options['class'] = 'btn-group';
        }
        $options['data-toggle'] = 'buttons';
        if (!isset($options['itemOptions'])) {
            $options['itemOptions'] = [
                'labelOptions' => ['class' => 'btn btn-default'],
            ];
        }
        if (!isset($options['item'])) {
            $options['item'] = function ($index, $label, $name, $checked, $value) use ($options){
                $labelOptions = ArrayHelper::getValue($options, 'itemOptions.labelOptions');
                if ($checked) {
                    Html::addCssClass($labelOptions, 'active');
                }
                return Html::radio($name, $checked, ['label' => $label, 'labelOptions' => $labelOptions, 'value' => $value]);
            };
        }
        parent::checkboxList($items, $options);
        return $this;
    }
}
