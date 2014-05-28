<?php
namespace Mouf\Html\Widgets\Select2;

use Mouf\Html\Tags\Select;

/**
 * A &lt;select&gt; tag rendered using the Select2 jQuery library.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Select2 extends Select {
	
	private static $uniqueIdCounter = 0;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		$id = $this->getId();
		if (!$id) {
			self::$uniqueIdCounter++;
			$id = "select2_unique_id_".self::$uniqueIdCounter;
			$this->setId($id);
		}
		
		parent::toHtml();
		?>
		<script type="text/javascript">
		jQuery(document).ready(function() { jQuery('#<?= htmlentities($id) ?>').select2({
			"width": "resolve"
			}); });
		</script>
		<?php 
	}
}