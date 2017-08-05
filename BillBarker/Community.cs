using System;

public class Community
{
    int CommunityId { get; set; }
    string Description { get; set; }
    int ModeratorId { get; set; }
    int Members { get; set; }
    bool IsChapter { get; set; }
    string Name { get; set; }
    bool IsActive { get; set; }


    public Community()
	{
	}

    User UserIs { get; set; }
    Influence InfluenceIdIs { get; set; }
}
