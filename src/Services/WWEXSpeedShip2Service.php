<?php


namespace ericchew87\WWEXSpeedShip2PHP\Services;


use ericchew87\WWEXSpeedShip2PHP\ClassMap;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class WWEXSpeedShip2Service extends Service {

  public function __construct(array $wsdlOptions = [], $resetSoapClient = TRUE, $mode = 'test') {
    if ($mode === false) $mode = 'test';
    if ($mode === true) $mode = 'live';
    $default_options = [
      AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'SpeedShip2Service.wsdl',
      AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    ];
    $options = array_merge($default_options,$wsdlOptions);
    parent::__construct($options, $resetSoapClient);
  }

}
