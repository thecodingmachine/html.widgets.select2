<?php
namespace Mouf\Html\Widgets\Select2;

use Mouf\Html\Widgets\Form\Styles\StylableFormField;

use Mouf\Html\Tags\Label;
use Mouf\Html\Renderer\Renderable;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Utils\Value\ValueUtils;
use Mouf\Html\HtmlElement\HtmlString;
use Mouf\Html\Tags\Select;
use Mouf\Utils\Value\ArrayValueInterface;
use Mouf\Html\Tags\Option;
use Mouf\Html\Tags\Optgroup;
use Mouf\Html\Widgets\Select2\Select2;
use Mouf\Html\Widgets\Form\SelectMultipleField;

/**
 * A Select2MultipleField represent a couple of &lt;label&gt; and &lt;select2 fields.
 * This class is "renderable" so you can overload the way label and select fields are displayed.
 */
class Select2MultipleField extends SelectMultipleField {
	/**
	 * Constructs the select2 textfield.
	 * 
	 * @param string|ValueInterface $label
	 * @param string|ValueInterface $name
	 * @param string|ValueInterface $value
	 * @param array<string, string>|ArrayValueInterface|Option[] $options
	 * @param Select2 $select2
	 */
	public function __construct($label = null, $name = null, $value = null, $options = array(), Select2 $select2 = null) {
		if ($select2 == null) {
			$select2 = new Select2();
		}
		parent::__construct($label, $name, $value, $options, $select2);
	}
}