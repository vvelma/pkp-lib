<?php
/**
 * @file classes/linkAction/request/AddTabAction.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AddTabAction
 * @ingroup linkAction_request
 *
 * @brief This action triggers a containing tabset to add a new tab.
 */

import('lib.pkp.classes.linkAction.request.EventAction');

class AddTabAction extends EventAction {
	/**
	 * Constructor
	 * @param $targetSelector string Selector for target to receive event.
	 */
	function __construct($targetSelector, $url, $title) {
		parent::__construct($targetSelector, 'addTab', array(
			'url' => $url,
			'title' => $title,
		));
	}
}

?>
