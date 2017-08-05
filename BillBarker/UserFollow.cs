using System;

public class UserFollow
{
    int UserFollowId { get; set; }
    bool IsPrimary { get; set; }

    public UserFollow()
	{
	}

    User UserIs { get; set; }
    UserCommunity IsCommunity { get; set; }
    UserTags IsTags { get; set; }
}
