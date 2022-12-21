<?php

namespace wcf\data\headblast\calendar\cronjob;

use wcf\data\cronjob\Cronjob;
use calendar\data\event\Event;
use wcf\system\WCF;
use wcf\system\exception\SystemException;

class HeadblastCalendarCronjob extends AbstractCronjob implements ICronjob {

  public function execute(Cronjob $cronjob) {
    parent::execute($cronjob);

    // According to the calendar plugin sources it's calendar\data\event\Event
    $event = new \calendar\data\event\Event::create([
      
    ]);
  }
}

?>
