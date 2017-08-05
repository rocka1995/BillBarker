using System;

public class RealmOfInfluence
{
    int Id { get; set; }

	string Description { get; set; }

    RealmOfInfluence WithinInfluence { get; set; }
}
