using System;

public class Notifications
{
    int Id { get; set; }
    string Message { get; set; }
    DateTime Sent { get; set; }

    public Notifications()
	{
	}

    User UserIs { get; set; }
}
