using System;

public class Messages
{
    int Id { get; set; }
    string Message { get; set; }
    string Title { get; set; }
    DateTime Sent { get; set; }

    public Messages()
	{
	}

    User ToUser { get; set; }
    User FromUser { get; set; }
}
