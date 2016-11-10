<?php
class Analytics
{
	var $applicationId			= '645775176198.apps.googleusercontent.com'; // A custom prefix added to the path.
	var $clientId				= '645775176198.apps.googleusercontent.com'; // A custom suffix added to the path.
	
    public function __construct($params= array())
    {
		require_once 'Zend.php';
		$Zend= new CI_Zend;
		$Zend->load('Zend/Gdata/Analytics');
		$Zend->load('Zend/Gdata/Query');
		$Zend->load('Zend/Gdata/ClientLogin');
		$Zend->load('Zend/Gdata/AuthSub');

		if (count($params) > 0)
		{
			$this->initialize($params);
		}
    }
	
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
	}	
	
	function account(){
		//require_once('Zend/Gdata/Analytics.php');		
		$email= 'mail.wizardww@gmail.com';
		$password= 'Mwizardww@';
		//UA-44837831-1
		$profileId= '44837831';
		$startDate= '2013-10-10';
		$endDate= '2013-10-25';
		
		$service = Zend_Gdata_Analytics::AUTH_SERVICE_NAME;
		$client = Zend_Gdata_ClientLogin::getHttpClient($email, $password, $service);

		$analytics = new Zend_Gdata_Analytics($client); 

		$accounts = $analytics->getAccountFeed();
		 
		foreach ($accounts as $account) { 
		  echo "\n{$account->title}\n";
		}
		
		$query = $service->newDataQuery()
			->setProfileId($profileId) 
		  ->addMetric(Zend_Gdata_Analytics_DataQuery::METRIC_BOUNCES)   
		  ->addMetric(Zend_Gdata_Analytics_DataQuery::METRIC_VISITS)
		  ->addDimension(Zend_Gdata_Analytics_DataQuery::DIMENSION_MEDIUM) 
		  ->addDimension(Zend_Gdata_Analytics_DataQuery::DIMENSION_SOURCE) 
		  ->addFilter("ga:browser==Firefox") 
		  ->setStartDate('2011-05-01')   
		  ->setEndDate('2011-05-31')   
		  ->addSort(Zend_Gdata_Analytics_DataQuery::METRIC_VISITS, true) 
		  ->addSort(Zend_Gdata_Analytics_DataQuery::METRIC_BOUNCES, false) 
		  ->setMaxResults(50);
		 
		$result = $analytics->getDataFeed($query);
		foreach($result as $row){ 
		  echo $row->getMetric('ga:visits')."\t"; 
		  echo $row->getValue('ga:bounces')."\n"; 
		}	
	}
}