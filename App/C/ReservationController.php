<?php

namespace App\C;

use App\M\ReservationModel;

class ReservationController extends \Core\Controller {

    static public function listeAction() {
        self::$_view->reservations = ReservationModel::getAll();
        self::$_view->title = 'Liste des réservations';
    }

    static public function formAction($params) {
        if (isset($params['reservation_id'])) {
            $reservation = new ReservationModel($params['reservation_id']);
        } else {
            $reservation = new ReservationModel();
        }
        self::$_view->form = \App\V\_helper\ReservationHelper::form($reservation);
    }

    static public function updateAction($params) {
        if (isset($params['reservation_id'])) {
            $reservation = new ReservationModel($params['reservation_id']);
        } else {
            $reservation = new ReservationModel();
        }
        $reservation->populate($params);
        $reservation->store();
        self::redirect('\\App\\C\\ReservationController', 'ficheAction', ['reservation_id'=>$reservation->getId()]);
    }

    static public function ficheAction($params) {
        if (isset($params['reservation_id'])) {
            $reservation = new ReservationModel($params['reservation_id']);
        } else {
            $reservation = new ReservationModel();
        }
        self::$_view->reservation = $reservation;
    }

    static public function suppressionAction($params){
        if (isset($params['reservation_id'])) {
            $reservation = new ReservationModel($params['reservation_id']);
        } else {
            $reservation = new ReservationModel();
        }
        $reservation->delete();
        self::redirect('\\App\\C\\ReservationController', 'listeAction');
    }
}
