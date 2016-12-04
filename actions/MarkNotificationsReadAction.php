<?php
class Pleesher_MarkNotificationsReadAction extends ApiBase
{
	public function getAllowedParams()
	{
		return array_merge(parent::getAllowedParams(), ['event_ids' => []]);
	}

	public function execute()
	{
		$event_ids = explode('|', $this->getParameter('event_ids'));
		// FIXME: check result/error
		$result = PleesherExtension::$pleesher->markNotificationsRead($this->getUser()->getId(), $event_ids);

		$this->getResult()->addValue(null, 'success', $result ? 1 : 0);
		return true;
	}
}
