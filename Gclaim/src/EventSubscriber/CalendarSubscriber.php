<?php

namespace App\EventSubscriber;
use App\Repository\TournoiRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;

class CalendarSubscriber implements EventSubscriberInterface
{
    private $tournoiRepository;
    private $router;

    public function __construct(
        TournoiRepository  $tournoiRepository,
        UrlGeneratorInterface $router
    ) {
        $this->tournoiRepository = $tournoiRepository;
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();

        // Modify the query to fit to your entity and needs
        // Change booking.beginAt by your start date property
        $tournois = $this->tournoiRepository->createQueryBuilder('tournoi')
            ->where('tournoi.dateev BETWEEN :start and :end ')
            ->setParameter('start', $start->format('Y-m-d H:i:s'))
            ->setParameter('end', $end->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getResult()
        ;

        foreach ($tournois as $tournoi) {
            // this create the events with your data (here booking data) to fill calendar
            $tournoiEvent = new Event(
                $tournoi->getNomtournoi(),
                $tournoi->getDateev(),
                $tournoi->getDateev() // If the end date is null or not defined, a all day event is created.
            );

            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */

            $tournoiEvent->setOptions([
                'backgroundColor' => 'red',
                'borderColor' => 'red',
            ]);
            $tournoiEvent->addOption(
                'url',
                $this->router->generate('listTournois', [
                    'id' => $tournoi->getId(),
                ])
            );

            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar->addEvent($tournoiEvent);
        }
    }

}