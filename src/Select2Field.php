<?php
namespace Mouf\Html\Widgets\Select2;

use Mouf\Html\Widgets\Form\Styles\StylableFormField;

use Mouf\Utils\Value\ValueInterface;
use Mouf\Utils\Value\ArrayValueInterface;
use Mouf\Html\Widgets\Form\SelectField;

/**
 * A Select2Field represent a couple of &lt;label&gt; and &lt;select2 fields.
 * This class is "renderable" so you can overload the way label and select fields are displayed.
 */
class Select2Field extends SelectField {
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