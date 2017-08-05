using System;

public class Notifications
{
    int NotificationsId { get; set; }
    string Message { get; set; }
    DateTime Sent { get; set; }

    public Notifications()
	{
	}

    User IsUser { get; set; }
}
