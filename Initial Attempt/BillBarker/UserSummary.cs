using System;

public class UserSummary
{
    int UserSummaryId { get; set; }
    int TrustPoints { get; set; }
    bool IsBanned { get; set; }
    bool HasNotification { get; set; }
    int NotificationCount { get; set; }

    public UserSummary()
	{
	}

    NotificationType CodeIs { get; set; }
}
