using System;

public class UserSecurity
{
    string Password { get; set; }
    string Email { get; set; }
    User IsUser { get; set; }
    Permission HasPermission { get; set; }
}
