<?php
namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends BaseModel{
	protected $table = 'visitor';
	protected $allowedFields = ['tanggal', 'ipaddress', 'useragent', 'platform'];

	public function addvisitor($agent){
		

		if ($agent->isBrowser())
		{
				$currentAgent = $agent->getBrowser().' '.$agent->getVersion();
		}
		elseif ($agent->isRobot())
		{
				$currentAgent = $this->agent->robot();
		}
		elseif ($agent->isMobile())
		{
				$currentAgent = $agent->getMobile();
		}
		else
		{
				$currentAgent = 'Unidentified User Agent';
		}

		$data = [
			'tanggal' => date('Y-m-d H:i:s'),
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'useragent' => $currentAgent,
			'platform' => $agent->getPlatform()	
		];

		$this->save($data);
		//var_dump($data);
	}

	public function countvisitor(){
		$getData = $this->findAll();

		return count($getData);
	}

	public function countvisitortoday(){
		$getData = $this->where('date_format(tanggal, "%Y-%m-%d") = ', date('Y-m-d'))->findAll();

		return count($getData);
	}
}

?>