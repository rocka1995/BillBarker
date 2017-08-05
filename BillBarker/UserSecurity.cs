using System;

public class UserSecurity
{
    
    string Password { get; set; }
    string Email { get; set; }

    public UserSecurity()
	{
	}

    User IsUser { get; set; }
    Permission HavePermission { get; set; }
}
