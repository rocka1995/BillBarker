using System;

public class UserTags
{
    int Id { get; set; }
    bool ToNotify { get; set; }

    public UserTags()
	{
	}

    User UserIs { get; set; }
    Tags TagIs { get; set; }
}
