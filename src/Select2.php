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
                $this->addClass('mouf_select2');
		
		parent::toHtml();
		?>
		<script type="text/javascript">
		jQuery(document).ready(function() { jQuery('select.mouf_select2').not( ".moufselect_done" ).select2({
			"width": "resolve"
			}).addClass('moufselect_done'); });
		</script>
		<?php 
	}
}