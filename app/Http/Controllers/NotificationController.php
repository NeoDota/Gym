<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use App\Services\AdminLTE\NotificationAdminLteService;
use App\Services\Notification\NotificationService;

class NotificationController extends Controller
{
    public function __construct(
        private readonly NotificationService $notification_service,
        private readonly NotificationAdminLteService $notification_adminLte_service
    ) {}

    public function index()
    {
        $notifications = $this->notification_service->getAllPaginated(5);

        return view('notification.index',['notifications' => $notifications]);
    }

    public function getAllFormatedByAdminLte()
    {
        $notifications = $this->notification_service->getAllUnreaded();

        return $this->notification_adminLte_service->getHtmlNotifications($notifications);
    }

    public function updateUnreaded()
    {
        $this->notification_service->updateAllUnreadedToReaded();

        return back();
    }

    public function create(){
        return view('notification.create');
    }

    /* public function store(StoreNotificationRequest $request)
    {

        $notify = Notification::create($request->all());

        return redirect()->route('notification.create')
            ->with('success', 'Notificación creada exitosamente...');
    } */
}
