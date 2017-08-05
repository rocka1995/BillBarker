using System;

public class UserSecurity
{
    
    string Password { get; set; }
    string Email { get; set; }

    public UserSecurity()
	{
	}

    User UserIs { get; set; }
    Permission HavePermission { get; set; }
}
