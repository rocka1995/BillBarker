using System;

public class Discussion
{
    int Id { get; set; }
    string Description { get; set; }
    int Points { get; set; }
    string Message { get; set; }
    bool IsActive { get; set; }

    public Discussion()
	{
	}

    ArticleBill BillIs { get; set; }
    ArticleBill ArticleIs { get; set; }
    User UserIs { get; set; }
    Community CommunityIs { get; set; }
}
