<?php

namespace wcf\system\cronjob;
use wcf\data\cronjob\Cronjob;
use wcf\data\calendar\Calendar;
use wcf\system\WCF;

class HeadblastCalendarCronjob extends AbstractCronjob {

  public function execute(Cronjob $cronjob) {
    parent::execute($cronjob);

    $event = new \wcf\data\calendar\Calendar::create([
      
    ]);
  }
}

?>
