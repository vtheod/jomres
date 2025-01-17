<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06002delete_child_rate
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}


		$defaultProperty = getDefaultProperty();

		$id					= (int) $_REQUEST['id'];

		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($defaultProperty);

		$jomres_child_rates->delete_child_rate ( $id );
		$jomres_child_rates->save_child_rates();

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=child_policies'), '');
	}

	public function convert_greaterthans($string)
	{
		$string = str_replace('&#38;gt;', '>', $string);

		return $string;
	}
	

	public function getRetVals()
	{
		return null;
	}
}
