<?php

namespace wcf\system\cronjob;
use wcf\data\cronjob\Cronjob;
use calendar\data\event\Event;
use wcf\system\WCF;

class HeadblastCalendarCronjob extends AbstractCronjob {

  public function execute(Cronjob $cronjob) {
    parent::execute($cronjob);

    // According to the calendar plugin sources it's calendar\data\event\Event
    $event = new \calendar\data\event\Event::create([
      
    ]);
  }
}

?>
