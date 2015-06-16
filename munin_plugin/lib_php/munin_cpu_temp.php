<?php
/*##############################
* Author: Rum Coke
* Data  : 2015/06/16
* Ver   : 0.9.0
*##############################*/
/* Measurement Cpu Temp */
Class CpuTemp
{
	/* Parameters for Cput Tempture. */
	private $cpu_temp = array();

	/* Execute */
	public function measureTemp()
	{
		exec( '/usr/bin/sensors | egrep \'+[[:digit:]]+\.[[:digit:]]{1}\' | awk \'{ print $3}\' | sed -r \'s/(\+|.C)//g\' ' , $this->cpu_temp[0]);
	}
	
	/* Get Data. */
	public function getResult()
	{
		return $this->cpu_temp;
	}
}
?>
